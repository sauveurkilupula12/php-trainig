<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $montant = $_POST['montant'];
        $devise = $_POST['devise'];

        if ($devise === 'USD') {
            $conversion = $montant * 2800;
            echo "<p>$montant$ équivaut à $conversion FC</p>";
        } elseif ($devise === 'FC') {
            $conversion = $montant / 2800;
            echo "<p>$montant FC équivaut à $conversion$</p>";
        }
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Convertisseur de devises</title>
</head>

<!DOCTYPE html>
<html>
<head>
    <title>Convertisseur de devises</title>
</head>
<body>
    <h1>Convertisseur de devises</h1>
    
    <form method="POST">
        <label for="montant">Montant : </label>
        <input type="text" name="montant" required>
        <select name="devise">
            <option value="USD">Dollars ($)</option>
            <option value="FC">Francs Congolais (FC)</option>
        </select>
        <input type="submit" value="Convertir">
    </form>

   