<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <base href="<?php echo base_url(); ?>"></base>
</head>
<body>
  <?php foreach($post_seleccionado as $row){ ?>
    <h1><?php echo $row['titulo']; ?></h1>
    <p><?php echo $row['contenido']; ?></p>
    <a style="color:green;" href="index.php/welcome/index">Página Principal</a></b></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>