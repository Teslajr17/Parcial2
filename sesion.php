<?php
if(isset($_POST["correo"]) && isset($_POST["password"])){
	$correo = $_POST["correo"];
	$password = $_POST["password"];
	$servername = "localhost";
	$username = "bmazariegos";
	$password = "bmazariegos";
	
	$conn = mysqli_connect($servername, $username, $password);

	if (!$conn) {
    		die("Fallo conectarse por: " . mysqli_connect_error());
	}

	$sql = "SELECT correo,password FROM bmazariegos.usuarioC where correo = '".$correo."' and password = '".md5($password)."';";


	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		session_start();
		$_SESSION["correo"]=$correo;
		if ($result) {
		}
	}else{
		echo "No se logro iniciar sesion";
	}
	$conn->close();
} 
?>
<!doctype html>
<html>
<head>
<title>Formulario de registro </title>
</head>
<body>
<?php
if(isset($_SESSION["correo"])){
?>
<html>
  <head>
    <title>Conferencias</title>
  </head>

  <body>
  <div class="container">
    <div class="tutorial">
      <ul>
        <li>Conferencias<i class="fa fa-angle-down"></i>
        <ul>
          <li><a href="conferencia.php">Registrar conferencia</a></li>
          <li><a href="Rconferencia.php">Listado de conferencias</a></li>
        </ul>
        <li>Conferencistas<i class="fa fa-angle-down"></i>
         <ul>
              <li><a href="Rconferencista.php">Registrar conferencista</a></li>
              <li><a href="Mconferencista.php">Listado de asistentes conferencistas</a></li>
          </ul>          <li>Asistentes<i class="fa fa-angle-down"></i>
            <ul>
            <li><a href="Rasistente.php">Registrar asistentes</a></li>
              <li><a href="Masistente.php">Listado de asistentes registrados</a></li>
            </ul>
        </li>
      </ul>
      
      <div class="slider"></div>
      <div class="information">
        
        <p>Desarrollo web - Parcial II 2021</p>
<form  action="cerrar.php" method="POST"> 
 <input name="sesion" type="submit" value="Cerrar sesion" /> <br>
</form>

      </div>
    </div>
  </div><link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css" />
  
  
</body>

</html>
<?php
}
else{
?>

<form action="sesion.php" method="POST">
<label for="correo">Usuario</label>
<input type="text" name="correo" required/>
<label for="password">Contraseña</label>
<input type="password" name="password" required/>
<input name="enviar" type="submit" value="acceder"/>
</form>
<?php
}
?>
</body>
</html>

