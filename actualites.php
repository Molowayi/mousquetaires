<?php 
	
	require_once("menu.php");
	ob_start(); 

?>

<h1>Actualités</h1>


<?php 
	$content = ob_get_clean();

	require_once "template.php";

?>
