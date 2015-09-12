<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <base href="<?php echo base_url(); ?>"></base>
</head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<body>
  <div class="container principal">
  <div class="row">
      <div class="col-lg-12" id="Titulo">
        <p>Blog de Karen</p>
      </div>
      <div class="col-lg-12" >
        <nav class="navbar navbar-inverse" id="Barra">
        <ul class="nav navbar-nav">
          <li><a href="#">Ver Notas</a></li>
          <li><a href="index.php/welcome/agrega_post">Agregar Nota</a></li>
          <li><a href="index.php/welcome/edita_post">Actualizar Post</a></li>
          <li><a href="index.php/welcome/elimina_post">Eliminar Post</a></li>
          <li><a href="index.php/welcome/destruye_sesion"><i class="fa fa-sign-out"></i></a></li>
        </ul>
        </nav>
      </div>
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <form action="index.php/welcome/editando_post" method="post">
          <div class="form-group">
            <label>Titulo del Post</label>
            <input name="titulo_post" required>
          </div>
          <div class="form-group">
            <label>Contenido del Post</label>
            <input name="contenido_post" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-default">Actualizar</button>
            <input type="hidden" name="actualiza" value= <?php echo $id_post?> >
            <a href="index.php/welcome/index" type="button" class="btn btn-default">Cancelar</a>
          </div>
        </form>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</body>
</html>
