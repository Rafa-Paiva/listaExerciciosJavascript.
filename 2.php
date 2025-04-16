<!DOCTYPE html>
<html>
<head>
  <title>Soma de Números</title>
</head>
<body>

  <h2>Soma de Dois Números</h2>
  <form method="post">
    Número 1: <input type="number" name="num1"><br><br>
    Número 2: <input type="number" name="num2"><br><br>
    <input type="submit" value="Calcular">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $soma = $num1 + $num2;

    if ($soma > 20) {
      $resultado = $soma + 8;
    } else {
      $resultado = $soma - 5;
    }

    echo "<h3>Resultado: $resultado</h3>";
  }
  ?>

</body>
</html>