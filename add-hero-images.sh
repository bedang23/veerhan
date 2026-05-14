#!/bin/bash

# Hero Section Image Setup Script
# This script helps you add the background images for the hero section

echo "=========================================="
echo "Veerhan Hero Section - Image Setup"
echo "=========================================="
echo ""

# Check if images directory exists
if [ ! -d "public/images" ]; then
    echo "Creating public/images directory..."
    mkdir -p public/images
fi

echo "Please add your hero background images to: public/images/"
echo ""
echo "Required images:"
echo "  1. hero-bg-desktop.jpg (recommended: 1920x1080px)"
echo "  2. hero-bg-mobile.jpg (recommended: 768x1024px)"
echo ""
echo "You can use the following commands to copy your images:"
echo ""
echo "  cp /path/to/your/desktop-image.jpg public/images/hero-bg-desktop.jpg"
echo "  cp /path/to/your/mobile-image.jpg public/images/hero-bg-mobile.jpg"
echo ""
echo "Or if you have the same image for both:"
echo "  cp /path/to/your/image.jpg public/images/hero-bg-desktop.jpg"
echo "  cp /path/to/your/image.jpg public/images/hero-bg-mobile.jpg"
echo ""

# Check if images exist
if [ -f "public/images/hero-bg-desktop.jpg" ]; then
    echo "✓ hero-bg-desktop.jpg found"
else
    echo "✗ hero-bg-desktop.jpg not found"
fi

if [ -f "public/images/hero-bg-mobile.jpg" ]; then
    echo "✓ hero-bg-mobile.jpg found"
else
    echo "✗ hero-bg-mobile.jpg not found"
fi

echo ""
echo "After adding images, clear the cache:"
echo "  php artisan cache:clear"
echo "  php artisan view:clear"
echo ""
echo "=========================================="
