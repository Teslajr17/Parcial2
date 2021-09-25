<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$profesion = $_POST["profesion"];
$biografia = $_POST["biografia"];
$correo = $_POST["correo"];

$servername = "localhost";
$username = "bmazariegos";
$password = "bmazariegos";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
die("Fallo conectarse por: " . mysqli_connect_error());
}

$sql = "insert into bmazariegos.conferencista(nombre,apellido,profesion,biografia,correo) values('".$nombre."','".$apellido."','".$profesion."','".$biografia."','".$correo."');";
if ($conn->query($sql) === TRUE) {
}
$conn->close();
?>
