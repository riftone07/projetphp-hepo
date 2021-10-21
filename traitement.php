<?php 

require_once 'connexion.php';

$nom = $_POST['nom'];

$email = $_POST['email'];

$message = $_POST['message'];


$requete = $bd->prepare("INSERT INTO contacts (nom, email, message) VALUES(:nom, :email, :message)");

$requete->execute([
	'nom' => $nom,
	'email' => $email,
	'message' => $message
]);

header('Location: success.php')
 ?>