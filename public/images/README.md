# Hero Background Images

Please add the following images to this directory:

1. **hero-bg-desktop.jpg** - The desktop background image (the holographic tech person with glowing elements)
   - Use the third or fourth image you uploaded as the source
   - Recommended size: 1920x1080px or larger
   - Format: JPG or WebP for better performance

2. **hero-bg-mobile.jpg** - The mobile background image (same visual, optimized for mobile)
   - Use the same image but optimized for mobile viewing
   - Recommended size: 768x1024px or similar mobile dimensions
   - Format: JPG or WebP for better performance

## Image Optimization Tips

- Compress images to reduce file size while maintaining quality
- Consider using WebP format for better compression
- Ensure the person and holographic elements are clearly visible
- The gradient overlay will be applied via CSS, so the image should be relatively bright

## Current Implementation

The hero section now uses:
- Dark background (#0A0A0A)
- Gradient overlay for text readability
- Responsive image loading (different images for mobile and desktop)
- Typography matching the design specifications:
  - Desktop: Syne 60px bold for title, DM Sans 26px for tagline
  - Mobile: Syne 30px bold for title, DM Sans 16px for tagline
