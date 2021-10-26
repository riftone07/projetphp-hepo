<?php 

$bd = new PDO("mysql:host=localhost;dbname=entreprise;charset=utf8;port=8889",'root','root');

$prenom = htmlspecialchars($_POST['prenom']);

/*
$nom = $_POST['nom'];

$adresse = $_POST['adresse'];

$telephone = $_POST['telephone'];

$requete = $bd->prepare("INSERT INTO utilisateur (prenom, nom, adresse, telephone;datedecreat) VALUES (:prenom, :nom, :adresse, :telephone, :datedecreat) ");


$requete->execute([
	'prenom' => $prenom,
	'nom' => $nom,
	'adresse' => $adresse,
	'telephone' => $telephone,
	'datedecreat' => date('Y-m-d H:i:s')
]);

echo "Inscription....";?*/
?>

