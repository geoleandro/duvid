# Prompt — Sistema de Áudio Duvid

## Status (atualizado 02/08/2026)

Implementado nesta sessão:
- `js/duvid-audio.js` reescrito com Howler.js. Howler é carregado sozinho via CDN
  (injetado dinamicamente pelo próprio script) — **não foi necessário editar as ~90
  páginas** que incluem `duvid-audio.js`, elas continuam com a mesma tag `<script>`.
- API antiga 100% preservada: `playSom()`, `playSomFinal()`, `playSomCombo()`,
  `playSomDica()`, `toggleSom()`, `somEstaMudo()`, `playSomInicio()` — todas viram
  wrappers finos sobre a nova `DuvidAudio.tocar/musica/mudo/volume/estaAtivo`.
- Botão flutuante 🔊/🔇 com slider de volume — injetado via JS pelo próprio
  `duvid-audio.js`, aparece em toda página que carrega o script. Banner de
  desbloqueio no iOS incluído.
- Ganchos de gamificação já plugados em `js/duvid-db.js` (`xp-ganho`, `nivel-up`,
  `conquista`) e efeitos extras em `js/jsquestoes-padrao.js` (`selecionar`, `enviar`)
  e `js/jssimulado-padrao.js` (`simulado-fim`) — todos **silenciosos** até os
  arquivos de som correspondentes existirem (ver catálogo abaixo).
- Pasta `/audios/` (existente) **não foi movida** — outros scripts
  (`estilos/dialogo*.js`, `paginas/sobre.php`) dependem do caminho antigo. A nova
  estrutura `/audio/fx/` e `/audio/music/` do §6 é só para os sons NOVOS do catálogo.

Pendente (precisa de arquivos de áudio, gerados por você no sfxr.me/freesound):
todos os ~25 IDs novos do catálogo (clique variações, hover, menus, modal, tab,
xp-ganho, nivel-up, conquista, streak, turma-xp, selecionar, enviar, timer-aviso,
simulado-fim, globinho-oi/incentivo, bau-abrir, e as 3 músicas ambiente). Assim que
os arquivos existirem em `/audio/fx/<id>.mp3` (ou `.webm`), o sistema toca
automaticamente — não precisa mexer no código.

---

## Contexto do projeto

Duvid Geografia é uma plataforma educacional PHP+MySQL com gamificação (XP, níveis, turmas colaborativas).
Mascote: **Globinho** 🌍. Estética: **pixel art / retro game**. Público: alunos de ensino médio preparando vestibular.

O arquivo `js/duvid-audio.js` já existe mas tem suporte limitado.
O objetivo desta sessão é construir um **sistema de áudio completo e unificado** para toda a plataforma.

---

## O que precisa ser feito

### 1. Arquivo principal: `js/duvid-audio.js` (reescrever)

Usar **Howler.js** (CDN) como engine de áudio. Motivos:
- Resolve desbloqueio de som no iOS/Android (exige interação do usuário)
- Suporta sprites (múltiplos sons num único arquivo)
- Sons sobrepostos sem travamento

**API pública que o arquivo deve expor:**
```javascript
DuvidAudio.tocar('acerto')        // toca som por nome
DuvidAudio.musica('ambiente')     // inicia trilha de fundo em loop
DuvidAudio.pararMusica()          // para a trilha
DuvidAudio.mudo(true/false)       // liga/desliga tudo
DuvidAudio.volume(0.0 a 1.0)     // ajusta volume geral
DuvidAudio.estaAtivo()           // retorna boolean
```

Persistir preferências em `localStorage` (`duvid_audio_mudo`, `duvid_audio_volume`).

---

### 2. Catálogo de sons necessários

#### UI / Navegação
| ID | Momento | Estilo |
|----|---------|--------|
| `clique` | Qualquer botão genérico | Clique seco, pixel |
| `hover` | Hover em cards de aula (opcional, suave) | Tick leve |
| `menu-abrir` | Abrir sidebar / drawer mobile | Whoosh curto |
| `menu-fechar` | Fechar sidebar | Whoosh reverso |
| `modal-abrir` | Qualquer modal / popup | Pop suave |
| `modal-fechar` | Fechar modal | Clique suave |
| `tab-mudar` | Trocar aba (ex: questões / texto) | Tick cristalino |

#### Gamificação
| ID | Momento | Estilo |
|----|---------|--------|
| `xp-ganho` | Ganhar globinhos (após aula) | Moeda coletada, estilo Mario |
| `nivel-up` | Subir de nível | Fanfarra pixel 2–3 notas |
| `conquista` | Desbloquear badge/conquista | Jingle vitória 3s |
| `streak` | Manter ou iniciar streak diário | Ping ascendente |
| `turma-xp` | Contribuir XP para a turma | Som coletivo / eco suave |

#### Questões / Quiz
| ID | Momento | Estilo |
|----|---------|--------|
| `acerto` | Resposta correta | Ding agudo positivo |
| `erro` | Resposta errada | Buzz / beep negativo curto |
| `selecionar` | Clicar em alternativa | Clique de seleção |
| `enviar` | Submeter resposta | Whoosh de envio |
| `timer-aviso` | Últimos 10s de timer | Tick acelerado |
| `simulado-fim` | Terminar simulado | Fanfarra conclusão |

#### Mascote / Especiais
| ID | Momento | Estilo |
|----|---------|--------|
| `globinho-oi` | Primeiro acesso / login | Fala pixel do Globinho "Oi!" |
| `globinho-incentivo` | Após 3 erros seguidos | Fala encorajadora |
| `bau-abrir` | Tela de recompensa (baú Zelda) | Trinco + jingle |

#### Música ambiente
| ID | Onde toca | Estilo |
|----|-----------|--------|
| `musica-estudo` | Páginas de aula (texto) | Lo-fi / chiptune calmo, loop |
| `musica-quiz` | Páginas de questões | Chiptune levemente tenso, loop |
| `musica-home` | Home (opcional, off por padrão) | Tema principal Duvid |

---

### 3. Controle de áudio na interface

**Botão flutuante** (canto inferior direito em todas as páginas, exceto mobile pequeno):
- Ícone 🔊 / 🔇 para mudo/ativo
- Slider de volume ao clicar
- Salva preferência no localStorage
- Injetar via JS (não hardcoded no PHP) para não repetir em cada arquivo

**Desbloqueio mobile:**
- Primeira interação do usuário (qualquer toque) → `Howler.ctx.resume()`
- Mostrar um banner discreto "🔊 Toque para ativar o som" se detectar iOS

---

### 4. Integração com arquivos existentes

Adicionar chamadas `DuvidAudio.tocar(...)` nos pontos certos:

| Arquivo | Onde adicionar |
|---------|---------------|
| `js/jsquestoes-padrao.js` | acerto, erro, selecionar, enviar |
| `js/jssimulado-padrao.js` | acerto, erro, simulado-fim |
| `js/duvid-db.js` | xp-ganho (após salvar globinhos), nivel-up |
| `js/duvid-core.js` | clique (botões de turma), conquista |
| `js/aulas-geral.js` | bau-abrir (ao concluir aula) |
| `includes/header.php` | injetar controle de áudio flutuante |

---

### 5. Arquivos de som

**Formato:** `.webm` (primário) + `.mp3` (fallback) — Howler faz o fallback automático.
**Local:** `/audio/fx/` para efeitos, `/audio/music/` para trilhas.
**Volume recomendado:**
- Efeitos UI: 30–50%
- Efeitos gamificação: 60–80%
- Música ambiente: 15–25% (nunca sobrepõe o conteúdo)

**Geração dos sons:**
- Site gratuito: [sfxr.me](https://sfxr.me) (pixel/chiptune perfeito para o estilo Duvid)
- Alternativa: [freesound.org](https://freesound.org) com licença CC0
- Música lo-fi: [pixabay.com/music](https://pixabay.com/music) (CC0)

---

### 6. Estrutura de arquivos esperada no final

```
/audio/
  /fx/
    clique.webm / clique.mp3
    acerto.webm / acerto.mp3
    erro.webm   / erro.mp3
    xp-ganho.webm
    nivel-up.webm
    conquista.webm
    bau-abrir.webm
    ... (demais efeitos)
  /music/
    musica-estudo.webm / musica-estudo.mp3
    musica-quiz.webm   / musica-quiz.mp3
/js/
  duvid-audio.js   ← arquivo principal reescrito com Howler.js
```

---

### 7. Ordem de implementação sugerida

1. Reescrever `duvid-audio.js` com Howler.js + API pública + controle de mudo/volume
2. Adicionar sons de acerto/erro/selecionar nas questões (impacto imediato na experiência)
3. Adicionar sons de XP ganho e nível up (gamificação)
4. Injetar botão flutuante de controle via JS
5. Adicionar música ambiente nas aulas (opt-in, off por padrão)
6. Sons do Globinho (necessita arquivos de voz customizados)

---

### Regras de ouro

- **Nunca tocar som sem interação prévia do usuário** (restrição dos browsers)
- **Música ambiente OFF por padrão** — o aluno liga se quiser
- **Efeitos ON por padrão** — mas sempre com botão de mudo visível
- Sons devem ser **curtos** (< 2s para efeitos, exceto fanfarras)
- O sistema não deve **bloquear** nada se o áudio falhar — usar `.catch(() => {})` em tudo

---

### 8. Nota de referência — estilo "Ambiente Natural" (anotado 02/08/2026)

Referência de estilo sonoro para páginas com tema de natureza (ex: diorama `fundo-natureza.webp`, Duvid1Ano):

- **Ambiente (background)**: som constante de água fluindo/cachoeira em frequência suave + rajadas leves de vento. Loop contínuo, volume baixo (ver faixa de 15–25% já definida para música ambiente).
- **SFX pontuais**: chime / pop / whoosh suave ao surgirem elementos textuais ou ícones na tela (ex: ícones de "Água", "Gelo", "Vento" em conteúdo de clima/hidrografia). Entra no catálogo de UI como uma variação de `modal-abrir`/`tab-mudar`, mas disparado por scroll-reveal (AOS) em vez de clique.
- **Ausência de voz**: sem narração/locução — foco no visual e na leitura do texto. Experiência calma, estilo ASMR/Lofi.

Isso é candidato a uma trilha adicional no catálogo (`musica-natureza` ou variação de `musica-estudo`) para páginas com diorama de natureza — ainda não implementado, aguardando arquivos de áudio correspondentes.
