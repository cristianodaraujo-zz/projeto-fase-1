<?php 
	$title = "Projeto fase 1 - Code Education";
	$h1    = substr($title, 16); 
?>
<html>
<head>
	<title><?= $title; ?></title>
	<style>
		* { margin: 0px; padding: 0px; }
		body { font: bold 14px "Trebuchet MS"; color: #525252; } 
		h1:hover { text-decoration: underline; color: #333; cursor: pointer; float: left; padding: 5px; }
	</style>
</head>
<body>
	<?php if($h1): ?>
		<h1><?= $h1; ?></h1>
	<?php endif; ?>
</body>
</html>	
