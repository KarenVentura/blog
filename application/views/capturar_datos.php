<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <base href="<?php echo base_url(); ?>"></base>
</head>
<body>
  <form action="index.php/welcome/login" method="post">
    <input type="text" placeholder="Usuario" name="usuario"><br>
    <input type="password" placeholder="Contraseña" name="password"><br>
    <input type="submit" value="Login">
  </form>
  <form action="index.php/welcome/index">
  	<input type="submit" value="Regresar">
  </form>
</body>
</html>
