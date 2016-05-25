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
arsort($archivos);
// print_r($archivos);

$nroArc = count($archivos);

$i='0';
echo "<table border=\"1\" style=\"width:100%\" valign=\"top\"  align=\"left\">";

foreach( $archivos as $arc0 ){
  if( $i == '0' ){
      echo "<tr><td>";
      $i++;
	} elseif( $i == '1' ){
      echo "</td><td>";
      $i++;
	} elseif( $i == '2' ){
      echo "</td></tr>";
      echo "<tr><td>";
      $i = '1';
	}

  // lee archivo
  echo "<h2>Archivos de Log ".$arc0."</h2>";
  echo "<div id=\"code\">";
  $archivo = $directorio."/".$dir0."/".$arc0;
  $myfile = fopen("$archivo", "r") or die("Unable to open file!");
  echo fread($myfile,filesize("$archivo"));
  echo "</div>";
}

if( $i == '2' ){
      echo "</td><td></td></tr></table>";
} elseif( $i == '1' ){
      echo "</td></tr></table>";
}

echo "</pre>";
?>
