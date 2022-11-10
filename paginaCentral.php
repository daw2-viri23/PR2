<?php
session_start();
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;

//Check username and password information
if (($_SESSION['username'] == 'Joseluis') and
    ($_SESSION['userpass'] == '12345')) {
    $_SESSION['authuser'] = 1;
} else {
    echo 'No estas registrado en la base de datos';
    exit();     
}
?>
<html>
 <head>
  <title>José Luis viri</title>;
 </head>
 <body>
<?php
include "zonaHoraria.php";
$myfavmovie = urlencode("Real Madrid");
echo "<a href='misEquipos.php?favmovie=$myfavmovie'>";
echo "Pulsa aqui para conocer mi equipo de futbol"; 
echo "</a>";
?>
<br/>

<br/>
</body>
</html>







