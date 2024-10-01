<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'config.php';  // Inclusion du fichier de configuration pour la base de données


// Configuration de la base de données
$host = 'localhost';  // Remplace par l'hôte de ta base de données
$dbname = 'nom_de_la_base_de_donnees';  // Remplace par le nom de ta base de données
$username = 'utilisateur_bdd';  // Remplace par ton utilisateur de la base de données
$password = 'mot_de_passe_bdd';  // Remplace par le mot de passe de la base de données

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configuration pour afficher les erreurs (important en phase de développement)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Sécurisation des données
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);  // Protection contre XSS
    return $data;
}

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
        // Insertion dans la base de données avec une requête préparée
        $stmt = $pdo->prepare("INSERT INTO contacts (first_name, last_name, email, phone, comments) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$firstName, $lastName, $email, $phone, $comments]);

        // Configuration de PHPMailer pour l'envoi via SMTP
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.example.com';  // Remplace par ton serveur SMTP
        $mail->SMTPAuth   = true;
        $mail->Username   = 'votre-email@example.com';  // Ton adresse email SMTP
        $mail->Password   = 'votre-mot-de-passe';       // Ton mot de passe SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

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
            echo "Votre message a été envoyé avec succès et stocké dans notre base de données.";
        } else {
            echo "Erreur lors de l'envoi de l'email.";
        }
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi ou de la sauvegarde : " . $e->getMessage();
    }
} else {
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
}
?>
