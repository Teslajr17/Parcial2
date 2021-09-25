<!doctype html>
<html>
<head>
<title>Formulario de registro </title>
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
$sql = "SELECT cui,nombre1,apellido1,correo,clave FROM bmazariegos.usuario;";

$result = $conn->query($sql);
echo "<table>";
echo "<tr><th>CUI</th><th>Nombre</th><th>Apellido</th><th>Correo</th><th>Clave</th></tr>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>><td>" . $row["cui"]. "</td><td>" . $row["nombre1"]. "</td><td> " . $row["apellido1"]. "</td>><td>" . $row["correo"]. "</td>><td>" . $row["clave"]. "</td></tr>";
    }
} else {
   echo "0 registros";
}
echo "</table>";
?>
</body>
</html>

