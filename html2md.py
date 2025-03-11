#!/usr/bin/env python3
"""
Convert HTML documentation to Markdown
"""
import os
import sys
import glob
import html2text
import re

def convert_file(filepath):
    """Convert a single HTML file to Markdown"""
    # Only process HTML files
    if not filepath.endswith('.html'):
        return None
    
    print(f"Converting {filepath}...")
    
    # Create the output path
    md_path = filepath.replace('.html', '.md')
    
    # Read the HTML content
    with open(filepath, 'r', encoding='utf-8') as f:
        html_content = f.read()
    
    # Convert to Markdown
    h = html2text.HTML2Text()
    h.ignore_links = False
    h.body_width = 0  # Don't wrap lines
    h.unicode_snob = True
    h.mark_code = True
    h.use_automatic_links = True
    
    md_content = h.handle(html_content)
    
    # Cleanup the Markdown content
    md_content = re.sub(r'\n{3,}', '\n\n', md_content)  # Remove excessive newlines
    
    # Fix internal links
    md_content = md_content.replace('.html)', '.md)')
    
    # Write the Markdown content
    with open(md_path, 'w', encoding='utf-8') as f:
        f.write(md_content)
    
    return md_path

def process_directory(directory):
    """Process all HTML files in a directory recursively"""
    count = 0
    for root, _, files in os.walk(directory):
        for file in files:
            if file.endswith('.html'):
                filepath = os.path.join(root, file)
                md_path = convert_file(filepath)
                if md_path:
                    count += 1
    return count

if __name__ == "__main__":
    if len(sys.argv) < 2:
        print("Usage: python html2md.py <directory>")
        sys.exit(1)
    
    directory = sys.argv[1]
    if not os.path.isdir(directory):
        print(f"Error: {directory} is not a valid directory")
        sys.exit(1)
    
    count = process_directory(directory)
    print(f"Converted {count} HTML files to Markdown")
