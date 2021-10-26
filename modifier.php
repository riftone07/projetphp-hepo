<?php 
require_once 'connexion.php';

$id = $_GET['messageId'];

$requete = $bd->query("SELECT * FROM contacts WHERE id =  $id");

$element = $requete->fetch();

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

.bg-image {
  background-image: url('https://source.unsplash.com/kKvQJ6rK6S4/660x1000');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
	</style>
</head>
<body>
<div class="container-fluid px-5 my-5">
  <div class="row justify-content-center">
    <div class="col-xl-10">
      <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
        <div class="card-body p-0">
          <div class="row g-0">
            <div class="col-sm-6 d-none d-sm-block bg-image"></div>
            <div class="col-sm-6 p-4">
              <div class="text-center">
                <div class="h3 fw-light">Contactez Nous pour plus d'info</div>
                <p class="mb-4 text-muted">Nous sommes disponible 24h/24</p>
              </div>

        

              <form  method="post" action="modification.php">

                <input type="hidden" name="monid" value="<?php echo $element['id'] ?>">
                <!-- Name Input -->
                <div class="form-floating mb-3">
                  <input class="form-control" id="name" type="text" name="nom" value="<?php echo $element['nom'] ?>" />
                  <label for="name">Prenom Nom</label>
               
                </div>

               
                <!-- Name Input -->
                <div class="form-floating mb-3">
                  <input class="form-control" id="email" type="email" name="email" value="<?php echo $element['email'] ?>" />
                  <label for="email">Email</label>
               
                </div>

               
                <!-- Message Input -->
                <div class="form-floating mb-3">
                  <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;"name="message"><?php echo $element['message'] ?></textarea>
                  <label for="message">Message</label>
              
                </div>

                
                <!-- Submit button -->
                <div class="d-grid">
                  <button class="btn btn-primary btn-lg " id="submitButton" type="submit">Envoyer</button>
                </div>
              </form>
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