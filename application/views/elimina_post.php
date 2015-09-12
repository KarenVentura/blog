<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>Blog Personal</title>
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
        <table>
          <thead>
            <tr>
            	<th class="texto">Posts</th>
            </tr>
          </thead>
          <tbody class="lista">
            <?php foreach($lista_posts as $row){ ?>
            <tr>
              <td><?php echo $row['titulo']; ?></td>
              <td>
                <a class="icon" href="index.php/welcome/eliminando_post?id_post=<?php echo $row['id_post'] ?>">
                  <i class="fa fa-trash-o"></i>
                </a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</body>
</html>
