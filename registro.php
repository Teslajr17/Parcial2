<!doctype html>
<html>
<head>
<title>Formulario de registro </title>
</head>
<body>
<h1>Registro de asistentes</h1>
<form action="guardar.php" method="POST">
<label for="fecha">Fecha de ingreso</label>
<input type="text" name="fecha" required/>
<label for="correo">Correo</label>
<input type="email" name="correo" required/>
<label for="Password">Clave</label>
<input type="password" name="Password" required/>
<input name="enviar" type="submit" value="registrar"/>
</form>
</body>
</html>
