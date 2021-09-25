<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];

$servername = "localhost";
$username = "bmazariegos";
$password = "bmazariegos";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
die("Fallo conectarse por: " . mysqli_connect_error());
}

$sql = "insert into bmazariegos.conferencia(nombre,correo) values('".$nombre."','".$correo."');";
if ($conn->query($sql) === TRUE) {
}
$conn->close();
?>
