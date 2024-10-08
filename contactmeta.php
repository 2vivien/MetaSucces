<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'config.php';  // Inclusion du fichier de configuration pour la base de données et l'email

// Connexion à la base de données avec les informations définies dans config.php
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Fonction pour sécuriser les données
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);  // Protection contre les attaques XSS
    return $data;
}

// Récupération et sécurisation des données du formulaire
$firstName = sanitizeInput($_POST['first_name']);
$lastName = sanitizeInput($_POST['last_name']);
$email = filter_var(sanitizeInput($_POST['email']), FILTER_SANITIZE_EMAIL);
$phone = sanitizeInput($_POST['phone']);
$comments = sanitizeInput($_POST['comments']);

// Validation des champs
$errors = [];
if (empty($firstName)) { $errors[] = "Le prénom est requis."; }
if (empty($lastName)) { $errors[] = "Le nom est requis."; }
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors[] = "L'email n'est pas valide."; }
if (empty($comments)) { $errors[] = "Le message est requis."; }

if (empty($errors)) {
    try {
        // Insertion des données dans la base de données
        $stmt = $pdo->prepare("INSERT INTO contacts (first_name, last_name, email, phone, comments) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$firstName, $lastName, $email, $phone, $comments]);

        // Configuration de PHPMailer pour l'envoi d'email via SMTP
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USER;
        $mail->Password   = SMTP_PASSWORD;
        $mail->SMTPSecure = SMTP_SECURE;
        $mail->Port       = SMTP_PORT;

        // Paramètres de l'email
        $mail->setFrom($email, "$firstName $lastName");
        $mail->addAddress('destinataire@example.com', 'MetaSucces Support');
        $mail->isHTML(true);
        $mail->Subject = "Nouveau message de contact : $firstName $lastName";
        $mail->Body    = "
            <h2>Nouveau message de contact</h2>
            <p><strong>Prénom:</strong> $firstName</p>
            <p><strong>Nom:</strong> $lastName</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Téléphone:</strong> $phone</p>
            <p><strong>Message:</strong><br>$comments</p>
        ";

        // Envoi de l'email
        if ($mail->send()) {
            echo "Votre message a été envoyé avec succès.";
        } else {
            echo "Erreur lors de l'envoi de l'email.";
        }
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi ou de la sauvegarde : " . $e->getMessage();
    }
} else {
    // Affichage des erreurs s'il y en a
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
}
?>
