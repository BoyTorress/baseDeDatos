<?php
$conexion = mysqli_connect('localhost', 'root', '', 'pagina')
or die(mysql_error($mysqli));

diferencia($conexion);


function diferencia($conexion){
    if(isset($_POST['enviar'])){
        insertar($conexion);
    }
}

function insertar($conexion){
    $id = $_POST['id'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $medicion = $_POST['medicion'];
    $sensor = $_POST['sensor'];

    $consulta = "INSERT INTO formulario(fecha, hora, medicion, sensor) VALUES ('$fecha','$hora','$medicion','$sensor')";
    
function cargarTabla($conexion){
    $consulta = "SELECT * FROM formulario";
    $resultado = mysqli_query($conexion, $consulta);

    while($fila = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$fila['fecha'];
        echo "<td>".$fila['hora'];
        echo "<td>".$fila['medicion'];
        echo "<td>".$fila['sensor'];
        echo "<tr>";
    }
    mysqli_close($conexion);
}

}


?>
    
