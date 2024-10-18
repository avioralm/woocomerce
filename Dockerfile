# Use the official WordPress image as a parent image
FROM wordpress:latest

# Copy the entire WordPress directory
COPY . /var/www/html/

# If you have a custom wp-config.php, uncomment the next line
 COPY wp-config.php /var/www/html/wp-config.php

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html && \
    find /var/www/html -type d -exec chmod 755 {} \; && \
    find /var/www/html -type f -exec chmod 644 {} \; && \
    chmod 755 /var/www/html/wp-content/uploads \
    if [ -f /var/www/html/wp-config.php ]; then chmod 640 /var/www/html/wp-config.php; fi


CMD ["apache2-foreground"]