<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>Blog Personal</title>
  <base href="<?php echo base_url(); ?>"></base>
</head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<body>
<div class="container principal">
  <div class="row">
    <div class="col-lg-12" id="Titulo">
      <p>Blog de Karen</p>
    </div>
    <div class="col-lg-12" >
      <nav class="navbar navbar-inverse" id="Barra">
      <ul class="nav navbar-nav">
        <li><a href="#">Agregar Nota</a></li>
        <li><a href="#">Ver Notas</a></li>

        <li><a href="index.php/welcome/capturar_datos"><i class="fa fa-sign-in sign"></i></a></li>
      </ul>
      </nav>
    </div>
    <div class="col-lg-12 Informacion">
      <div class="col-lg-1"></div>
      <div class="col-lg-7">
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda accusantium sed aut sunt, debitis error officiis obcaecati, hic impedit ad temporibus et cum consequuntur eaque mollitia adipisci, laboriosam. Cumque, iste.</div>
        <div>Porro commodi, magnam laudantium minima deserunt vero dolorem temporibus delectus perspiciatis quasi inventore voluptatem ipsam impedit quibusdam ducimus provident eius consectetur ea, earum reprehenderit iste deleniti aspernatur nihil doloribus autem?</div>
        <div>Doloremque explicabo unde dolore, praesentium earum molestias necessitatibus ex aperiam natus veniam. Dolor neque, veniam repudiandae. Delectus accusamus voluptatem perferendis nobis atque recusandae eius deleniti, debitis, dolorum qui, saepe temporibus!</div>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium sit, quasi aliquam nihil voluptatem nemo id minima recusandae tenetur dolor omnis dolorem, earum consequuntur illo quod repudiandae vel! Obcaecati, blanditiis?</div>
        <div>Illum laudantium odit distinctio reprehenderit minus a, ad minima repudiandae incidunt quis hic possimus saepe tenetur, in inventore nemo consectetur, debitis, doloremque tempora corporis rem. Cupiditate animi hic dolore, sapiente.</div>
        <div>Possimus perspiciatis vitae aliquam impedit distinctio obcaecati amet soluta deserunt corporis odio a non, laboriosam reprehenderit accusantium debitis voluptatem, facilis quas maxime. Iure, praesentium? Assumenda mollitia eum libero quia cupiditate.</div>
      </div>
      <div class="col-lg-3" id="infousuario">
        <img src="Imagen/user.jpg" alt="" id="user">
        <p></p>
        <p><bl>Nombre:</bl> Karen</p>
        <p><bl>Profesión:</bl> Ingeniera</p>
        <p><bl>Redes Sociales:<a>www.fb.com/karen</a></bl> </p>
      </div>
      <div class="col-lg-1"></div>
    </div>
  </div>
</div>
<!--   <a href="index.php/welcome/capturar_datos">Login</a>
  <h1>Hola aquí mostraremos los articulos que publicaremos :)</h1>
  <table>
    <thead>
      <tr>
      	<th>Posts</th>
      </tr>
    </thead>
    <tbody>
      <?php //foreach($lista_posts as $row){ ?>
      <tr>
        <td><?php //echo $row['titulo']; ?></td>
        <td><b><a style="color:green;" href="index.php/welcome/leer_post?id_post=<?php //echo $row['id_post'] ?>">Leer Post</a></b></td>
      </tr>
      <?php //} ?>
    </tbody>
  </table> -->
</body>
</html>

