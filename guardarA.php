<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];

$servername = "localhost";
$username = "bmazariegos";
$password = "bmazariegos";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
die("Fallo conectarse por: " . mysqli_connect_error());
}

$sql = "insert into bmazariegos.registroC(nombre,apellido,correo) values('".$nombre."','".$apellido."','".$correo."');";
if ($conn->query($sql) === TRUE) {
}
$conn->close();
?>
