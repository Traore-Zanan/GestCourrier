<?php 
    session_start();     
    include "./dataBase/connectdb.php";
    $precedent = $_SERVER['HTTP_REFERER'];
    if($precedent == "http://localhost/GestCourrier/paragraphe.php"){$afficher = "oui";}

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

    <nav class="navbar navbar-expand-lg rounded" style="background-color: #264F6E;">
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

    <div class="container justify-content-center  py-5" style="background-color: whitesmoke;">
        <h4 class="align-items-center justify-content-center p-5">Créer un dossier
        </h4>
        <?php /*
            
            $directory = './paragraphe';

            // Get the list of files and directories in the specified directory
            $contents = scandir($directory);
            
            // Loop through the contents and display them
            foreach ($contents as $item) {
                echo $item . "<br>";
            }*/
        ?>
        
        <form class="row g-3" action="ajouterPa.php" method="post">
        <div style='display: flex; flex-direction: row; flex-wrap: wrap;'>
        <?php 
           
           $resq = "SELECT * FROM paragraphe";
           $result=$idcnx-> query($resq);
            
            // Loop through the contents and display them
            while ($row=$result-> fetch(PDO::FETCH_ASSOC)) {
                echo "  <a href='lecture.php?dossier=".$row['personalite']."'>
                            <div  style='height: 10px; padding: 50px; border-radius: 10px; box-shadow: 6px 6px 25px rgba(0, 0, 0, 0.5); align-content: space-around;'>".$row['personalite']."</div> 
                        </a>
                        ";
            }
        ?> 
        </div>
            <!--div class="col-md-4">
                <a href="">
                    <label for="inputEmail4" class="form-label fs-4">DOSSIER</label>
                </a>
            </div-->
            <div class="col-12 justify-content-end">
                <a href="">
                    <button type="submit" name="ajouter" class="btn btn-primary">Ajouter un dossier</button>
                </a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
</body>
</html>