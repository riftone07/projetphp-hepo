<?php 
require_once 'connexion.php';

$requete = $bd->query('SELECT * FROM contacts ORDER BY id DESC');

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">


</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-lg-12 card">
				<div class="card-header">
					Liste des  messages
				</div>
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Nom</th>
								<th>Email</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php while($donnees = $requete->fetch()) {?>
							<tr>
								<td><?php echo $donnees['nom'] ?></td>
								<td><?php echo $donnees['email'] ?></td>
								<td>
									<div class="btn-group">
									<a href="#" class="btn btn-info"><i class="lni lni-eye"></i></a>
	<a href="modifier.php?messageId=<?php echo $donnees['id'] ?>" class="btn btn-warning" title="Modifier "><i class="lni lni-pencil"></i></a>
	<a href="suppression.php?messageId=<?php echo $donnees['id'] ?>" class="btn btn-danger" title="Supprimer cet element"><i class="lni lni-trash-can"></i> </a>
									</div>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>