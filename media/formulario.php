<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="styleFormulario.css">
</head>
<body>
        <h1>Formulario de datos</h1>
<form method="post" action="conexion.php">


<label for="id">Id:</label>
 <input type="number" id="id" name="id" min="0" max="100" step="1"><br><br>
<label for="fecha">Fecha:</label>
<input type="date" id="fecha" name="fecha"><br><br>

<label for="hora">Hora:</label>
<input type="time" id="hora" name="hora"><br><br>

<label for="medicion">Medicion:</label>
<input type="number" id="medicion" name="medicion" min="0" max="100" step="1"><br><br>

<form>
    <label for="sensor">Sensor:</label>
    <select id="sensor" name="sensor">
        <option value="sensor1">Luminosidad</option>
        <option value="sensor2">Humedad</option>
        <option value="sensor3">Sonido</option>
    </select><br><br>

<button onclick="enviar()">Enviar</button>

<script>
        function enviar() {
            window.location.href = "tabla.php";
        }
    </script>
</form>
<table>
    <thead>
        <th>fecha</th>
        <th>hora</th>
        <th>medicion</th>
        <th>sensor</th>
    </thead>
    <tbody>
        <?=cargarTabla($conexion); ?>
    </tbody>
</table>

</body>
</html>