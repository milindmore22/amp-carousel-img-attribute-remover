# AMP Carousel Image Attribute remover

This plugin removes `object-fit:cover` style from amp-carousel slides.

## Notes

- Plugin should work with both shortcode embed and Block.
- If it did not work with shortcode embed remove comment from [this file](https://github.com/milindmore22/amp-carousel-img-attribute-remover/blob/main/amp-carousel-img-attribute-remover.php#L34-L45)
- If you wanted to add another style/ property like object-fit:contain remove comment [this line](https://github.com/milindmore22/amp-carousel-img-attribute-remover/blob/main/sanitizers/class-sanitizer.php#L35).

## Plugin Structure

```markdown
.
├── sanitizers
│   ├── class-sanitizer.php
│   └── class-embed-sanitizer.php
└── amp-carousel-img-attribute-remover.php
```
## Sanitizers

The plugin uses `amp_content_sanitizers` filter to add custom sanitizers.

### Need a feature in plugin?
Feel free to contact us on AMP support forum