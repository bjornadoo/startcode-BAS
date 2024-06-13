<?php 

require '../../vendor/autoload.php';
use Bas\classes\Klant;

if(isset($_POST["verwijderen"])){
	

	

	echo '<script>alert("Klant verwijderd")</script>';
	echo "<script> location.replace('read.php'); </script>";
}
?>