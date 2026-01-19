---
name: brand-guidelines
description: Applies the official brand colors and typography of Monsters Masters & Mobsters to any sort of artifact that may benefit from having the Monsters Masters & Mobsters look-and-feel. Use it when brand colors or style guidelines, visual formatting, or company design standards apply.
---

# Monsters Masters & Mobsters Brand Styling

## Overview

To access the official brand identity and style resources of Monsters Masters & Mobsters, use this skill.

**Keywords**: branding, corporate identity, visual identity, post-processing, styling, brand colors, typography, Monsters Masters & Mobsters brand, visual formatting, visual design

## Brand Guidelines

### Colors

**Main Colors:**

- Dark: `#1C1C1C` - Primary text and dark backgrounds
- Light: `#ECE6DC` - Light backgrounds and text on dark
- Mid Gray: `#b0aea5` - Secondary elements
- Light Gray: `#e8e6dc` - Subtle backgrounds

**Accent Colors:**

- Orange: `#F75A3D` - Primary accent
- Blue: `#3FBFFF` - Secondary accent
- Green: `#86A87B` - Tertiary accent

### Typography

- **Headings**: DIN Condensed (with Roboto Condensed fallback)
- **Subheadings**: DIN Alternate (with Roboto fallback)
- **Body Text**: Playfair Display (with Georgia fallback)
- **Note**: Fonts should be pre-installed in your environment for best results

## Features

### Smart Font Application

- Applies DIN Condensed font to headings (24pt and larger)
- Applies Playfair Display font to body text
- Automatically falls back to Arial/Georgia if custom fonts unavailable
- Preserves readability across all systems

### Text Styling

- Headings (24pt+): DIN Condensed font
- Body text: Playfair Display font
- Smart color selection based on background
- Preserves text hierarchy and formatting

### Shape and Accent Colors

- Non-text shapes use accent colors
- Cycles through orange, blue, and green accents
- Maintains visual interest while staying on-brand

## Technical Details

### Font Management

- Uses system-installed DIN Condensed and Playfair Display fonts when available
- Provides automatic fallback to Arial (headings) and Georgia (body)
- No font installation required - works with existing system fonts
- For best results, pre-install DIN Condensed and Playfair Display fonts in your environment

### Color Application

- Uses RGB color values for precise brand matching
- Applied via python-pptx's RGBColor class
- Maintains color fidelity across different systems