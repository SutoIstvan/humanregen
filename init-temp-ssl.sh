#!/bin/bash

# Generate a self-signed SSL certificate for IP access
# This allows HTTPS on https://46.29.138.209/

set -e

CERT_DIR="./certbot/conf/live/humanregen.hu"

echo "=== Generating self-signed SSL certificate for IP access ==="

# Create directory structure
mkdir -p "$CERT_DIR"

# Generate self-signed certificate (valid for 365 days)
docker compose run --rm --entrypoint "\
  openssl req -x509 -nodes -newkey rsa:2048 -days 365 \
    -keyout '/etc/letsencrypt/live/humanregen.hu/privkey.pem' \
    -out '/etc/letsencrypt/live/humanregen.hu/fullchain.pem' \
    -subj '/CN=46.29.138.209'" certbot

echo ""
echo "=== Self-signed certificate created! ==="
echo ""
echo "Now restart containers:"
echo "  docker compose down"
echo "  docker compose up -d"
echo ""
echo "Site will be available at: https://46.29.138.209/"
echo "NOTE: Browser will show a security warning - this is normal for self-signed certificates."
echo "      Click 'Advanced' -> 'Proceed' to access the site."
