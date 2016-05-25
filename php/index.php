<?php
include('tools/framework.php');
echo $header;

$selection = filter_var($_GET['i'], FILTER_SANITIZE_STRING);
switch($selection){
    case 'lD';
      include('tools/leerDirectorio.php');
    break;

    case 'lA';
      include('tools/leerArchivos.php');
    break;

    case 'lV';
      include('tools/liveView.php');
    break;

    default;
      include('inicio.php');
    break;
}

echo $footer;
?>
