<?php
include('tools/framework.php');
// print_r($_GET);

echo "<pre><br />";
$dir0 = $_GET['d'];
$arc0 = $_GET['a'];
$archivo = $directorio."/".$dir0."/".$arc0;

echo "<h2>Archivos de Log ".$arc0."</h2>";

echo"<div id=\"code\">";
$myfile = fopen("$archivo", "r") or die("Unable to open file!");
echo fread($myfile,filesize("$archivo"));
echo "</div>";
fclose($myfile);

echo "<br /><br /><a href=\"?i=lD&d=".$dir0."\">Volver</a>";
echo "</pre><br />";
?>
