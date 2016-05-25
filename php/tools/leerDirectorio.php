<?php
include('tools/framework.php');
// print_r($_GET);

echo "<pre><br />";
$dir0 = $_GET['d'];
$dir1 = $directorio."/".$dir0;
$archivos  = scandir($dir1);
//elimina . y ..
unset($archivos['0']);
unset($archivos['1']);
// print_r($archivos)

echo "<pre><br />";
echo "<h2>Archivos de Logs del Directorio ".$dir0."</h2><br />";
echo "<h3><a href=\"?i=lV&d=".$dir0."\">LiveView</a></h3><br />";

foreach( $archivos as $value ){
  //echo $value."<br />";
  $link = "<a href=\"?i=lA&a=".$value."&d=".$dir0."\">".$value."</a>";
  echo $link."<br />";
}

echo "<br /><br /><a href=\"?i=\">Volver</a>";
echo "</pre><br />";
?>
