<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <base href="<?php echo base_url(); ?>"></base>
</head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<body>
<div class="container-fluid">
  <div class="row">
  <div class="col-lg-12" id="inicio">
    <p id="TextB">BIENVENIDO A TU BLOG DE NUEVO</p>
    <div class="col-lg-4"></div>
    <div class="login col-lg-4">
    <form action="index.php/welcome/login" method="post">
      <div class="form-group">
        <label id="TextLogin" for="usuario">Nombre de Usuario</label>
        <input type="text" placeholder="Usuario" name="usuario"class="form-control" id="usuario" placeholder="Usuario">
      </div>
      <div class="form-group">
          <label  id="TextLogin" for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password">
      </div>
      <div class="checkbox">
          <label id="TextLogin">
            <input type="checkbox" > Remember me
          </label>
      </div>
      <div class="form-group">
      <div class="col-lg-7"></div>
        <button type="submit" class="btn btn-default">Sign in</button>
        <a href="index.php/welcome/index" type="button" class="btn btn-default">Cancelar</a>
      </div>
  </form>

</body>
</html>
