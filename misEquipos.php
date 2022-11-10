	<?php
session_start();

//Check user permission
if ($_SESSION['authuser'] != 1){
    echo "No estas registrado en la base de datos";
    exit();     
}
?>
<html>
 <head><title>
<?php
if (isset($_GET["equipo"])) {
	echo " - ";
	echo $_GET["equipo"];
}
?>
</title></head>
<body>
<?php 

$equipofav = array(	"Real Madrid",
					"Manchester United",
					"PSG",
					"Villarreal",
					"Lille",
					"Osasuna",
					"ATM",
					"ATH",
					"Sevilla",	
					"Real Betis");

if (isset($_GET["equipo"])) {
	echo "Biencvenido a mi pagina, ";
	echo $_SESSION["username"];
	echo "!<br/>";
	echo "Mi equipo favorito es ";
	echo $_GET["Real madrid"];
	echo "<br/>";
	$equipos = 10000000;
	echo "Mi calificacion para este equipo es: ";
	echo $equipos;
} else {
	echo "Mi top 10 de equipos es: ";
	if (isset($_GET["equipitos"])) {
		sort($equipofav);
	}
	echo "<ol>";
	foreach ($equipofav as $equipos) {
		echo "<li>";
		echo $equipos;
	}
	echo "</ol>";
}
?>
</body>
</html>

