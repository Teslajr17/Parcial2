<!doctype html>
<html>
<head>
<title>Registro de conferencias</title>
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
$sql = "SELECT nombre,correo FROM bmazariegos.conferencia;";

$result = $conn->query($sql);
echo "<table border>";
echo "<tr><th>Nombre</th><th>correo</th></tr>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nombre"]. "</td><td>" . $row["correo"]."</td></tr>";  
    }

} else {
   echo "0 registros";
}
echo "</table>";
?>
</body>
</html>