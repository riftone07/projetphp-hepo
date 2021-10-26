

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
    <div class="col-xl-6 col-lg-6">
      <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
        <div class="card-body p-0">
          <div class="row g-0">
      
            <div class="col-sm-12 p-4">
              <div class="text-center">
                <div class="h3 fw-light">Créez un utilsateur</div>
            
              </div>

        

              <form  method="post" action="enregistrementuser.php">

                <!-- Name Input -->
                <div class="form-floating mb-3">
                  <input class="form-control" id="name" type="text" name="prenom"  required />
                  <label for="name">Prenom </label>
                </div>

                         <!-- Name Input -->
                <div class="form-floating mb-3">
                  <input class="form-control" id="nom" type="text" name="nom" required />
                  <label for="nom"> Nom *</label>
                </div>

                          <!-- Name Input -->
                <div class="form-floating mb-3">
                  <input class="form-control" id="adresse" type="text" name="adresse" />
                  <label for="adresse">Adresse</label>
                </div>

               
             <!-- Name Input -->
                <div class="form-floating mb-3">
                  <input class="form-control" id="telephone" type="text" name="telephone" />
                  <label for="telephone">Telephone</label>
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