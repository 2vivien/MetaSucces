# Étape 1 : Utiliser une image de base PHP avec FPM et Alpine
FROM php:8.2-fpm-alpine

# Étape 2 : Installer Nginx, des extensions PHP et autres outils nécessaires
RUN apk update && apk add --no-cache \
    nginx \
    supervisor \
    bash \
    curl \
    git \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    oniguruma-dev \
    libxml2-dev \
    zip \
    unzip \
    && rm -rf /var/cache/apk/*

# Étape 3 : Installer les extensions PHP courantes pour les projets web
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    opcache

# Étape 4 : Configurer les répertoires de Nginx et PHP-FPM
RUN mkdir -p /run/nginx /var/log/nginx \
    && chown -R www-data:www-data /var/www/html /run/nginx /var/log/nginx

# Étape 5 : Copier les fichiers de configuration personnalisés
COPY --chown=www-data:www-data docker/nginx.conf /etc/nginx/nginx.conf
COPY --chown=www-data:www-data docker/php.ini /usr/local/etc/php/conf.d/app.ini
COPY --chown=www-data:www-data docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Étape 6 : Copier le code de l'application dans le conteneur
COPY --chown=www-data:www-data . /var/www/html
WORKDIR /var/www/html

# Étape 7 : Assurer les bonnes permissions sur les fichiers
RUN find /var/www/html -type f -exec chmod 644 {} \; \
    && find /var/www/html -type d -exec chmod 755 {} \; \
    && chown -R www-data:www-data /var/www/html

# Étape 8 : Exposer le port 80 (Nginx écoute sur ce port à l'intérieur du conteneur)
EXPOSE 80

# Étape 9 : Définir l'utilisateur par défaut
USER www-data

# Étape 10 : Démarrer Nginx et PHP-FPM via Supervisor
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]