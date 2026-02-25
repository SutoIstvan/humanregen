#!/bin/bash

# Configuration
DOMAIN="humanregen.hu"
EMAIL="info@humanregen.hu"  # <-- Change this to your real email
CERTBOT_DIR="./certbot"

set -e

echo "=== Let's Encrypt SSL Init for $DOMAIN ==="

# 1. Create directories
echo "[1/5] Creating directories..."
mkdir -p "$CERTBOT_DIR/www"
mkdir -p "$CERTBOT_DIR/conf"
mkdir -p "$CERTBOT_DIR/logs"

# 2. Generate dummy certificate so nginx can start
echo "[2/5] Creating dummy certificate..."
mkdir -p "$CERTBOT_DIR/conf/live/$DOMAIN"
docker compose run --rm --entrypoint "\
  openssl req -x509 -nodes -newkey rsa:2048 -days 1 \
    -keyout '/etc/letsencrypt/live/$DOMAIN/privkey.pem' \
    -out '/etc/letsencrypt/live/$DOMAIN/fullchain.pem' \
    -subj '/CN=localhost'" certbot
echo "  Dummy certificate created."

# 3. Start nginx with dummy certificate
echo "[3/5] Starting nginx..."
docker compose up -d nginx
sleep 3

# 4. Delete dummy certificate
echo "[4/5] Removing dummy certificate..."
docker compose run --rm --entrypoint "\
  rm -rf /etc/letsencrypt/live/$DOMAIN && \
  rm -rf /etc/letsencrypt/archive/$DOMAIN && \
  rm -rf /etc/letsencrypt/renewal/$DOMAIN.conf" certbot

# 5. Request real certificate
echo "[5/5] Requesting real certificate from Let's Encrypt..."
docker compose run --rm --entrypoint "\
  certbot certonly --webroot -w /var/www/certbot \
    --email $EMAIL \
    -d $DOMAIN \
    -d www.$DOMAIN \
    --rsa-key-size 4096 \
    --agree-tos \
    --no-eff-email \
    --force-renewal" certbot

echo ""
echo "=== SUCCESS! ==="
echo "Certificate obtained for $DOMAIN"
echo ""
echo "Now restart all containers:"
echo "  docker compose down"
echo "  docker compose up -d"
echo ""
echo "Auto-renewal is configured via the certbot container."
