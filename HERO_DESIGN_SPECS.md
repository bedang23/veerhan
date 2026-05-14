# Hero Section Design Specifications

## Typography Specifications

### 1. Main Heading: "Engineering, Intelligence & Design Moving as One System"

#### Desktop
- **Font Family**: Syne
- **Font Weight**: 700 (Bold)
- **Font Style**: Bold
- **Font Size**: 60px
- **Line Height**: 100%
- **Letter Spacing**: 0%
- **Color**: #FFFFFF (White)

#### Mobile
- **Font Family**: Syne
- **Font Weight**: 700 (Bold)
- **Font Style**: Bold
- **Font Size**: 30px
- **Line Height**: 100%
- **Letter Spacing**: 0%
- **Color**: #FFFFFF (White)

---

### 2. Tagline: "Helping businesses navigate scale, complexity, and evolving operational demands in the age of AI."

#### Desktop - Regular Text
- **Font Family**: DM Sans
- **Font Weight**: 400 (Regular)
- **Font Style**: Regular
- **Font Size**: 26px
- **Line Height**: 100%
- **Letter Spacing**: 0%
- **Color**: rgba(255,255,255,0.85)

#### Desktop - Highlighted Text (businesses, AI)
- **Font Family**: DM Sans
- **Font Weight**: 700 (Bold)
- **Font Style**: Italic
- **Font Size**: 26px
- **Line Height**: 100%
- **Letter Spacing**: 0%
- **Color**: rgba(255,255,255,0.85)

#### Mobile - Regular Text
- **Font Family**: DM Sans
- **Font Weight**: 400 (Regular)
- **Font Style**: Regular
- **Font Size**: 16px
- **Line Height**: 100%
- **Letter Spacing**: 0%
- **Color**: rgba(255,255,255,0.85)

#### Mobile - Highlighted Text (businesses, AI)
- **Font Family**: DM Sans
- **Font Weight**: 700 (Bold)
- **Font Style**: Italic
- **Font Size**: 16px
- **Line Height**: 100%
- **Letter Spacing**: 0%
- **Color**: rgba(255,255,255,0.85)

---

## Layout Specifications

### Desktop Layout
- **Container**: Max-width 1400px, centered
- **Grid**: 2 columns (1fr 1fr)
- **Gap**: 60px
- **Padding**: 120px 48px 80px
- **Background**: Dark (#0A0A0A) with holographic image
- **Overlay**: Linear gradient from left to right
  - Left: rgba(10,10,10,0.95) - 95% opacity
  - Center: rgba(10,10,10,0.7) - 70% opacity
  - Right: rgba(10,10,10,0.4) - 40% opacity

### Mobile Layout
- **Grid**: 1 column
- **Padding**: 100px 24px 60px
- **Gap**: 40px
- **Overlay**: Linear gradient from top to bottom
  - Top: rgba(10,10,10,0.9) - 90% opacity
  - Bottom: rgba(10,10,10,0.7) - 70% opacity
- **Visual**: Hidden on mobile

---

## Color Palette

- **Background**: #0A0A0A (Very dark gray/black)
- **Text Primary**: #FFFFFF (White)
- **Text Secondary**: rgba(255,255,255,0.85) (White with 85% opacity)
- **CTA Button**: #F46B1B (Orange)
- **CTA Button Hover**: #D4520A (Darker orange)

---

## Button Specifications

### "Connect with VEERHAN" Button
- **Background**: #F46B1B (Orange)
- **Color**: White
- **Padding**: 16px 36px
- **Border Radius**: 100px (fully rounded)
- **Font Size**: 15px
- **Font Weight**: 500
- **Box Shadow**: 0 8px 32px rgba(244,107,27,0.3)
- **Hover Effect**: 
  - Background: #D4520A
  - Transform: translateY(-2px)
  - Box Shadow: 0 16px 40px rgba(244,107,27,0.4)

---

## Background Images

### Desktop Image
- **File**: hero-bg-desktop.jpg
- **Recommended Size**: 1920x1080px or larger
- **Aspect Ratio**: 16:9
- **Format**: JPG or WebP
- **Content**: Holographic tech person with glowing elements
- **Position**: Cover, centered

### Mobile Image
- **File**: hero-bg-mobile.jpg
- **Recommended Size**: 768x1024px
- **Aspect Ratio**: 3:4 (portrait)
- **Format**: JPG or WebP
- **Content**: Same as desktop, optimized for mobile
- **Position**: Cover, centered

---

## Implementation Notes

1. **Responsive Breakpoint**: 768px
   - Above 768px: Desktop layout (2 columns)
   - Below 768px: Mobile layout (1 column)

2. **Font Loading**: 
   - Fonts are loaded from Google Fonts
   - Syne: weights 400, 500, 600, 700, 800
   - DM Sans: weights 300, 400, 500 (regular and italic), 700 (italic)

3. **Accessibility**:
   - High contrast text on dark background
   - Gradient overlay ensures text readability
   - Semantic HTML structure

4. **Performance**:
   - Use responsive images (different for mobile/desktop)
   - Compress images for web
   - Consider WebP format for better compression
   - Lazy loading not needed for hero (above the fold)

---

## Content

### Heading
```
Engineering, Intelligence & Design Moving as One System
```

### Tagline
```
Helping businesses navigate scale, complexity, and evolving operational demands in the age of AI.
```
(Note: "businesses" and "AI" are highlighted with bold italic)

### CTA Button
```
Connect with VEERHAN →
```

---

## CSS Classes Reference

- `.hero` - Main hero section container
- `.hero-background` - Background image container
- `.hero-overlay` - Gradient overlay for text readability
- `.hero-container` - Content container with grid layout
- `.hero-content` - Text content wrapper
- `.hero-title` - Main heading
- `.hero-tagline` - Subheading/tagline
- `.hero-tagline .highlight` - Highlighted text (bold italic)
- `.hero-actions` - Button container
- `.btn-primary` - Primary CTA button
- `.hero-visual` - Visual content area (hidden on mobile)
