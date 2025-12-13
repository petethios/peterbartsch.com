#!/bin/bash

# Script to process blockout3.glb and generate React component

MODELS_DIR="public/models"
COMPONENT_DIR="src/components"
GLB_FILE="blockout3.glb"
COMPONENT_NAME="BlockoutModel3"

echo "Processing blockout3.glb..."

# Check if blockout3.glb exists
if [ ! -f "$MODELS_DIR/$GLB_FILE" ]; then
    echo "❌ Error: $GLB_FILE not found in $MODELS_DIR"
    echo "Please copy blockout3.glb to $MODELS_DIR first"
    exit 1
fi

echo "✓ Found $GLB_FILE"

# Check if Python script exists and run it
if [ -f "process_glb.py" ]; then
    echo "Running Python script on $GLB_FILE..."
    python3 process_glb.py "$MODELS_DIR/$GLB_FILE"
    echo "✓ Python script completed"
else
    echo "⚠ No process_glb.py found, skipping Python processing"
fi

# Generate React component using gltfjsx
echo "Generating React component..."
npx gltfjsx@6.5.3 "$MODELS_DIR/$GLB_FILE" -o "$COMPONENT_DIR/$COMPONENT_NAME.jsx"

if [ $? -eq 0 ]; then
    echo "✓ Component generated: $COMPONENT_DIR/$COMPONENT_NAME.jsx"
    echo ""
    echo "Next steps:"
    echo "1. Import $COMPONENT_NAME in App.jsx"
    echo "2. Replace BlockoutModel2 with $COMPONENT_NAME"
else
    echo "❌ Error generating component"
    exit 1
fi

