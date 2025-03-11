# phpDocumentor Markdown Setup

This directory contains scripts to generate Markdown documentation from your PHP code using phpDocumentor.

## Steps to Generate Documentation

1. Open GitHub Desktop
2. Navigate to your mainwp repository
3. Click on "Repository" in the top menu
4. Select "Open in Terminal" (this will open Terminal in the right directory)
5. Make the conversion script executable by running:
   ```
   chmod +x convert_docs.sh
   ```
6. Run the conversion script:
   ```
   ./convert_docs.sh
   ```

This will:
- Run phpDocumentor with a simplified configuration
- Convert the generated HTML files to Markdown
- Delete the original HTML files

The Markdown documentation will be available in the `docs/reference` directory.

## Troubleshooting

If you encounter any issues:

1. Make sure Python 3 is installed on your system
2. Check that phpDocumentor is working properly by running:
   ```
   php phpDocumentor.phar --version
   ```
3. If there are permission issues, run:
   ```
   chmod -R 755 docs/reference
   ```

## Manual Steps (if needed)

If the script doesn't work, you can perform the steps manually:

1. Generate HTML documentation:
   ```
   php phpDocumentor.phar -c phpdoc-simple.xml
   ```

2. Convert HTML to Markdown:
   ```
   python3 html2md.py docs/reference
   ```

3. Remove HTML files:
   ```
   find docs/reference -name "*.html" -delete
   ```
