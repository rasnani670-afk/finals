# Use official PHP image with Apache
FROM php:8.2-apache

# Copy your app's code into the container
COPY . /var/www/html/

# Enable Apache rewrite module
RUN a2enmod rewrite

# Expose port 80 to the internet
EXPOSE 80
