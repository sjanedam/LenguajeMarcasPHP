<?php
$nombre = $_REQUEST['nombre'];
$peso = $_REQUEST['peso'];
$altura = $_REQUEST['altura'];

try {
		// convertimos cm en m
		$altura = $altura / 100;


		//formula peso(kg)/talla(m2)
        $imc = $peso / ($altura * $altura);
        //redondeamos a dos decimales
        $imc = round($imc, 2);

} catch (Exception $e) {
    echo "<h2>Exception Error</h2>";
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Conversor de temperaturas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/css.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  <!-- BARRA DE NAVEGACIÓN FIJA ARRIBA -->
<nav  class="navbar navbar-fixed navbar-expand-sm bg-light navbar-muted">
  <div class="container-fluid">
    <ul class="navbar-nav me-auto mb-2 mb-md-0">
      <li class="nav-item">
        <a href="index.html" class="nav-link active">índice</a>
      </li>
      <li class="nav-item">
        <a href="celsius.html" class="nav-link disabled">Actividad 9</a>
      </li>
      <li class="nav-item">
        <a href="imc.html" class="nav-link active">Actividad 10</a>
      </li>
    </ul>
  </div>
</nav>

  <div class="container mt-3">
		  <div class="mb-3 mt-3">
    <h1>Servcio REST calculadora de IMC de nombre alumno Jane Orosco </h1>
		<br>
		<p>El resultado es:</p>
		<button type="button" class="btn btn-outline-light disabled bt-lg boton">
    <?php echo "¡Hola " . $nombre . '! Tu IMC es de ' . $imc  ?>
		</button>
	<br>
	<br>
	<div class="">
	<img src="https://univiasecmate3.files.wordpress.com/2012/05/img212.jpg" class="rounded img-thumbnail" alt="Cinque Terre">
</div>
</div>
</div>


</body>
</html>
