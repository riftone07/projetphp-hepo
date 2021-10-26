<?php 
try {
$bd = new PDO("mysql:host=localhost;dbname=entreprise;charset=utf8;port=8889",'root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $e) {

	echo $e->getMessage();
	exit;
}

$prenom = $_POST['prenom'];


$nom = $_POST['nom'];

$adresse = $_POST['adresse'];

$telephone = $_POST['telephone'];

$requete = $bd->prepare("INSERT INTO utilisateur (prenom, nom, adresse, telephone) VALUES (:prenom, :nom, :adresse, :telephone) ");


$requete->execute([
	'prenom' => $prenom,
	'nom' => $nom,
	'adresse' => $adresse,
	'telephone' => $telephone
]);

echo "Inscription....";
?>

