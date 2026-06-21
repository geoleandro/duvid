"""
sync_site_to_htdocs.py
======================

Sincroniza alterações de C:\\Users\\geole\\Documents\\Github\\Site\\
para C:\\ApacheXammp\\htdocs\\, fazendo as transformações necessárias
para o ambiente PHP do XAMPP.

USO:
    Abra o PowerShell ou CMD em C:\\ApacheXammp\\htdocs\\ e rode:
        python sync_site_to_htdocs.py

    Por padrão, executa todas as etapas. Para rodar só uma:
        python sync_site_to_htdocs.py --etapa textos
        python sync_site_to_htdocs.py --etapa jsons
        python sync_site_to_htdocs.py --etapa js
        python sync_site_to_htdocs.py --etapa questoes

ETAPAS:
    jsons    -> bibliografias.json, links.json, aulas-Xano.json
                (mantém linkTexto/linkQuestoes como .php no destino)
    textos   -> copia HTMLs, renomeia para .php, troca placeholders por
                <?php include ... ?>, troca paths ../../../ por /
    questoes -> copia JSONs das questões (1ano/, 2ano/, 3ano/, personagem/)
    js       -> copia JS atualizados (aulas-geral, carregar, duvid-*,
                jsquestoes, glossario, jssimulado, memory-game)
                + estilos/jstextos-padrao.js (caso especial)
"""

import argparse
import hashlib
import json
import os
import re
import shutil
import sys
from pathlib import Path

# ============================================
# CONFIGURAÇÃO
# ============================================
SITE = Path(r"C:\Users\geole\Documents\Github\Site")
HTDOCS = Path(r"C:\ApacheXammp\htdocs")

# Pastas que NÃO devem ser sincronizadas (próprias do htdocs)
SKIP_DIRS = {".git", "xampp", "lib", "vendor", "node_modules"}

# Arquivos que NÃO devem ser sobrescritos no htdocs (existem só lá)
SKIP_FILES = {".gitignore", ".gitattributes"}

# Padrões a ignorar dentro de Textos (backups, modelos legados)
SKIP_TEXTO_PATTERN = re.compile(
    r"(Antigo|antigo|copia|tp1copia)\.html$|modeloTexto[/\\]",
    re.IGNORECASE,
)


# ============================================
# UTILIDADES
# ============================================
def md5_arquivo(path: Path) -> str:
    """Hash MD5 do conteúdo do arquivo."""
    h = hashlib.md5()
    with open(path, "rb") as f:
        for chunk in iter(lambda: f.read(8192), b""):
            h.update(chunk)
    return h.hexdigest()


def copiar_se_diferente(origem: Path, destino: Path, verbose=True) -> bool:
    """Copia origem -> destino se conteúdo diferente. Retorna True se copiou."""
    if not origem.exists():
        return False
    if destino.exists() and md5_arquivo(origem) == md5_arquivo(destino):
        return False
    destino.parent.mkdir(parents=True, exist_ok=True)
    shutil.copy2(origem, destino)
    if verbose:
        rel = destino.relative_to(HTDOCS)
        print(f"  ✓ atualizado: {rel}")
    return True


# ============================================
# ETAPA 1: JSONs DE CONFIG
# ============================================
def sync_jsons():
    """bibliografias.json, links.json, aulas-Xano.json."""
    print("\n[1] Sincronizando JSONs de config...")
    total = 0

    # Bibliografias e links: copia direto
    for nome in ("bibliografias.json", "links.json"):
        origem = SITE / "js" / nome
        destino = HTDOCS / "js" / nome
        if copiar_se_diferente(origem, destino):
            total += 1

    # aulas-Xano.json: copia mas TRANSFORMA linkQuestoes e linkTexto para .php
    for ano in ("1", "2", "3"):
        nome = f"aulas-{ano}ano.json"
        origem = SITE / "js" / nome
        destino = HTDOCS / "js" / nome

        if not origem.exists():
            continue

        with open(origem, "r", encoding="utf-8") as f:
            dados = json.load(f)

        # Transforma cada entrada
        for aula in dados:
            # linkQuestoes: troca .html?id= por .php?id=
            if aula.get("linkQuestoes"):
                aula["linkQuestoes"] = aula["linkQuestoes"].replace(
                    "modelo-questoes.html", "modelo-questoes.php"
                )
            # linkTexto: SEMPRE troca .html por .php (todos os textos serão migrados)
            # e garante que tenha ?id=XXX para o jstextos-padrao.js identificar a aula.
            if aula.get("linkTexto"):
                lt = aula["linkTexto"]
                if "?" in lt:
                    caminho, query = lt.split("?", 1)
                else:
                    caminho, query = lt, ""

                if caminho.endswith(".html"):
                    caminho = caminho.replace(".html", ".php")
                if not query:
                    query = f"id={aula['id']}"
                aula["linkTexto"] = f"{caminho}?{query}"

        # Escreve JSON formatado
        destino.parent.mkdir(parents=True, exist_ok=True)
        with open(destino, "w", encoding="utf-8") as f:
            json.dump(dados, f, ensure_ascii=False, indent=2)
        print(f"  ✓ atualizado: js/{nome}")
        total += 1

    print(f"[1] {total} JSONs sincronizados.")


# ============================================
# ETAPA 2: TEXTOS (.html → .php)
# ============================================
def transformar_html_para_php(conteudo: str, depth: int) -> str:
    """Aplica transformações .html → .php para qualquer profundidade.

    depth = quantos níveis de pastas o arquivo está abaixo da raiz do projeto.
            Ex: paginas/sobre.php → depth=1
                1ano/Textos1/Texto07/tp7.php → depth=3
    """
    rel_includes = "../" * depth + "includes"

    # 1. Placeholder do header → PHP include
    conteudo = re.sub(
        r'<div\s+id="header-placeholder"></div>',
        f"<?php include __DIR__ . '/{rel_includes}/header.php'; ?>",
        conteudo,
    )

    # 2. Placeholder do footer → PHP include
    conteudo = re.sub(
        r'<div\s+id="footer-placeholder"></div>',
        f"<?php include __DIR__ . '/{rel_includes}/footer.php'; ?>",
        conteudo,
    )

    # 3. Paths relativos da profundidade do arquivo → "/foo" absoluto
    # Usa lookahead negativo para evitar matchar caminhos mais profundos
    if depth >= 1:
        pattern = r'(["\'])' + (r'\.\./' * depth) + r'(?!\.\./)'
        conteudo = re.sub(pattern, r"\1/", conteudo)

    return conteudo


# Mantém compatibilidade com nome antigo (depth=3 para textos)
def transformar_texto(conteudo: str) -> str:
    return transformar_html_para_php(conteudo, depth=3)


def sync_pasta_html_php(nome_pasta: str, etapa_num: int,
                       extensoes_extras=None,
                       ignore_html=None,
                       max_depth=None):
    """Sincroniza uma pasta convertendo .html → .php (depth detectado por arquivo).

    nome_pasta:        ex 'paginas', 'atividades', 'blog', 'simulados'
    etapa_num:         número da etapa (só para print)
    extensoes_extras:  extensões a copiar como-estão (.pdf, .json, etc)
    ignore_html:       lista de nomes .html a NÃO converter (deixa como .html)
    max_depth:         se set, ignora arquivos mais profundos (segurança)
    """
    print(f"\n[{etapa_num}] Sincronizando {nome_pasta}/...")
    site_dir = SITE / nome_pasta
    htdocs_dir = HTDOCS / nome_pasta

    if not site_dir.exists():
        print(f"  (pasta não existe no Site, pulando)")
        return

    extensoes_extras = set(e.lower() for e in (extensoes_extras or []))
    ignore_html = set(ignore_html or [])
    total = 0

    for arquivo in site_dir.rglob("*"):
        if arquivo.is_dir():
            continue
        rel = arquivo.relative_to(site_dir)
        # depth = quantas pastas até a raiz a partir do arquivo de destino
        # ex: paginas/sobre.php → depth = 1 (1 pasta: paginas/)
        depth_calc = len((Path(nome_pasta) / rel).parent.parts)

        if max_depth and depth_calc > max_depth:
            continue

        nome = arquivo.name

        if arquivo.suffix.lower() == ".html" and nome not in ignore_html:
            # Converte para .php
            try:
                conteudo = arquivo.read_text(encoding="utf-8")
            except UnicodeDecodeError:
                try:
                    conteudo = arquivo.read_text(encoding="utf-16")
                    print(f"  ⚠ UTF-16: {rel}")
                except Exception as e:
                    print(f"  ✗ erro lendo {rel}: {e}")
                    continue

            conteudo_novo = transformar_html_para_php(conteudo, depth_calc)
            destino = htdocs_dir / rel.with_suffix(".php")

            existe = destino.exists()
            mudou = True
            if existe:
                try:
                    mudou = destino.read_text(encoding="utf-8") != conteudo_novo
                except Exception:
                    mudou = True

            if mudou:
                destino.parent.mkdir(parents=True, exist_ok=True)
                destino.write_text(conteudo_novo, encoding="utf-8")
                marca = "✓" if existe else "+"
                print(f"  {marca} {destino.relative_to(HTDOCS)}")
                total += 1

            # Apaga .html órfão em htdocs (mesmo lugar, mesmo nome)
            html_destino = htdocs_dir / rel
            if html_destino.exists() and html_destino != destino:
                try:
                    html_destino.unlink()
                except Exception:
                    pass

        elif arquivo.suffix.lower() in extensoes_extras:
            destino = htdocs_dir / rel
            if copiar_se_diferente(arquivo, destino, verbose=False):
                print(f"  ✓ {destino.relative_to(HTDOCS)}")
                total += 1

    print(f"[{etapa_num}] {nome_pasta}: {total} arquivos atualizados.")


def sync_paginas():
    sync_pasta_html_php(
        "paginas",
        etapa_num=5,
        extensoes_extras=[".css", ".json", ".webp", ".jpg", ".png", ".gif"],
        ignore_html=["TesteAPI.html"],
    )


def sync_atividades():
    sync_pasta_html_php(
        "atividades",
        etapa_num=6,
        extensoes_extras=[".pdf", ".json", ".docx", ".jpg", ".png", ".webp"],
    )


def sync_blog():
    sync_pasta_html_php(
        "blog",
        etapa_num=7,
        extensoes_extras=[".css", ".js", ".json", ".jpg", ".jpeg", ".png",
                          ".gif", ".webp", ".txt"],
    )


def sync_simulados():
    sync_pasta_html_php(
        "simulados",
        etapa_num=8,
        extensoes_extras=[".jpg", ".jpeg", ".png", ".gif", ".webp"],
    )


def sync_textos():
    """Copia .html dos textos, transforma para .php, atualiza no destino."""
    print("\n[2] Sincronizando textos...")
    total_novos = 0
    total_atualizados = 0
    total_renomeados = 0

    for ano in ("1ano", "2ano", "3ano"):
        pasta_textos = f"Textos{ano[0]}"
        site_dir = SITE / ano / pasta_textos
        htdocs_dir = HTDOCS / ano / pasta_textos

        if not site_dir.exists():
            continue

        # Percorre toda a árvore de textos no Site
        for arquivo_html in site_dir.rglob("*.html"):
            rel = arquivo_html.relative_to(site_dir)

            # Pula backups, modelos antigos, etc.
            if SKIP_TEXTO_PATTERN.search(str(rel)):
                continue

            # Lê e transforma
            try:
                conteudo = arquivo_html.read_text(encoding="utf-8")
            except UnicodeDecodeError:
                # Tenta UTF-16 (alguns textos antigos)
                try:
                    conteudo = arquivo_html.read_text(encoding="utf-16")
                    print(f"  ⚠ {arquivo_html.name} estava em UTF-16 (convertido para UTF-8)")
                except Exception as e:
                    print(f"  ✗ ERRO ao ler {arquivo_html}: {e}")
                    continue

            conteudo_novo = transformar_texto(conteudo)

            # Caminho de destino com extensão .php
            destino_php = htdocs_dir / rel.with_suffix(".php")

            # Compara com o que já está em destino
            existe = destino_php.exists()
            mudou = True
            if existe:
                conteudo_atual = destino_php.read_text(encoding="utf-8")
                mudou = conteudo_atual != conteudo_novo

            if mudou:
                destino_php.parent.mkdir(parents=True, exist_ok=True)
                destino_php.write_text(conteudo_novo, encoding="utf-8")
                rel_destino = destino_php.relative_to(HTDOCS)
                if existe:
                    total_atualizados += 1
                    print(f"  ✓ atualizado: {rel_destino}")
                else:
                    total_novos += 1
                    print(f"  + novo: {rel_destino}")

            # Apaga .html órfão (legado) que esteja no htdocs no mesmo lugar
            destino_html = htdocs_dir / rel
            if destino_html.exists() and destino_html != destino_php:
                try:
                    destino_html.unlink()
                    total_renomeados += 1
                except Exception as e:
                    print(f"  ⚠ não consegui apagar {destino_html}: {e}")

        # Copia também imagens (.png, .jpg, .gif, .webp) e outros assets dos textos
        for asset in site_dir.rglob("*"):
            if asset.is_dir():
                continue
            if asset.suffix.lower() not in (".png", ".jpg", ".jpeg", ".gif", ".webp",
                                              ".mp3", ".mp4", ".woff", ".css"):
                continue
            rel = asset.relative_to(site_dir)
            destino = htdocs_dir / rel
            copiar_se_diferente(asset, destino, verbose=False)

    print(f"[2] textos: {total_novos} novos, {total_atualizados} atualizados, "
          f"{total_renomeados} .html antigos removidos.")


# ============================================
# ETAPA 3: QUESTÕES (JSONs + imagens + personagem)
# ============================================
def sync_questoes():
    """Sincroniza pasta questoes/ inteira (mantém estrutura)."""
    print("\n[3] Sincronizando questões...")
    total = 0
    for ano in ("1ano", "2ano", "3ano", "personagem"):
        site_dir = SITE / "questoes" / ano
        htdocs_dir = HTDOCS / "questoes" / ano
        if not site_dir.exists():
            continue
        for arquivo in site_dir.rglob("*"):
            if arquivo.is_dir():
                continue
            rel = arquivo.relative_to(site_dir)
            destino = htdocs_dir / rel
            if copiar_se_diferente(arquivo, destino, verbose=False):
                total += 1
                print(f"  ✓ {destino.relative_to(HTDOCS)}")
    print(f"[3] {total} arquivos de questões sincronizados.")


# ============================================
# ETAPA 4: JS / CSS
# ============================================
def sync_js():
    """Sincroniza JS e CSS críticos."""
    print("\n[4] Sincronizando JS e CSS...")
    total = 0

    # JS na pasta js/
    for arquivo in (SITE / "js").glob("*.js"):
        destino = HTDOCS / "js" / arquivo.name
        if copiar_se_diferente(arquivo, destino):
            total += 1

    # JS especial: jstextos-padrao.js
    # Em ambos (Site e htdocs) o arquivo vive em estilos/ (referência histórica
    # nos textos: ../../../estilos/jstextos-padrao.js).
    origem = SITE / "estilos" / "jstextos-padrao.js"
    destino = HTDOCS / "estilos" / "jstextos-padrao.js"
    if origem.exists() and copiar_se_diferente(origem, destino):
        total += 1
    # NOTA: se ainda existir uma duplicata em Site/js/jstextos-padrao.js,
    # ela é ignorada de propósito. Considere apagá-la para evitar confusão.

    # CSS atualizados (rpg-sistema, ModeloCss, etc.)
    for arquivo in (SITE / "estilos").glob("*.css"):
        destino = HTDOCS / "estilos" / arquivo.name
        if copiar_se_diferente(arquivo, destino):
            total += 1

    print(f"[4] {total} arquivos JS/CSS sincronizados.")


# ============================================
# MAIN
# ============================================
def main():
    parser = argparse.ArgumentParser(description="Sync Site → htdocs")
    parser.add_argument(
        "--etapa",
        choices=["jsons", "textos", "questoes", "js", "paginas",
                 "atividades", "blog", "simulados", "tudo"],
        default="tudo",
        help="Qual etapa executar (default: tudo)",
    )
    args = parser.parse_args()

    if not SITE.exists():
        print(f"ERRO: pasta do Site não encontrada: {SITE}")
        sys.exit(1)
    if not HTDOCS.exists():
        print(f"ERRO: pasta do htdocs não encontrada: {HTDOCS}")
        sys.exit(1)

    print(f"Site:   {SITE}")
    print(f"Htdocs: {HTDOCS}")

    if args.etapa in ("jsons", "tudo"):
        sync_jsons()
    if args.etapa in ("js", "tudo"):
        sync_js()
    if args.etapa in ("questoes", "tudo"):
        sync_questoes()
    if args.etapa in ("textos", "tudo"):
        sync_textos()
    if args.etapa in ("paginas", "tudo"):
        sync_paginas()
    if args.etapa in ("atividades", "tudo"):
        sync_atividades()
    if args.etapa in ("blog", "tudo"):
        sync_blog()
    if args.etapa in ("simulados", "tudo"):
        sync_simulados()

    print("\n✓ Sincronização concluída.")


if __name__ == "__main__":
    main()
