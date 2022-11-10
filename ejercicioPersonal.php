<?php
session_unset();
?>
<html>
 <head>
  <title>prueba personal</title>
 </head>
 <body>
  <?php include "zonaHoraria.php";?>
  <form method="post" action="paginaCentral.php">
   <p>Introduce tu nombre: 
    <input type="text" name="user"/>
   </p>
   <p>Introduce tu contraseña: 
    <input type="password" name="pass"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Enviar"/>
   </p>
  </form>
 </body>
</html>
