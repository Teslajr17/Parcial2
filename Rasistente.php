<!doctype html>
<html>
<head>
<title>Asistentes</title>
</head>
<body>
<h1>Registro de Asistentes</h1>
<form action="guardarA.php" method="POST">
<label for="nonbre">Nombre</label>
<input type="text" name="nombre" required/>
<label for="apellido">Apellido</label>
<input type="text" name="apellido" required/>
<label for="correo">Correo</label>
<input type="email" name="correo" required/>
<input name="enviar" type="submit" value="registrar"/>
</form>

<form  action="admin.html" method="POST"> 
 <input name="sesion" type="submit" value="regresar" /> <br>
</form>

</body>
</html>