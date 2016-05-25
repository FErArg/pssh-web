<?php
$directorio = '/tmp/pssh/';

$menu1 = "
        <li><a id=\"current\" href=\"?i\"><span>Inicio</span></a></li>
";

$header="
	<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
	<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">
		<head>
			<meta name=\"Description\" content=\"Visor web de Logs PSSH.\" />
			<meta name=\"Keywords\" content=\"pssh\" />
			<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
			<meta name=\"Distribution\" content=\"Global\" />
			<meta name=\"Author\" content=\"SerInformaticos - info@serinformaticos.es\" />
			<meta name=\"Robots\" content=\"index,follow\" />
			<link rel=\"stylesheet\" href=\"tools/style.css\" type=\"text/css\" />
			<title>PSSH-Web</title>
		</head>
	<body>

	<div id=\"header\">

		<h1 id=\"logo\">PSSH-Web<span class=\"gray\">-</span>Ser<span class=\"green\">Informaticos</span></h1>
		<h2 id=\"slogan\">Visor web de PSsh</h2>

		<!-- Menu Tabs -->
		<ul>
			$menu1
		</ul>

	</div>
";

$footer="
<!-- footer starts here -->
<div id=\"footer\">

	<div class=\"footer-left\">
		<p class=\"align-left\">
		&copy; 2016 <strong>SerInformaticos</strong> |
		Design by <a href=\"http://www.serinformaticos.es/\">SerInformaticos</a> |
		Valid <a href=\"http://validator.w3.org/check/referer\">XHTML</a> |
		<a href=\"http://jigsaw.w3.org/css-validator/check/referer\">CSS</a>
		</p>
	</div>

	<div class=\"footer-right\">

		<p class=\"align-right\">
		<a href=\"?\">Inicio</a>&nbsp;|&nbsp;
		<a href=\"http://serinformaticos.es/Contacto\">Contacto</a>&nbsp;|&nbsp;
		</p>
	</div>

</div>
<!-- footer ends here -->
</body>
</html>
";
?>
