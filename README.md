# MetaSucces

MetaSucces est un projet conçu pour offrir des solutions de conception web intuitives, captivantes et sur-mesure, adaptées aux besoins des entreprises modernes. Ce projet permet de créer des sites web réactifs avec des fonctionnalités avancées, offrant une expérience utilisateur fluide.

## Fonctionnalités

- **Interface Responsive** : Adaptabilité complète sur tous les appareils.
- **Optimisation des performances** : Vitesse améliorée et design captivant.
- **Flexibilité des paiements** : Possibilité de paiement en tranches ou mensualités.
- **Utilisation de Docker** : Simplification du déploiement.
- **Intégration de Traefik** : Gestion des certificats SSL automatisée.
- **Utilisation de Redis** : Amélioration de la gestion des sessions et du cache.

## Prérequis

Avant de pouvoir utiliser MetaSucces, assurez-vous d'avoir les éléments suivants installés :

- **Docker** et **Docker Compose** : Pour l'environnement de conteneurisation.
- **Traefik** : Utilisé comme proxy inverse pour la gestion du trafic et des certificats SSL.
- **Redis** : Pour la gestion des sessions et du cache.

## Installation

1. **Cloner le dépôt :**

   ```bash
   git clone https://github.com/ton-repo/metasucces.git
   cd metasucces
   ```

2. **Configurer les fichiers :**

   - Assurez-vous que les fichiers suivants sont correctement configurés :
     - `nginx-config.conf` : Configuration pour Nginx.
     - `docker-compose.yml` : Pour orchestrer les services.

3. **Lancer les services :**

   Vous pouvez lancer les services via Docker Compose en exécutant la commande suivante :

   ```bash
   docker-compose up -d
   ```

   Cette commande démarrera les services suivants :
   
   - **PHP-FPM** : Pour exécuter les scripts PHP.
   - **Nginx** : Pour servir le site web.
   - **Redis** : Pour la gestion des sessions et du cache.
   - **Traefik** : Pour la gestion du proxy et des certificats SSL.

## Utilisation

Le projet MetaSucces inclut plusieurs pages clés :

- **Accueil** : `index.php`
- **À propos** : `about-us.php`
- **Services** : `services.php`
- **Portfolio** : `portfolio.php`
- **Fonctionnalités** : `features.php`
- **Contact** : `contact.php`

Ces pages sont accessibles via l'URL `https://metasucces.com` une fois les services démarrés.

### Structure du projet

Voici un aperçu de la structure du projet :

```
/metasucces
├── /app
│   ├── /css
│   ├── /images
│   ├── /js
│   ├── index.php
│   ├── about-us.php
│   ├── services.php
│   ├── portfolio.php
│   └── ...
├── nginx-config.conf
├── docker-compose.yml
└── README.md
```

### Variables d'environnement

Certaines variables d'environnement sont utilisées pour configurer les services dans `docker-compose.yml` :

- `PHP_ENABLE_OPCACHE` : Active l'OpCache pour améliorer les performances PHP.
- `PHP_MAX_EXECUTION_TIME` : Définit le temps maximum d'exécution des scripts PHP.
- `PHP_MEMORY_LIMIT` : Limite la mémoire allouée aux scripts PHP.
- `REDIS_PASSWORD` : Définit le mot de passe pour accéder à Redis.

## Configuration de Nginx et Traefik

Le fichier `nginx-config.conf` contient les configurations Nginx nécessaires pour servir les fichiers du projet. Traefik est utilisé pour gérer le routage HTTP et HTTPS avec les certificats SSL. Les routes Traefik sont définies dans `docker-compose.yml` :

```yaml
labels:
  - "traefik.enable=true"
  - "traefik.http.routers.website.rule=Host(`metasucces.com`)"
  - "traefik.http.routers.website.entrypoints=websecure"
  - "traefik.http.routers.website.tls.certresolver=letsencrypt"
  - "traefik.http.services.website.loadbalancer.server.port=8080"
```

## Sauvegarde et gestion des volumes

Le projet utilise un volume Docker pour stocker les données Redis. Assurez-vous que le volume `redis_data` est bien configuré pour la persistance des données.

## Contributions

Les contributions sont les bienvenues. Veuillez ouvrir une issue avant de soumettre une pull request.

## Auteurs

- **Eurin HASH et Vivien LEGENIE** - [MetaSucces](https://metasucces.com)

## License

Ce projet est sous licence MIT. Consultez le fichier `LICENSE` pour plus d'informations.

