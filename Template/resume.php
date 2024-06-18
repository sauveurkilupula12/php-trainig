<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résumé du Formulaire</title>
</head>
<body>
    <h1>Résumé des Informations</h1>

    <?php
    // Démarrer la session
    session_start();

    // Vérifier si le formulaire a été soumis
    if (!isset($_SESSION['nom'])) {
        header('Location: index.php');
        exit;
    }

    // Récupérer les données du formulaire
    $nom = $_SESSION['nom'];
    $email = $_SESSION['email'];
    $pays = $_SESSION['pays'];
    $newsletter = $_SESSION['newsletter'];
    $genre = $_SESSION['genre'];
    $fichier = isset($_SESSION['fichier']) ? $_SESSION['fichier'] : '';

    // Afficher les données dans une table
    echo '<table>';
    echo '<tr><th>Nom:</th><td>' . $nom . '</td></tr>';
    echo '<tr><th>Email:</th><td>' . $email . '</td></tr>';
    echo '<tr><th>Pays:</th><td>' . $pays . '</td></tr>';
    echo '<tr><th>Newsletter:</th><td>';
    foreach ($newsletter as $value) {
        echo $value . ', ';
    }
    echo '</td></tr>';
    echo '<tr><th>Genre:</th><td>' . $genre . '</td></tr>';
    if ($fichier) {
        echo '<tr><th>Fichier:</th><td><a href="fichiers/' . $fichier . '">' . $fichier . '</a></td></tr>';
    }
    echo '</table>';

    // Gérer le cookie de nom d'utilisateur
    $nomUtilisateur = isset($_SESSION['nomUtilisateur']) ? $_SESSION['nomUtilisateur'] : '';
    if (!$nomUtilisateur) {
        $nomUtilisateur = $nom;
        $_SESSION['nomUtilisateur'] = $nomUtilisateur;
    }

    // Afficher le message de bienvenue personnalisé
    echo '<p>Bonjour, ' . $nomUtilisateur . ' !</p>';

    // Envoyer un email de notification (optionnel)
    $emailNotification = 'jmuleshi2@gmail.com'; // Remplacer par l'adresse email de destination
    $sujet = 'Nouveau formulaire de contact';
    $message = "
        Nom: $nom\n
        Email: $email\n
        Pays: $pays\n
        Newsletter: " . implode(', ', $newsletter) . "\n
        Genre: $genre\n";
    if ($fichier) {
        $message .= "\nFichier: fichiers/$fichier";
    }

    mail($emailNotification, $sujet, $message);

    // Détruire les variables de session (facultatif)
    session_destroy();
    ?>
</body>
</html>