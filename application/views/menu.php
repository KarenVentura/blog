<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <base href="<?php echo base_url(); ?>"></base>
</head>
<body>
  <?php if(isset($msj) )
    { 
      echo "<script type='text/javascript'> alert('".$msj."'); </script>";
    } 

   ?>
  <table>
  	<tr>
  	  <td>
  	    <form action="index.php/welcome/agrega_post" method="post">
  	  	  <button type="sumbit">Agrega un nuevo post</button>
  	  	</form>
  	  </td>
  	  <td>
  	   <form action="index.php/welcome/edita_post" method="post">
  	     <button type="sumbit">Edita un Post</button>
  	   </form>
  	  </td>
      <td>
  	    <form action="index.php/welcome/elimina_post" method="post">
  	      <button type="sumbit">Elimina un Post</button>
  	    </form>
  	  </td>
      <td>
        <form action="index.php/welcome/index" method="post">
          <button type="sumbit">Ver Post</button>
        </form>
      </td>
      <td>
        <form action="index.php/welcome/destruye_sesion" method="post">
          <button type="sumbit">Salir de la sesion</button>
        </form>
      </td>
  	</tr>
  </table>
</body>
</html>