# Guia de Estilo: Duvid Geografia (Estilo "Clean Pixel")

Este documento contém as especificações técnicas de cores, tipografia e componentes baseados no design system **GeoExplorer** e na interface **Clean Pixel**.

## 🎨 Paleta de Cores (Design Tokens)

As cores seguem a escala cromática definida para o projeto, com foco em legibilidade e no contraste necessário para elementos de pixel art.

### Cores Principais
- **Forest Deep (Brand):** `#2e7d32` (Verde principal da marca)
- **Forest Vibrant:** `#4caf50` (Destaques e estados ativos)
- **Primary:** `#2e7d32`
- **On Primary:** `#ffffff`

### Superfícies e Planos de Fundo
- **Surface:** `#f8f9fa` (Fundo principal da aplicação)
- **Surface Dim:** `#d9dadb` (Áreas de rodapé ou seções secundárias)
- **Surface Container Low:** `#f3f4f5` (Fundo de cards e menus laterais)
- **Surface Container:** `#eeeeee`
- **Surface Container High:** `#e6e6e6`

### Cores de Texto
- **On Surface:** `#1c1b1b` (Texto principal/Corpo)
- **On Surface Variant:** `#444746` (Subtítulos e textos auxiliares)

---

## 🔡 Tipografia

A fonte principal utilizada é a **Montserrat**, que oferece clareza moderna em contraste com os elementos pixelados.

| Estilo | Tamanho | Peso | Uso |
| :--- | :--- | :--- | :--- |
| **Headline Large** | 32px | 700 (Bold) | Títulos principais de Banners |
| **Headline Medium** | 24px | 700 (Bold) | Títulos de Cards e Seções |
| **Body Large** | 16px | 400 (Regular) | Texto de leitura e aulas |
| **Label Medium** | 12px | 500 (Medium) | Legendas e Badges |

---

## 🛠️ Especificações CSS (Componentes Clean Pixel)

### 1. Cards de Conteúdo
Os cards utilizam bordas arredondadas generosas e sombras suaves para o efeito "Clean".

```css
.card-clean-pixel {
  background: #ffffff;
  border-radius: 24px;
  border: 1px solid #e0e0e0;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  padding: 24px;
  transition: transform 0.2s ease;
}

.card-clean-pixel:hover {
  transform: translateY(-4px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}
```

### 2. Banner de Boas-Vindas (Hero)
O banner utiliza sobreposição de gradiente para garantir legibilidade sobre as ilustrações em pixel art.

```css
.hero-banner {
  position: relative;
  border-radius: 24px;
  overflow: hidden;
  background-size: cover;
  background-position: center;
  min-height: 240px;
}

.hero-overlay {
  background: linear-gradient(90deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.4) 50%, transparent 100%);
  padding: 40px;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

/* Glassmorphism para o texto no banner */
.hero-text-glass {
  background: rgba(255, 255, 255, 0.2);
  backdrop-filter: blur(8px);
  border-radius: 12px;
  padding: 16px;
  display: inline-block;
}
```

### 3. Botões (Estilo Game)
Botões com sensação tátil e bordas arredondadas que remetem a menus de jogos modernos.

```css
.btn-primary {
  background-color: #2e7d32;
  color: #ffffff;
  border-radius: 12px;
  padding: 12px 24px;
  font-weight: 600;
  border: none;
  cursor: pointer;
  transition: all 0.15s ease;
}

.btn-primary:active {
  transform: scale(0.95);
  background-color: #1b5e20;
}
```

### 4. Layout Base (Grid)
- **Gutter:** 24px
- **Container Max-Width:** 1280px
- **Sidebar Width:** 260px

---

## 🖼️ Ativos de Imagem (Pixel Art)
- **Bordas:** Usar `image-rendering: pixelated;` em elementos de pixel art pequenos para manter a nitidez.
- **Dioramas:** Devem ser exportados em alta resolução, mas manter a proporção de cores limitada para o estilo 16-bit.
