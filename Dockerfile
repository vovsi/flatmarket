# Базовый образ PHP 8.4
FROM php:8.4-fpm

# Устанавливаем зависимости
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libpq-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql mbstring

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Устанавливаем Node.js и npm
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs && \
    npm install -g npm@latest

# Копируем файлы Laravel
WORKDIR /var/www/html
COPY . .

# Устанавливаем зависимости Laravel
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# Настраиваем права
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache && \
    chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache

# Открываем порт
EXPOSE 80

CMD ["php-fpm"]
