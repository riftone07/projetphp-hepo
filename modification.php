<?php 

require_once 'connexion.php';

$id = $_POST['monid'];


$nom = $_POST['nom'];

$email = $_POST['email'];

$message = $_POST['message'];



$requete = $bd->prepare("UPDATE contacts SET nom = :nom , email = :email , message = :message WHERE id = :id");

$requete->execute([
	'nom' => $nom,
	'email' => $email,
	'message' => $message,
	'id' => $id
]);

echo "modification reussie";

 ?>