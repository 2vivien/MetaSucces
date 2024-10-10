vcl 4.0;

# Définir le backend par défaut, qui pointe vers Nginx (ou le serveur web en backend)
backend default {
    .host = "nginx";  # Le nom du service Nginx dans Docker Compose
    .port = "80";     # Le port interne du conteneur Nginx
}

# Gérer la réponse initiale des requêtes
sub vcl_recv {
    # Ajouter un header X-Forwarded-For pour suivre l'adresse IP du client d'origine
    if (req.restarts == 0) {
        if (req.http.X-Forwarded-For) {
            set req.http.X-Forwarded-For = req.http.X-Forwarded-For + ", " + client.ip;
        } else {
            set req.http.X-Forwarded-For = client.ip;
        }
    }

    # Ne pas mettre en cache les requêtes POST, ou celles avec un Cookie
    if (req.method == "POST" || req.http.Cookie) {
        return (pass);
    }

    # Ne pas mettre en cache si un paramètre "nocache" est présent
    if (req.url ~ "nocache") {
        return (pass);
    }

    # Autres types de requêtes (GET) sont mises en cache par défaut
}

# Gérer la réponse après réception du contenu du backend (Nginx)
sub vcl_backend_response {
    # Ne pas mettre en cache si le backend retourne un code HTTP 400 ou supérieur
    if (beresp.status >= 400) {
        return (deliver);
    }

    # Ajouter un TTL par défaut de 2 minutes pour les réponses mises en cache
    set beresp.ttl = 2m;
    
    # Ne pas mettre en cache les réponses avec des cookies
    if (bereq.http.Cookie) {
        return (deliver);
    }

    # Mettez en cache le contenu statique plus longtemps (10 minutes)
    if (bereq.url ~ "\.(png|jpg|gif|css|js)$") {
        set beresp.ttl = 10m;
    }
}

# Gérer les réponses envoyées au client
sub vcl_deliver {
    # Ajouter un header indiquant si la réponse a été servie depuis le cache ou non
    if (obj.hits > 0) {
        set resp.http.X-Cache = "HIT";
    } else {
        set resp.http.X-Cache = "MISS";
    }
}
