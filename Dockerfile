FROM richarvey/nginx-php-fpm:3.1.6

COPY . .

# Install dependencies and set permissions
RUN composer install --optimize-autoloader --no-dev
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Set environment variables (overridden in Render)
ENV APP_ENV=production
ENV APP_DEBUG=false

# Cache configurations for performance
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache