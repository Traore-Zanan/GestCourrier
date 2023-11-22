<?php 
  session_start();                      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<style>
body{
    background-image: url("images/solution.jpg");
}

.gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}

</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body >
    
    <nav class="navbar navbar-expand-lg rounded" style=" background-color: #264F6E;">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Gestionnaire de Couriers
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Couriers entrants</a></li>
                          <li><a class="dropdown-item" href="#">Couriers sortants</a></li>
                          
                      </ul>
                    </li>
                    <li class="nav-item">
                      <li class="nav-item">
                        <a class="nav-link text-white" href="#">Paragraphes</a>
                    
                    
                    <li class="nav-item dropdown">
                        <!--a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul-->
                    </li>
                    
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="Search" placeholder="Recherche..." aria-label="search">
                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>
            </div>
        </div>
    </nav>




    
   
    <section class="v-100 gradie-custom " style="background-image: url(images/solution.jpg); background-repeat:repeat; ">
        <div class="container py- h-100">
          <div class="row d-flex flex-column justify-content-center align-items-center h-100">



          <div class="d-flex flex-row justify-content-center">
              <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-secondary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-success" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-danger" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-warning" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-info" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-light" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
            </div>



            <div class="col-12 col-md-4 col-lg-4 col-xl-7">
              <div class="card bg-gradient text-white" style="border-radius: 1rem; border: 10px solid whitesmoke; background-color: #425766; background-color: rgba(264F6E, 0, 0, 0.6); background-size: 0vw;">
                <div class="card-body  p-5 text-center">
                  <div class="mb-md-5 mt-md-4 pb-">
                    <form action="controller/connexion.php" method="post">
                      <p class="text-white-50 p-2" id="truc">Veillez entrer votre login et mot de passe!</p>
                      <div class="info p-2 text-danger fs-5">
                        <?php 
                            if(isset($_SESSION["erreur"])){echo $_SESSION["erreur"];}
                            if(isset($_SESSION["inconnu"])){echo $_SESSION["inconnu"];}
                        ?>
                      </div>
                      <div class="form-outline form-white mb-4" style="display: flex; flex-direction: row;">
                          <label class="form-label fs-1 px-2" for="typeEmailX">Login: </label>
                          <input type="text" name="login" id="typeEmailX" class="form-control px-2 form-control-lg" />
                      </div>
                      <div class="form-outline form-white mb-4" style="display: flex; flex-direction: row;">
                          <label class="form-label fs-1 px-2" for="typePasswordX">Passe: </label>
                        <input type="password" name="mdp" id="typePasswordX" class="form-control px-2 form-control-lg" />
                      </div>
                      <button name="connecte" class="btn btn-outline-light btn-lg px-5">Connexion</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>



            <div class="d-flex flex-row justify-content-center">
                <div class="spinner-border text-primary" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-border text-secondary" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-border text-success" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-border text-danger" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-border text-warning" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-border text-info" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-border text-light" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-border text-dark" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
              </div>





          </div>
        </div>
      </section>
  

  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>