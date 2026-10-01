{
  "$schema": "https://schemas.wp.org/trunk/theme.json",
  "version": 2,
  "settings": {
    "appearanceTools": true,
    "color": {
      "palette": [
        { "slug": "primary", "color": "#0d1b2a", "name": "Primary Dark" },
        { "slug": "secondary", "color": "#13293d", "name": "Secondary Dark" },
        { "slug": "accent", "color": "#d9a441", "name": "Accent" },
        { "slug": "background", "color": "#f4efe8", "name": "Background" },
        { "slug": "surface", "color": "#ffffff", "name": "Surface" },
        { "slug": "text", "color": "#1b2430", "name": "Text" },
        { "slug": "muted", "color": "#586572", "name": "Muted Text" },
        { "slug": "border", "color": "rgba(13, 27, 42, 0.12)", "name": "Border" }
      ],
      "defaultPalette": false
    },
    "layout": {
      "contentSize": "1200px",
      "wideSize": "1400px"
    },
    "spacing": {
      "padding": true,
      "margin": true,
      "units": ["px", "rem", "vh", "vw", "%"]
    },
    "typography": {
      "dropCap": false,
      "fontSizes": [
        { "slug": "small", "size": "0.8rem", "name": "Small" },
        { "slug": "body", "size": "1.05rem", "name": "Body" },
        { "slug": "h4", "size": "1.35rem", "name": "H4" },
        { "slug": "h3", "size": "2rem", "name": "H3" },
        { "slug": "h2", "size": "3rem", "name": "H2" },
        { "slug": "h1", "size": "clamp(2.8rem, 5vw, 5.25rem)", "name": "H1" }
      ],
      "fontFamilies": [
        { "fontFamily": "Segoe UI, Arial, sans-serif", "name": "System Sans", "slug": "system-sans" },
        { "fontFamily": "Georgia, Times New Roman, serif", "name": "Georgia Serif", "slug": "georgia-serif" }
      ]
    },
    "custom": {
      "spacing": {
        "section": "clamp(4rem, 8vw, 7rem)"
      }
    }
  },
  "styles": {
    "color": {
      "background": "#f4efe8",
      "text": "#1b2430"
    },
    "typography": {
      "fontFamily": "var(--wp--preset--font-family--system-sans)",
      "lineHeight": "1.6"
    },
    "blocks": {
      "core/button": {
        "border": {
          "radius": "999px"
        },
        "typography": {
          "fontWeight": "800"
        }
      },
      "core/heading": {
        "typography": {
          "fontWeight": "900",
          "letterSpacing": "-0.05em"
        }
      }
    }
  }
}


path":"assets/js/theme.js"},{