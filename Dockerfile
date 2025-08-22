# Sử dụng PHP 8.2 với Apache
FROM php:8.2-apache

# Cài các extension cần cho Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev libonig-dev libxml2-dev zip unzip git curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql mbstring exif pcntl bcmath xml

# Bật rewrite cho Apache
RUN a2enmod rewrite

# Đặt thư mục làm việc
WORKDIR /var/www/html

# Copy file composer trước để cache
COPY composer.json composer.lock ./

# Cài Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Copy toàn bộ source vào container
COPY . .

# Sửa Apache DocumentRoot trỏ về public/
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Phân quyền cho storage và bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Expose cổng
EXPOSE 80

# Chạy Apache
CMD ["apache2-foreground"]
