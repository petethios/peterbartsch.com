#!/bin/bash

# Configuration
USER="tronicadmin"
HOST="peterbartsch.com"
REMOTE_DIR="petebartsch.com"  # Note: peterbartsch.com redirects to petebartsch.com
SSH_OPTS="-o IdentitiesOnly=yes -o PreferredAuthentications=publickey,password"

# Files to deploy
FILES=(
    "index.php"
    "styles.css"
    "script.js"
    "robots.txt"
    "sitemap.xml"
    "og-image.png"
)

echo "Deploying to $HOST:$REMOTE_DIR..."

# Check if required files exist
for file in "${FILES[@]}"; do
    if [ ! -f "$file" ]; then
        echo "Warning: $file not found, skipping..."
    fi
done

# Upload all main files in one scp call
echo "Uploading main files..."
scp $SSH_OPTS index.php styles.css script.js sitemap.xml "$USER@$HOST:$REMOTE_DIR/"

# Create remote directories
echo "Creating remote directories..."
ssh $SSH_OPTS "$USER@$HOST" "mkdir -p $REMOTE_DIR/img/logos $REMOTE_DIR/case-studies"

# Upload configurator screenshot
echo "Uploading configurator screenshot..."
scp $SSH_OPTS "img/configurator-screenshot.png" "$USER@$HOST:$REMOTE_DIR/img/"

# Upload all logos
echo "Uploading logos..."
scp $SSH_OPTS img/logos/* "$USER@$HOST:$REMOTE_DIR/img/logos/"

# Upload case study pages
echo "Uploading case study pages..."
scp $SSH_OPTS case-studies/*.php "$USER@$HOST:$REMOTE_DIR/case-studies/"

if [ $? -eq 0 ]; then
    echo "Deployment successful!"
else
    echo "Deployment failed."
    exit 1
fi
