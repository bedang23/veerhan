# Quick Reference Guide - Hero Section Update

## ✅ What Was Done

1. **Hero Section Redesigned**
   - Dark background (#0A0A0A) with holographic imagery
   - New heading: "Engineering, Intelligence & Design Moving as One System"
   - New tagline with highlighted words in bold italic
   - Two-column layout on desktop, single column on mobile

2. **Navigation Updated**
   - White text when on dark hero background (not scrolled)
   - White CTA button with black text (not scrolled)
   - Returns to normal dark text when scrolled
   - Matches blog and case studies page behavior

3. **Images Added**
   - Desktop: `/public/images/hero-desktop.png` (8.5MB)
   - Mobile: `/public/images/hero-mobile.png` (1.5MB)

4. **Typography Implemented**
   - Desktop: Syne 60px (title), DM Sans 26px (tagline)
   - Mobile: Syne 30px (title), DM Sans 16px (tagline)
   - Highlighted text: DM Sans 700 Italic

## 📁 Files Changed

- `/resources/views/home.blade.php` - Hero HTML & CSS
- `/resources/views/layouts/app.blade.php` - Font imports

## 🧪 Testing

Visit your website homepage and check:
- [ ] Background images display correctly
- [ ] Navigation is white on transparent background
- [ ] Navigation turns dark when you scroll down
- [ ] Text is readable (white on dark)
- [ ] CTA button is white with black text (before scroll)
- [ ] Mobile view works correctly
- [ ] Responsive images load properly

## 🔧 Quick Fixes

### If navigation text is not white:
1. Clear cache: `php artisan view:clear && php artisan cache:clear`
2. Hard refresh browser: Ctrl+Shift+R (Windows) or Cmd+Shift+R (Mac)

### If images don't show:
1. Check files exist: `ls -la public/images/hero-*.png`
2. Check file permissions: `chmod 644 public/images/hero-*.png`
3. Clear browser cache

### If fonts look wrong:
1. Check Google Fonts loaded in browser DevTools
2. Verify font import in `/resources/views/layouts/app.blade.php`
3. Check for CSS conflicts in browser inspector

## 🎨 Customization

### Change gradient overlay opacity:
Edit in `/resources/views/home.blade.php`:
```css
.hero-overlay {
  background: linear-gradient(90deg, 
    rgba(10,10,10,0.95) 0%,  /* Change 0.95 to adjust left opacity */
    rgba(10,10,10,0.7) 50%,   /* Change 0.7 to adjust center opacity */
    rgba(10,10,10,0.4) 100%   /* Change 0.4 to adjust right opacity */
  );
}
```

### Change font sizes:
Edit in `/resources/views/home.blade.php`:
```css
.hero-title {
  font-size: 60px; /* Desktop - change this */
}

@media (max-width: 768px) {
  .hero-title {
    font-size: 30px; /* Mobile - change this */
  }
}
```

### Change text color:
Edit in `/resources/views/home.blade.php`:
```css
.hero-title {
  color: #FFFFFF; /* Change to any color */
}
```

## 📊 Performance Tips

### Optimize images:
```bash
# Convert to WebP for better compression
cwebp public/images/hero-desktop.png -q 80 -o public/images/hero-desktop.webp
cwebp public/images/hero-mobile.png -q 80 -o public/images/hero-mobile.webp
```

Then update HTML to use WebP:
```html
<picture>
  <source media="(max-width: 768px)" srcset="{{ asset('images/hero-mobile.webp') }}" type="image/webp">
  <source media="(max-width: 768px)" srcset="{{ asset('images/hero-mobile.png') }}" type="image/png">
  <source srcset="{{ asset('images/hero-desktop.webp') }}" type="image/webp">
  <img src="{{ asset('images/hero-desktop.png') }}" alt="Engineering Intelligence Design">
</picture>
```

## 🐛 Troubleshooting

### Navigation not changing color on scroll:
Check if JavaScript is working in browser console. The scroll behavior is handled by existing JS.

### Images not loading:
1. Check browser console for 404 errors
2. Verify file paths are correct
3. Check Laravel asset helper is working: `{{ asset('images/hero-desktop.png') }}`

### Layout broken on mobile:
1. Check responsive CSS is not being overridden
2. Verify breakpoint at 768px is working
3. Test in browser DevTools mobile view

### Text not readable:
1. Increase gradient overlay opacity
2. Add text shadow: `text-shadow: 0 2px 8px rgba(0,0,0,0.5);`
3. Adjust background image brightness

## 📞 Support

If you need help:
1. Check browser console for errors (F12)
2. Verify all files are saved
3. Clear all caches
4. Test in incognito/private mode
5. Check file permissions

## 🚀 Next Steps

Optional enhancements:
1. Add fade-in animations for hero content
2. Optimize images to WebP format
3. Add parallax effect to background
4. Implement lazy loading for images
5. Add A/B testing for messaging

---

**Status**: ✅ Implementation Complete
**Last Updated**: May 15, 2026
**Version**: 1.0
