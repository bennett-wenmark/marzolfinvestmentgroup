#!/bin/bash
# Update marzolfinvestmentgroup screenshot
# Run this periodically to keep the visual record current

# Using Chrome headless for screenshot
cd /Users/macmini/.openclaw/Bennett
/Applications/Google\ Chrome.app/Contents/MacOS/Google\ Chrome \
  --headless \
  --screenshot=workspace/marzolfinvestmentgroup-screenshot.png \
  --window-size=1440,900 \
  http://marzolfinvestmentgroup.test 2>/dev/null

# Copy to project
cp workspace/marzolfinvestmentgroup-screenshot.png /Users/macmini/webdev/marzolfinvestmentgroup/screenshot.png

echo "Screenshot updated at $(date)"
