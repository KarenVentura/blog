<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <base href="<?php echo base_url(); ?>"></base>
</head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<body>
  <div class="container principal">
    <?php if(isset($msj) )
      {
        echo "<script type='text/javascript'> alert('".$msj."'); </script>";
      }

     ?>
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
    </div>
  </div>
</body>
</html>
