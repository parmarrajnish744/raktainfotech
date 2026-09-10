# Official PHP 8.2 with Apache
FROM php:8.2-apache

# Enable Apache rewrite and headers modules
RUN a2enmod rewrite headers deflate expires

# Copy project files into web root
COPY . /var/www/html/

# Set permissions for web server and leads storage
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chmod 777 /var/www/html/data \
    && chmod 666 /var/www/html/data/leads.json 2>/dev/null || true

# Expose standard web port
EXPOSE 80

CMD ["apache2-foreground"]
