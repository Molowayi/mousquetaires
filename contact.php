<?php 
	
	require_once("menu.php");
	ob_start(); 

?>

<h1>Contact</h1>


<?php 
	$content = ob_get_clean();

	require_once "template.php";

?>
