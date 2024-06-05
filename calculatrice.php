<?php

$nombre1 = isset($_POST['nombre1']) ? (float)$_POST['nombre1'] : null;
$nombre2 = isset($_POST['nombre2']) ? (float)$_POST['nombre2'] : null;
$operateur = isset($_POST['operateur']) ? $_POST['operateur'] : null;

if (isset($nombre1, $nombre2, $operateur)) {
  if ($operateur === '/' && $nombre2 === 0) {
    $result = 'Division par zéro impossible ';
  } else {
    switch ($operateur) {
      case '+':
        $result = $nombre1 + $nombre2;
        break;
      case '-':
        $result = $nombre1 - $nombre2;
        break;
      case '*':
        $result = $nombre1 * $nombre2;
        break;
      case '/':
        $result = $nombre1 / $nombre2;
        break;
    }
  }
} else {
  $result = 'Veuillez entrer tous les nombres et l\'opérateur';
}

echo "<h2>Résultat:</h2>";
echo $result;

?>

<!DOCTYPE html>
<html>
<head>
  <title>Calculatrice </title>
</head>
<body>
  <h1>Calculatrice</h1>  <form action="calculatrice.php" method="post">
    <label for="nombre1">Nombre 1 :</label>
    <input type="number" id="nombre1" name="nombre1" step="0.01" required>
    <br>
    <label for="operateur">Opérateur :</label>
    <select name="operateur" id="operateur">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
    </select>
    <br>
    <label for="nombre2">Nombre 2 :</label>
    <input type="number" id="nombre2" name="nombre2" step="0.01" required>
    <br>
    <input type="submit" value="Calculer ">
  </form>
  <?php  ?>
</body>
</html>