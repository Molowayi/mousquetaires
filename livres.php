<?php 
// Connection à la bd
try {
	$mysqlClient = new PDO("mysql:host=$localhost;dbname=$bibliotheque;charset=UTF8", "root", "");

	if ($pdo) {
		echo "Connected to the $db database successfully!";
	}

	// Créer un client PHP
	$booksStatement = $mysqlClient->prepare("SELECT COUNT('id') FROM livre");
	// Exécuter

	$booksStatement->execute();
	// Prendre les données
	$ntotal = $booksStatement->fetchAll();



} catch (PDOException $e) {
	echo $e->getMessage();
}

$affiche = 10;
$npages = ceil($total/$affiche);

	require_once("menu.php");
	ob_start(); 
?>

<h1>Livres</h1>
<table>
	<th>
		
		<td>Titre</td>
		<td>Année Edition</td>
		<td>ISBN</td>
		
	</th>
<?php foreach($livres as $livre){ ?>
<tr>
		<td></td>
		<td></td>
		<td></td>
		
</tr>

<?php } ?>

</table>
<a href="">Début</a>
<a href="">Précédent</a>
<?php for ($x = 1; $x <= $npages; $x++) { ?>
<a href="">$lien</a>
<?php } ?>
<a href="">Suivant</a>
<a href="">Fin</a>

<?php 

	$content = ob_get_clean();

	require_once "template.php";

?>
