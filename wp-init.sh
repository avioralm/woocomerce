#!/bin/bash

# Exit immediately if a command exits with a non-zero status
set -e

# Set variables
DOMAIN="shop.rideped.co.il"
EMAIL="bob@proteam.cc"
GIT_REPO="https://github.com/avioralm/woocomerce.git"
TEMP_DIR="/tmp/wordpress_temp"
WP_DIR=wordpress

# Prompt user to confirm or change domain and email
read -p "Enter your domain name [$DOMAIN]: " input
DOMAIN=${input:-$DOMAIN}

read -p "Enter your email address [$EMAIL]: " input
EMAIL=${input:-$EMAIL}

read -p "Enter your repo address [$GIT_REPO]: " input
GIT_REPO=${input:-$GIT_REPO}

echo "Using domain: $DOMAIN"
echo "Using email: $EMAIL"
echo "Using repo: $GIT_REPO"

# Update the system
sudo dnf update -y

# Install Git
sudo dnf install git -y

# Install Docker
sudo dnf install docker -y
sudo systemctl start docker
sudo systemctl enable docker
sudo usermod -aG docker ec2-user

# Install Docker Compose
sudo curl -L "https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose


# Clone WordPress project from Git to a temporary directory
sudo rm -rf $TEMP_DIR
sudo git clone $GIT_REPO $TEMP_DIR

# Move cloned files to the web server directory
sudo rm -rf $WP_DIR/*
sudo cp wp-config.php $WP_DIR/
sudo mv $TEMP_DIR/* $WP_DIR/

cd $WP_DIR



# Create directories for Certbot
mkdir -p certbot/conf certbot/www

# Obtain initial SSL certificate
sudo docker run --rm --name certbot \
            -v "$PWD/certbot/conf:/etc/letsencrypt" \
            -v "$PWD/certbot/www:/var/www/certbot" \
            -p 80:80 \
            certbot/certbot certonly --standalone \
            -d $DOMAIN --email $EMAIL --agree-tos --no-eff-email --force-renewal

# Replace placeholders in nginx.conf
sed -i "s/\${DOMAIN}/$DOMAIN/g" ./devops/nginx.conf


# Restart all services
sudo docker-compose up -d

echo "Setup complete! Your WordPress site should now be running with HTTPS."
echo "Domain: $DOMAIN"
echo "Email: $EMAIL"