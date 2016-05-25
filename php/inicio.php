<?php
include('tools/framework.php');
$directorios = scandir($directorio);

//elimina . y ..
unset($directorios['0']);
unset($directorios['1']);

echo "<pre><br />";
echo "<h2>Listado de Directorios de Logs</h2>";
// print_r($directorios);

foreach( $directorios as $value ){
  //echo $value."<br />";
  $link = "<a href=\"?i=lD&d=".$value."\">".$value."</a>";
  echo $link."<br />";
}

echo "</pre><br />";
?>
