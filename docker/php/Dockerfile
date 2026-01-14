FROM php:8.2-cli

# Dependências básicas
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        mbstring \
        zip \
        exif \
        pcntl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Diretório padrão
WORKDIR /var/www/html

# Evita warning de permissões
RUN useradd -G www-data,root -u 1000 -d /home/dev dev
USER dev
