<?php 

try {
$bd = new PDO("mysql:host=localhost;dbname=entreprise;charset=utf8;port=8889",'root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $e) {

  echo $e->getMessage();
  exit;
}

$id = $_POST['user_id'];


$nom = $_POST['nom'];

$prenom = $_POST['prenom'];

$telephone = $_POST['telephone'];
$adresse = $_POST['adresse'];


$requete = $bd->prepare("UPDATE utilisateur SET prenom = :prenom,  nom = :nom,  adresse = :adresse,  telephone = :telephone WHERE id = :id ");

$requete->execute([
	'nom' => $nom,
	'prenom' => $prenom,
	'adresse' => $adresse,
	'telephone' => $telephone,
	'id' => $id
]);

header("Location: ../liste-utilisateur.php");
 ?>