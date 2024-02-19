<?php 
	
	require_once("menu.php");
	ob_start(); 
?>

<h1>A propos</h1>
<p>Notre bibliothèque


<?php 
	$content = ob_get_clean();

	require_once "template.php";

?>
