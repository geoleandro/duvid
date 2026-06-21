"""
merge_idle.py  —  Monta jessica-spritesheet.png a partir de dois strips

COMO USAR:
  1. No Aseprite, exporte cada animacao como Horizontal Strip:
       jessica-walk.png   (ex: 4 frames de caminhada)
       jessica-idle.png   (ex: 4 frames de idle/respiro)
  2. Coloque os dois PNGs nesta mesma pasta
  3. No terminal:
       cd C:/ApacheXammp/htdocs/fotoIndex/jessica
       python merge_idle.py

RESULTADO:
  jessica-spritesheet.png atualizado com:
       Row 0  →  frames de walk
       Row 1  →  frames de idle
       Row 2  →  vazio (reserva)

  O script tambem imprime as linhas exatas para atualizar jessica-walker.js
"""

from PIL import Image, ImageDraw
import os, sys

# ---------- configuracao ----------
SHEET_OUT = "jessica-spritesheet.png"
FRAME_W   = 128   # largura de cada frame no sheet final
FRAME_H   = 128   # altura de cada frame no sheet final
COLS      = 8     # colunas totais no sheet
ROWS      = 3     # linhas totais no sheet

STRIPS = [
    {"file": "jessica-walk.png", "row": 0, "label": "walk"},
    {"file": "jessica-idle.png", "row": 1, "label": "idle"},
]
# ----------------------------------

def load_strip(path, label):
    if not os.path.exists(path):
        print(f"  [{label}] AVISO: {path} nao encontrado — linha ficara vazia")
        return None, 0
    img = Image.open(path).convert("RGBA")
    iw, ih = img.size
    n = iw // FRAME_W
    if n > COLS:
        print(f"  [{label}] AVISO: {n} frames > {COLS} colunas. Usando so {COLS}.")
        n = COLS
    print(f"  [{label}]  {path}  →  {n} frames de {FRAME_W}x{ih}px")
    # redimensiona altura se necessario (pixel art: NEAREST)
    if ih != FRAME_H:
        print(f"  [{label}]  redimensionando altura {ih} → {FRAME_H}px")
        out = Image.new("RGBA", (n * FRAME_W, FRAME_H), (0,0,0,0))
        for i in range(n):
            frame = img.crop((i*FRAME_W, 0, (i+1)*FRAME_W, ih))
            frame = frame.resize((FRAME_W, FRAME_H), Image.NEAREST)
            out.paste(frame, (i*FRAME_W, 0))
        img = out
    return img, n

def main():
    sheet_w = FRAME_W * COLS
    sheet_h = FRAME_H * ROWS
    sheet   = Image.new("RGBA", (sheet_w, sheet_h), (0, 0, 0, 0))
    draw    = ImageDraw.Draw(sheet)

    print(f"Criando sheet {sheet_w}x{sheet_h}px ({COLS} colunas x {ROWS} linhas)\n")

    results = {}
    for s in STRIPS:
        strip, n_frames = load_strip(s["file"], s["label"])
        results[s["label"]] = n_frames
        if strip is None:
            continue
        y_dest = s["row"] * FRAME_H
        for i in range(n_frames):
            frame = strip.crop((i*FRAME_W, 0, (i+1)*FRAME_W, FRAME_H))
            sheet.paste(frame, (i*FRAME_W, y_dest), mask=frame)

    sheet.save(SHEET_OUT)

    print(f"\nSalvo: {SHEET_OUT}  ({sheet_w}x{sheet_h}px)\n")
    print("Atualize jessica-walker.js com:")
    print(f"  walkRow:   0,")
    print(f"  walkCols:  {results.get('walk', 4)},")
    print(f"  idleRow:   1,")
    print(f"  idleCols:  {results.get('idle', 4)},")
    print(f"  sheetRows: {ROWS},")

if __name__ == "__main__":
    main()
