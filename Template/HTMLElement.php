<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
</head>
<body>
    <h1>Formulaire de Contact</h1>

    <form action="traitement.php" method="post" enctype="multipart/form-data">

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="commentaire">Commentaire :</label>
        <textarea id="commentaire" name="commentaire" rows="5" cols="30"></textarea><br><br>

        <label for="pays">Pays :</label>
        <select id="pays" name="pays" required>
            <option value="RDC">RDC</option>
            <option value="Zambie">Zambie</option>
            <option value="Angola">Angola</option>
            <option value="Burundi">Burundi</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="France">France</option>
            <option value="Belgique">Belgique</option>
            <option value="Suisse">Suisse</option>
            <option value="Etas-unis d'Amerique">Etas-unis d'Amerique</option>
            </select><br><br>

        <label for="newsletter">Abonnez-vous à la newsletter :</label>
        <input type="checkbox" id="newsletter" name="newsletter">

        <br>

        <label for="genre">Genre :</label>
        <input type="radio" id="homme" name="genre" value="homme" checked>
        <label for="homme">Homme</label>
        <input type="radio" id="femme" name="genre" value="femme">
        <label for="femme">Femme</label><br><br>

        <label for="fichier">Fichier (optionnel) :</label>
        <input type="file" id="fichier" name="fichier"><br><br>

        <input type="submit" value="Envoyer">

    </form>
</body>
</html>