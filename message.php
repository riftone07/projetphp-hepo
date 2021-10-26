<?php 
require_once 'connexion.php';

$requete = $bd->query("SELECT * FROM contacts ORDER BY ID DESC");


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Message</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/d3e51cbf14.js" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
		<div class="row mt-5">
			<?php while ($donnees = $requete->fetch()) { ?>
			<div class="col-lg-6 card mt-2">
					<div class="card-body text-center">
						<?php echo $donnees['message'] ?>
						<hr>
						<?php echo $donnees['email'] ?>

					</div>
					<div class="card-footer">
						<?php echo $donnees['nom'] ?>

						<span class="float-right"><i class="fas fa-clock"></i> <?php echo $donnees['date_creation'] ?></span>
					</div>
			</div>
		<?php } ?>
		</div>
	</div>

</body>
</html>