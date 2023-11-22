<?php 
    include "dataBase/connectdb.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier entrants</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .texteCote {
             display: none;
             position: relative;
             top: -20px; 
             left: -50px;
        }

        .monLien:hover + .texteCote {
            display: inline;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg rounded" style=" background-color: #264F6E;">
        <div class="container">
            <a class="navbar-brand text-white" href="index.php">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!--li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Gestionnaire de Courier</a>
                    </li-->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="ajouterS.php">Ajouter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="courrierE.php">Courriers entrants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Paragraphes</a>
                    </li>
                    <!--li class="nav-item">
                        <a class="nav-link text-white" href="#">Deconnexion</a>
                    </li-->
                    
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
    <div class="container justify-content-center" style="background-color: whitesmoke; overflow-x: auto" >
        
        <div class="container justify-content-center align-items-center p-5">
            <h2 class="align-items-center">COURRIERS SORTANTS</h2>
        </div>
        <?php include "vues/courrierS.php";?>
  </div>

  <script>
        <?php include "vues/courrierS.php";?>



        function afficherPopup() {
            var lien1 = document.querySelector('.monLien');
            lien1.addEvenListener('click', function() {
                
                alert(lien1.innerText);
            })  
        }     
            
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>