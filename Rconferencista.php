<!doctype html>
<html>
<head>
<title>Conferencistas</title>
</head>
<body>
<h1>Registro de conferencistas</h1>
<form action="guardarCS.php" method="POST">
<label for="nonbre">Nombre</label>
<input type="text" name="nombre" required/>
<label for="apellido">Apellido</label>
<input type="text" name="apellido" required/>
<label for="profesion">Profesion</label>
<input type="text" name="profesion" required/>
<label for="biografia">Biografia</label>
<input type="text" name="biografia" required/>
<label for="correo">Correo</label>
<input type="email" name="correo" required/>
<input name="enviar" type="submit" value="registrar"/>
</form>

<form  action="admin.html" method="POST"> 
 <input name="sesion" type="submit" value="regresar" /> <br>
</form>

</body>
</html>