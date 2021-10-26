<?php 
try {
$bd = new PDO("mysql:host=localhost;dbname=entreprise;charset=utf8;port=8889",'root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $e) {

  echo $e->getMessage();
  exit;
}

$requete = $bd->query("SELECT * FROM utilisateur ORDER BY nom ASC");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
	<style type="text/css">
  body {
    background: #F4921D;
    background: linear-gradient(to right, #F4921D, #F4921D);
  }


</style>
</head>
<body>
  <div class="container-fluid px-5 my-5">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-10">
        <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
          <div class="card-body p-0">
            <div class="row g-0">

              <div class="col-sm-12 p-4">
                <div class="text-center">
                  <div class="h3 fw-light">Liste des utilisateurs</div>

                </div>
                <table class="table table-striped table-dark">
                  <thead>
                    <tr>
                      <th scope="col">Nom</th>
                      <th scope="col">Prenom</th>
                      <th scope="col">Adresse</th>
                      <th scope="col">Telephone</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
          <?php while($utilisateurs = $requete->fetch()) {?>
                    <tr>
                  
                      <td><?php echo $utilisateurs['nom'] ?></td>
                      <td><?php echo $utilisateurs['prenom'] ?></td>
                      <td><?php echo $utilisateurs['adresse'] ?></td>
                      <td><?php echo $utilisateurs['telephone'] ?></td>
                      <td><a href="users/modifier.php?user_id=<?php echo $utilisateurs['id'] ?>&securite=<?php echo date("Y-m-d") ?>&type='modifier'" class="btn btn-warning">Modifier</a></td>
                    </tr>
          <?php } ?>
                  </tbody>
                </table>

                <!-- End of contact form -->

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CDN Link to SB Forms Scripts -->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>