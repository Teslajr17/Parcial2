<?php
$fecha = $_POST["fecha"];
$correo = $_POST["correo"];
$clave = $_POST["password"];

$servername = "localhost";
$username = "bmazariegos";
$password = "bmazariegos";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
die("Fallo conectarse por: " . mysqli_connect_error());
}

$sql = "insert into bmazariegos.usuarioC(fecha,correo,password) values('".$fecha."','".$correo."','".md5($password)."');";
if ($conn->query($sql) === TRUE) {
}
$conn->close();
?>
