# Use the official PHP image with Apache
FROM php:8.2-apache

# Copy all your website files into the Apache web directory
COPY . /var/www/html/

# Enable Apache mod_rewrite (optional, for clean URLs)
RUN a2enmod rewrite
