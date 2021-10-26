<?php 

require_once 'connexion.php';

 $id = $_GET['messageId'];
 
 $requete = $bd->prepare('DELETE FROM contacts WHERE id = :paramid');

$requete->execute([
	'paramid' =>  $id 
]);

echo "Suppression reussie";

 ?>
