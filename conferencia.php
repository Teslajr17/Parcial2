<!doctype html>
<html>
<head>
<title>Conferencias</title>
</head>
<body>
<h1>Registro de conferencias</h1>
<form action="guardarC.php" method="POST">
<label for="nonbre">Nombre de la conferencia</label>
<input type="text" name="nombre" required/>
<label for="correo">Correo</label>
<input type="email" name="correo" required/>
<input name="enviar" type="submit" value="registrar" formmethod="get" />
</form>

<form  action="admin.html" method="POST"> 
 <input name="sesion" type="submit" value="regresar" /> <br>
</form>

</body>
</html>