<?php 
    session_start();     
    $precedent = $_SERVER['HTTP_REFERER'];
    if($precedent == "http://localhost/GestCourrier/ajouterS.php"){$afficher = "oui";}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body style="background-color: gray;">

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
                    <!--li class="nav-item">
                        <a class="nav-link text-white" href="#">Ajouter</a>
                    </li-->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="courrierE.php">Courriers entrant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="courrierS.php">Courriers sortants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Paragraphes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Deconnexion</a>
                    </li>
                    
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

    <div class="container justify-content-center  py-5" style="background-color: whitesmoke;">
        <h4 class="align-items-center justify-content-center p-5">Nouveau Courier</h4>
        <?php 
            
            if(isset($_SESSION['msg1']) && isset($afficher)){
                echo " <div class='alert alert-success justify-content-center' role='alert' style='display: flex; text-align: center; width: 50%;'>Courrier enregistré avec succès !</div>";
            }
            if(isset($_SESSION['msg2']) && isset($afficher)){
                echo "<div class='alert alert-danger justify-content-center' role='alert' style='display: flex; text-align: center; width: 50%;'>Enregistrement echoué!</div>";
            }
            if(isset($_SESSION['erreur']) && isset($afficher)){
                echo "<div class='alert alert-danger justify-content-center' role='alert' style='display: flex; text-align: center; width: 50%;'>Veillez renseigner touts les champs requis</div>";
            }
        ?> 
        
        <form class="row g-3" action="controller/ajouterS.php" method="post">
            <div class="col-md-4">
            <label for="inputEmail4" class="form-label fs-4">Expediteur <span style="color: red;">*</span></label>
            <input type="text" name="expediteur" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-4">
            <label for="inputPassword4" class="form-label fs-4">Destinataire <span style="color: red;">*</span></label>
            <input type="text" name="destinataire" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-4">
                <label for="inputEmail4" class="form-label fs-4">Date de reception <span style="color: red;">*</span></label>
                <input type="date" name="date" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label fs-4">Objet <span style="color: red;">*</span></label>
                <input type="text" name="objet" class="form-control" id="inputPassword4">
            </div>
            <div class="col-4">
                <label for="inputState" class="form-label fs-4">Type</label>
                <select id="inputState" name="type" class="form-select">
                <option value="invitation">Invitation</option>
                <option value="rendez-vous">Rendez-vous</option>
                </select>
            </div>
            <div class="col-md-4">
            <label for="inputCity" class="form-label fs-4">Date</label>
            <input type="date" name="delai" class="form-control" id="inputCity">
            </div>
            <div class="col-6">
            <label for="inputAddress" class="form-label fs-4">Corps <span style="color: red;">*</span></label>
            <textarea name="corps" id="" cols="30" rows="10" class="form-control" id="inputPassword4"></textarea>
            <!--input type="text" name="corps" class="form-control" id="inputAddress"-->
            </div>
        
        
            <div class="col-12 justify-content-end">
            <button type="submit" name="ajouter" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
</body>
</html>