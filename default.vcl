vcl 4.0;

backend default {
    .host = "nginx";  # Nom de votre conteneur Nginx
    .port = "80";
}

sub vcl_recv {
    if (req.url ~ "^/static/") {
        return (hash);
    }
}

sub vcl_backend_response {
    set beresp.ttl = 1h;  # Définit la durée de mise en cache
}
