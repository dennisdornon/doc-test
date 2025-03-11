#!/bin/bash

# Install required Python package if not already installed
pip3 install html2text

# Run phpDocumentor with simplified config
php phpDocumentor.phar -c phpdoc-simple.xml

# Convert HTML to Markdown
python3 html2md.py docs/reference

# Optional: Remove HTML files after conversion
find docs/reference -name "*.html" -delete

echo "Documentation conversion complete!"
