<?php 
    session_start();

    if(isset($_SESSION['login']) && isset($_SESSION['mdp'])){
      $etat = "connecté";
    }else{$etat = "deconnecté";}


    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
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
    <div id="connexion" hidden><?=$etat?></div>
    
    <nav class="navbar navbar-expand-lg rounded" style=" background-color: #264F6E;">
        <div class="container">
            <a class="navbar-brand text-white" href="#" id="accueil">Accueil</a>
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
                            <li><a class="dropdown-item" href="#" id="courrierE">Couriers entrants</a></li>
                            <li><a class="dropdown-item" href="#" id="courrierS">Couriers sortants</a></li>
                            
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" id="parag">Paragraphes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="controller/deconnexion.php" id="decon">Deconnexion</a>
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
              <div class="card bg-gradient bg-opacity-50 text-white" style="border-radius: 1rem; border: 10px solid  whitesmoke; background-image: url(images/solution.jpg);">
                <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                            <img src="images/solution.jpg" class="d-block w-100" alt="..." width="720" height="469">
                      </div>
                      <div class="carousel-item active" data-bs-interval="2000">
                        <img src="images/bureau.jpg" class="d-block w-100" alt="..." width="720" height="469">
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="images/taches.jpg" class="d-block w-100" alt="..." width="720" height="469">
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="images/fond.jpg" class="d-block w-100" alt="..." width="720" height="469">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
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
  

    <script src="tru.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>