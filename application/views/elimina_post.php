<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>Blog Personal</title>
  <base href="<?php echo base_url(); ?>"></base>
</head>
<body>
  <table>
    <thead>
      <tr>
      	<th>Posts</th>
      </tr>  
    </thead>
    <tbody>
      <?php foreach($lista_posts as $row){ ?>
      <tr>
        <td><?php echo $row['titulo']; ?></td>
        <td><b><a style="color:green;" href="index.php/welcome/eliminando_post?id_post=<?php echo $row['id_post'] ?>">Eliminar</a></b></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>
