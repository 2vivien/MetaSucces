<?php
    // Configuration de la base de données
    define('DB_HOST', 'localhost');            // Remplace par l'hôte de ta base de données
    define('DB_NAME', 'nom_de_la_base_de_donnees'); // Remplace par le nom de ta base de données
    define('DB_USER', 'utilisateur_bdd');      // Remplace par l'utilisateur de ta base de données
    define('DB_PASSWORD', 'mot_de_passe_bdd'); // Remplace par le mot de passe de la base de données

    // Configuration de l'email (SMTP)
    define('SMTP_HOST', 'smtp.example.com');    // Remplace par le serveur SMTP que tu utilises
    define('SMTP_USER', 'votre-email@example.com');   // Remplace par ton adresse email SMTP
    define('SMTP_PASSWORD', 'votre-mot-de-passe');    // Remplace par ton mot de passe SMTP
    define('SMTP_PORT', 587);                    // Change si nécessaire (par défaut pour TLS)
    define('SMTP_SECURE', PHPMailer::ENCRYPTION_STARTTLS);  // Utilisation de TLS (ou 'ssl' si nécessaire)
?>