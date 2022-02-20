<?php
echo '
<div class="mb-3 mt-3 d-flex justify-content-center">
<button class="btn btn-ligth type="button" disabled boton>
  <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
  &nbsp;
  &nbsp;
  Cargando página de Jane Orosco...
</button>
</div>
';
$input_celsius = $_REQUEST['entrada'];

$wsdl   = 'https://www.w3schools.com/xml/tempconvert.asmx?WSDL';
$client = new SoapClient($wsdl, array('trace'=>1));  // The trace param will show you errors

$request_param = array('Celsius' => $input_celsius);

try {
    $responce_param = $client->CelsiusToFahrenheit($request_param);
    $result_fahrenheit= $responce_param->CelsiusToFahrenheitResult;

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
        <a href="xml.html" class="nav-link disabled">Otras actividades de XML</a>
      </li>
      <li class="nav-item">
        <a href="index.html" class="nav-link active">Actividad 9</a>
      </li>
      <li class="nav-item">
        <a href="parte3.html" class="nav-link disabled">Actividad 10</a>
      </li>
    </ul>
  </div>
</nav>

  <!-- CONTENIDO -->
<div class="container mt-3">
  <div class="mb-3 mt-3">
      <h1>SOAP Web Service Consume using PHP</h1>
        <h2><a href="https://www.w3schools.com/xml/tempconvert.asmx?WSDL">WSDL utilizado</a></h2>
        <br>
        <p>El resultado es:</p>
        <button type="button" class="btn btn-outline-light disabled bt-lg boton">
          <?php echo $input_celsius . 'º Celsius son ' . $result_fahrenheit . 'º Fahrenheit' ?>
        </button>
        <!--   <h2><?php echo $input_celsius . ' Celsius =>' . $result_fahrenheit . ' Fahrenheit' ?></h2>   -->
  </div>
</div>

</body>
</html>
