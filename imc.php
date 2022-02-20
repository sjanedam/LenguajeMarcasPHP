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
  <title>Servcio REST calculadora de IMC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container mt-3">
    <h1>Servcio REST calculadora de IMC de nombre alumno (cada uno su nombre) </h1>
    <h2><?php echo "Hola " . $nombre . ' tu imc =>' . $imc  ?></h2>
	<br>
	
	<img src="https://univiasecmate3.files.wordpress.com/2012/05/img212.jpg" class="rounded" alt="Cinque Terre">
</div>

</body>
</html>
