<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
</head>
<body>
    <h1>Formulaire de Contact</h1>

    <?php
    // Initialiser les variables de session
    session_start();

    // Gérer la soumission du formulaire
    if (isset($_POST['submit'])) {
        // Récupérer les données du formulaire
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $pays = $_POST['pays'];
        $newsletter = isset($_POST['newsletter']) ? $_POST['newsletter'] : [];
        $genre = $_POST['genre'];
        $fichier = $_FILES['fichier'];

        // Validation basique (facultatif)

        // Stocker les données dans des variables de session
        $_SESSION['nom'] = $nom;
        $_SESSION['email'] = $email;
        $_SESSION['pays'] = $pays;
        $_SESSION['newsletter'] = $newsletter;
        $_SESSION['genre'] = $genre;

        // Gérer le téléchargement de fichier
        if ($fichier['error'] === UPLOAD_ERR_OK) {
            $nomFichier = $fichier['name'];
            $destination = 'fichiers/' . $nomFichier;
            move_uploaded_file($fichier['tmp_name'], $destination);
        }

        // Rediriger vers la page de résumé
        header('Location: resume.php');
        exit;
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?php echo isset($_SESSION['nom']) ? $_SESSION['nom'] : ''; ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>"><br><br>

        <label for="commentaire">Commentaire :</label>
        <textarea id="commentaire" name="commentaire" rows="5" cols="30"></textarea><br><br>


        <label for="pays">Pays:</label>
        <select id="pays" name="pays">
            <option value="RDC">RDC</option>
            <option value="Zambie">Zambie</option>
            <option value="Angola">Angola</option>
            <option value="Soudan">Soudan</option>
            <option value="Afrique du Sud">Afrique du Sud</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Sénégal">Sénégal</option>
            <option value="Burundi">Burundi</option>
            <option value="Rwanda">Rwanda</option>
            <option value="Tanzanie">Tanzanie</option>
            <option value="Nigéria">Nigéria</option>
            <option value="Cameroun">Cameroun</option>
            <option value="France">France</option>
            <option value="Belgique">Belgique</option>
            <option value="Suisse">Suisse</option>
            </select><br><br>

        <label for="newsletter">Abonnez-vous à la Newsletter:</label>
        <input type="checkbox" id="newsletter" name="newsletter[]" value="promotions"><br><br>
        <label for="newsletter_promotions">Promotions</label>
        <input type="checkbox" id="newsletter" name="newsletter[]" value="actualites"><br><br>

        <label for="genre">Genre:</label>
        <input type="radio" id="genre_homme" name="genre" value="homme"
         <?php 
         echo isset($_SESSION['genre']) && $_SESSION['genre'] === 'homme' ? 'checked' : ''; 
         ?> checked>
        <label for="genre_homme">Homme</label>
        <input type="radio" id="genre_femme" name="genre" value="femme" 
        <?php 
        echo isset($_SESSION['genre']) && $_SESSION['genre'] === 'femme' ? 'checked' : ''; 
        ?>>
        <label for="genre_femme">Femme</label><br><br>

        <label for="fichier">Fichier:</label>
        <input type="file" id="fichier" name="fichier"><br><br>

        <button type="submit" name="submit">Envoyer</button>
    </form>
</body>
</html>