# Étape 1 : Utiliser une image de base PHP avec FPM et Nginx
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
    unzip

# Étape 3 : Installer les extensions PHP courantes pour les projets web
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Étape 4 : Configurer les répertoires de Nginx et PHP-FPM
RUN mkdir -p /run/nginx && \
    mkdir -p /usr/share/nginx/html && \
    chown -R www-data:www-data /usr/share/nginx/html

# Étape 5 : Copier les fichiers de configuration personnalisés pour PHP et Nginx
COPY ./nginx.conf /etc/nginx/conf.d/default.conf
COPY ./supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Étape 6 : Copier le code de l'application dans le conteneur
COPY . /usr/share/nginx/html
WORKDIR /usr/share/nginx/html

# Étape 7 : Assurer les bonnes permissions sur les fichiers
RUN chown -R www-data:www-data /usr/share/nginx/html && \
    chmod -R 755 /usr/share/nginx/html

# Étape 8 : Exposer le port 80 (Nginx écoute sur ce port à l'intérieur du conteneur)
EXPOSE 80

# Étape 9 : Démarrer Nginx et PHP-FPM via Supervisor
CMD ["/usr/bin/supervisord"]
