#!/bin/bash
#
# Resume Format Generator
# Converts Peter-Bartsch-Resume.md to multiple formats using Pandoc
#
# Requirements:
#   - Pandoc (brew install pandoc)
#   - wkhtmltopdf (brew install wkhtmltopdf) - for PDF
#   - LibreOffice (optional, for better DOCX/ODT)
#
# Usage:
#   ./scripts/build-resume.sh          # Build all formats
#   ./scripts/build-resume.sh pdf      # Build only PDF
#   ./scripts/build-resume.sh docx txt # Build specific formats
#

set -e

# Configuration
SOURCE="Peter-Bartsch-Resume.md"
BASE_NAME="Peter-Bartsch-Resume"
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
PROJECT_DIR="$(dirname "$SCRIPT_DIR")"

# Change to project directory
cd "$PROJECT_DIR"

# Check if source exists
if [ ! -f "$SOURCE" ]; then
    echo "Error: $SOURCE not found"
    exit 1
fi

# Check for Pandoc
if ! command -v pandoc &> /dev/null; then
    echo "Error: Pandoc is not installed"
    echo "Install with: brew install pandoc"
    exit 1
fi

# Formats to build
if [ $# -eq 0 ]; then
    FORMATS="pdf docx txt rtf epub odt html"
else
    FORMATS="$@"
fi

echo "📄 Building resume formats from $SOURCE..."
echo ""

# PDF (via wkhtmltopdf or LaTeX)
build_pdf() {
    echo "  → Building PDF..."
    if command -v wkhtmltopdf &> /dev/null; then
        pandoc "$SOURCE" \
            -o "${BASE_NAME}.pdf" \
            --pdf-engine=wkhtmltopdf \
            --metadata title="Peter Bartsch - Resume" \
            -V margin-top=20mm \
            -V margin-bottom=20mm \
            -V margin-left=20mm \
            -V margin-right=20mm
    else
        # Fallback to LaTeX if available
        pandoc "$SOURCE" \
            -o "${BASE_NAME}.pdf" \
            --metadata title="Peter Bartsch - Resume" \
            -V geometry:margin=1in
    fi
    echo "    ✓ ${BASE_NAME}.pdf"
}

# DOCX (Word)
build_docx() {
    echo "  → Building DOCX..."
    pandoc "$SOURCE" \
        -o "${BASE_NAME}.docx" \
        --metadata title="Peter Bartsch - Resume"
    echo "    ✓ ${BASE_NAME}.docx"
}

# ODT (OpenDocument)
build_odt() {
    echo "  → Building ODT..."
    pandoc "$SOURCE" \
        -o "${BASE_NAME}.odt" \
        --metadata title="Peter Bartsch - Resume"
    echo "    ✓ ${BASE_NAME}.odt"
}

# TXT (Plain text)
build_txt() {
    echo "  → Building TXT..."
    pandoc "$SOURCE" \
        -o "${BASE_NAME}.txt" \
        --to=plain \
        --wrap=none
    echo "    ✓ ${BASE_NAME}.txt"
}

# RTF (Rich Text Format)
build_rtf() {
    echo "  → Building RTF..."
    pandoc "$SOURCE" \
        -o "${BASE_NAME}.rtf" \
        --metadata title="Peter Bartsch - Resume"
    echo "    ✓ ${BASE_NAME}.rtf"
}

# EPUB (eBook)
build_epub() {
    echo "  → Building EPUB..."
    pandoc "$SOURCE" \
        -o "${BASE_NAME}.epub" \
        --metadata title="Peter Bartsch - Resume" \
        --metadata author="Peter Bartsch"
    echo "    ✓ ${BASE_NAME}.epub"
}

# HTML (web preview)
build_html() {
    echo "  → Building HTML..."
    pandoc "$SOURCE" \
        -o "${BASE_NAME}.html" \
        --standalone \
        --metadata title="Peter Bartsch - Resume" \
        --css="resume-styles.css" \
        --template=scripts/resume-template.html 2>/dev/null || \
    pandoc "$SOURCE" \
        -o "${BASE_NAME}.html" \
        --standalone \
        --metadata title="Peter Bartsch - Resume"
    echo "    ✓ ${BASE_NAME}.html"
}

# Build requested formats
for format in $FORMATS; do
    case $format in
        pdf)  build_pdf ;;
        docx) build_docx ;;
        odt)  build_odt ;;
        txt)  build_txt ;;
        rtf)  build_rtf ;;
        epub) build_epub ;;
        html) build_html ;;
        *)    echo "  ⚠ Unknown format: $format" ;;
    esac
done

echo ""
echo "✅ Resume build complete!"
echo ""
echo "Generated files:"
ls -la ${BASE_NAME}.{pdf,docx,odt,txt,rtf,epub,html} 2>/dev/null | awk '{print "  " $9 " (" $5 " bytes)"}'
