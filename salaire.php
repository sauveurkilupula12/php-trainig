<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les heures supplémentaires</title>
</head>
<body>
    <h1>Les heures supplémentaires</h1>
    <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
        <label for="salaireHoraire">Salaire horaire (FC):</label>
        <input type="number" step="0.01" id="salaireHoraire" name="salaireHoraire" required>
        <br>
        <label for="nbHeuresSemaine">Nombre d'heures travaillées en semaine:</label>
        <input type="number" id="nbHeuresSemaine" name="nbHeuresSemaine" required>
        <br>
        <label for="nbHeuresWeekend">Nombre d'heures travaillées le week-end:</label>
        <input type="number" id="nbHeuresWeekend" name="nbHeuresWeekend" required>
        <br>
        <br>
        <input type="submit" value="Calculer">
    </form>

    <?php
        if (isset($_POST['salaireHoraire']) && isset($_POST['nbHeuresSemaine']) && isset($_POST['nbHeuresWeekend'])) {
            $salaireHoraire = floatval($_POST['salaireHoraire']);
            $nbHeuresSemaine = intval($_POST['nbHeuresSemaine']);
            $nbHeuresWeekend = intval($_POST['nbHeuresWeekend']);

            // Calcul du salaire brut
            $salaireBrut = $salaireHoraire * $nbHeuresSemaine;

            // Calcul des heures supplémentaires
            $heuresSuppSemaine = max($nbHeuresSemaine - 35, 0);
            $heuresSuppWeekend = $nbHeuresWeekend;

            // Calcul du salaire des heures supplémentaires
            $salaireSuppSemaine = $heuresSuppSemaine * $salaireHoraire * 1.3;
            $salaireSuppWeekend = $heuresSuppWeekend * $salaireHoraire * 2;

            // Calcul du salaire total
            $salaireTotal = $salaireBrut + $salaireSuppSemaine + $salaireSuppWeekend;


            // Affichage du résultat
            echo "<br><h2>Résultat du calcul:</h2>";
            echo "<p>Salaire brut: " . number_format($salaireBrut, 2, '.', '') . " FC</p>"; 
            echo "<p>Salaire des heures supplémentaires en semaine: " . number_format($salaireSuppSemaine, 2, '.', '') . " FC</p>"; 
            echo "<p>Salaire des heures supplémentaires le week-end: " . number_format($salaireSuppWeekend, 2, '.', '') . " FC</p>"; 
            echo "<p>Salaire total: " . number_format($salaireTotal, 2, '.', '') . " FC</p>"; 
        }
    ?>
</body>
</html>