<?PHP
if (isset($_GET['prenom']))
{
	echo "<html> <head> <meta charset=\"UTF-8\"> </head><body>";
	echo "<h1>Bienvenue ";
	echo $_GET['prenom'];
	echo "</h1>";
	echo '<ul><li><a href="choix1.php?prenom='.$_GET['prenom'].'">choix1</a></li>';
	echo '<li><a href="choix2.php?prenom='.$_GET['prenom'].'">choix2</a></li>';
	echo '<li><a href="choix3.php?prenom='.$_GET['prenom'].'">choix3</a></li></ul>';
	echo "</h1></body></html>";
	session_start();
}
else {  header('Location: formulaire.php'); }
?>

