<?php
$conexion = mysqli_connect("localhost", "Jairjim", "Jairjim21", "solicitud");

// Check connection
if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$empresa = $_POST["empresa"];
$tel = $_POST["tel"];
$query = "insert into contacto(nombre, email, empresa, telefono) values('$nombre', '$email', '$empresa', '$tel')";

if(mysqli_query($conexion, $query)){
    echo "New record created successfully";
} else {
      echo "Error: " . $query . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
?>