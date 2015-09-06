<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <base href="<?php echo base_url(); ?>"></base>
</head>
<body>
  <form action="index.php/welcome/creando_post" method="post">
    <label>Titulo del Post</label>
    <input name="titulo_post" required><br>
    <label>Contenido del Post</label>
    <input name="contenido_post" required>
    <input type="submit" value="Agregar">
  </form>
  <form action="index.php/welcome/index">
  	<input type="submit" value="Salir">
  </form>
</body>
</html>
