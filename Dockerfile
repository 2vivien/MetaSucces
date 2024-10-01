# Utiliser une image de base avec Nginx
FROM nginx:alpine

# Copier les fichiers du site web dans le répertoire de travail de Nginx
COPY . /usr/share/nginx/html

# Exposer le port 80
EXPOSE 80

# Commande pour démarrer Nginx
CMD ["nginx", "-g", "daemon off;"]