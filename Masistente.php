<!doctype html>
<html>
<head>
<title>Registro de asistentes</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "bmazariegos";
$password = "bmazariegos";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
	die("Fallo conectarse por: " . mysqli_connect_error());
}
$sql = "SELECT nombre,apellido,correo FROM bmazariegos.registroC;";

$result = $conn->query($sql);
echo "<table border>";
echo "<tr><th>Nombre</th><th>Apellido</th><th>Correo electronico</th></tr>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nombre"]. "</td><td>" . $row["apellido"]."</td><td>" . $row["correo"]."</td></tr>";  
    }

} else {
   echo "0 registros";
}
echo "</table>";
?>
</body>
</html>