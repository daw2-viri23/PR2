<html>
<head>
<title> Tipo date</title>
</head>
<body>
<div style="text-align: center">
<p>Bienvenido a mi pagina aqui tienes la hora </p>
    <br/>
<?php
date_default_timezone_set("UTC");
echo "hoy es dia ";
echo date("F d");
echo ", ";
echo date("Y");
?>
<br/>
</div>
</body>
</html>



