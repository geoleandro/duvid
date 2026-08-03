# Prompts de Banner — Páginas Sobre, Biblioteca e Bibliografia

Dimensões: **1300 × 340 px**  
Estilo base para todos: pixel art de alta resolução, estética SNES/GBA avançada, paleta rica, profundidade de cena, composição panorâmica horizontal. Sem texto. Sem UI. Foco em cenário e atmosfera.

Salvar em: `/fotoIndex/tileset/`

---

## 1. fundo-sobre.webp — Página "Sobre o Duvid"

**Tema:** O projeto Duvid como ponto de convergência entre o site educacional, o app móvel e o jogo digital de aventura geográfica.

**Prompt (EN):**

```
Ultra-detailed pixel art panoramic banner, 1300x340px, SNES/GBA advanced aesthetic.
Scene: a wide digital landscape where three "worlds" converge side by side.

LEFT THIRD — The Website World:
A luminous floating island made of geographic maps (topographic lines, blue ocean areas, green landmasses). On top of the island, a glowing monitor screen showing a geography lesson with mountains and rivers. Surrounding it: small pixel-art student figures seated at desks, textbooks open, soft warm light.

CENTER — The Bridge / Globe:
A large glowing pixel-art globe (Earth) at the center, connecting all three worlds with light beams. The globe shows South America clearly visible. Below it, pixel cables or light trails flow left and right connecting the worlds. Small floating globinho (globe mascot emoji-style) orbiting the planet.

RIGHT THIRD — The Game World:
A pixel-art jungle/adventure environment. A young female adventurer (pixel sprite, side view, explorer outfit) stands at the entrance of an ancient geographic monument. Fireflies, trees, ancient stone tablets with map engravings. Game-like HUD elements (small, stylized) hint at the RPG game feel.

Overall palette: deep forest greens (#1b5e20), warm amber highlights, electric blue for the digital glow, rich earthy browns. Sky: deep twilight blue with pixel stars. Foreground: pixel-art ground/terrain. High detail, no text, no UI, purely atmospheric.
```

**Referência de uso:** Substituir `url('/fotoIndex/tileset/fundo.webp')` em `sobre.php` pelo novo banner.

---

## 2. fundo-biblioteca.webp — Página "Biblioteca"

**Tema:** Acervo de livros de Geografia — um espaço de conhecimento acolhedor, organizado, com atmosfera de biblioteca universitária em pixel art.

**Prompt (EN):**

```
Ultra-detailed pixel art panoramic banner, 1300x340px, SNES/GBA advanced aesthetic.
Scene: the interior of a cozy geography library, viewed from a wide horizontal angle.

LEFT SECTION:
Tall wooden bookshelves overflowing with books — spines colored in deep greens, amber, navy blue and earthy red. A rolling ladder leaning against the shelf. Small potted plants on top of shelves. A globe sitting on a wooden pedestal, softly glowing.

CENTER SECTION:
A wide reading table lit by warm desk lamps. An open book with world maps spread across its pages — continents and topographic curves visible in pixel detail. A small student pixel-art figure (from behind) reading intently, surrounded by stacked books. A coffee cup steaming gently.

RIGHT SECTION:
A large arched window showing a pixel-art view of mountains and forests outside. Afternoon golden light streams in, casting long warm shadows across the floor. More bookshelves and a small wooden card catalog cabinet.

Palette: warm amber and mahogany browns, forest green accents (#2e7d32), cream/parchment for pages, deep twilight outside the window. Cozy, scholarly, warm atmosphere. No text, no UI.
```

**Referência de uso:** Adicionar ao hero de `livrosgeografia.php`:
`style="background-image:url('/fotoIndex/tileset/fundo-biblioteca.webp');"`

---

## 3. fundo-bibliografia.webp — Página "Bibliografia"

**Tema:** Referências acadêmicas de Geografia — livros empilhados, mapas, autores clássicos, o rigor acadêmico com a estética visual do Duvid.

**Prompt (EN):**

```
Ultra-detailed pixel art panoramic banner, 1300x340px, SNES/GBA advanced aesthetic.
Scene: an academic study room and archive, with an emphasis on books, maps and geographic knowledge.

LEFT SECTION:
A wide wooden desk covered in open geography books, scattered papers with handwritten notes, rulers, a compass (cartographic compass), and folded paper maps. A magnifying glass resting on an open atlas showing South America. Quill pen in an inkwell.

CENTER SECTION:
A large antique world map pinned to the wall, richly detailed in pixel art — latitude/longitude lines, illustrated continents, small compass rose in the corner. Below the map, a shelf with upright books, their spines showing geographic subjects: "CARTOGRAFIA", "GEOPOLÍTICA", "BIOMAS", "RELEVO". A small framed portrait (pixelated, abstract) on the wall — hinting at a classic geographer.

RIGHT SECTION:
Stacked books in varied heights and thicknesses — some open, some closed with bookmarks. A floating magnified page showing a paragraph of geographic text with a hand-drawn map. A small pixel-art globe next to a stack of papers. Warm candlelight or desk lamp illuminating the right corner.

Palette: aged parchment cream and warm ivory for paper, deep academic greens (#1b5e20 and #2e7d32), burgundy and navy for book spines, warm amber lamp light. Atmosphere: focused, scholarly, slightly mysterious like an old archive. No text on screen, no UI elements.
```

**Referência de uso:** Adicionar ao hero de `bibliografia.php`:
`style="background-image:url('/fotoIndex/tileset/fundo-bibliografia.webp');"`

---

## Notas de produção

- Gerar com Midjourney (v6+), DALL-E 3 ou Stable Diffusion XL
- Após gerar, recortar/ajustar para exatamente **1300 × 340 px**
- Exportar como **WebP com qualidade 85**, máximo **150 KB**
- O hero já tem `border-radius: 32px` e overlay escuro — não precisa de margens nas bordas da imagem
- O ponto focal mais importante deve ficar no **terço esquerdo** (onde o texto do hero se sobrepõe ao lado esquerdo)
