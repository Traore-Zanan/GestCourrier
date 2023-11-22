<?php 
  session_start();  
  $precedent = $_SERVER['HTTP_REFERER'];
  if($precedent == "http://localhost/GestCourrier/courrierE.php"){$afficher = "non";}
  
    if(isset($_GET['id'])){
        include "dataBase/connectdb.php";       
        $_SESSION['id'] = $_GET['id'];
        $id = $_SESSION['id'];
        
     
        
        $sql="SELECT * FROM courriers WHERE id = '$id'";
        $result=$idcnx-> query($sql);
        $row=$result-> fetch(PDO::FETCH_ASSOC);
        $delai = $row['delai'];
        $exp = $row['Expediteur'];
        $des = $row['Destinataire'];
        $date = $row['DateEnvoie'];
        $ob = $row['Objet'];
        $corps = $row['Corps'];
        $type = $row['Type'];
    }

  
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
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Ajouter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="courrierE.php">Courriers entrant</a>
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
        <h4 class="align-items-center justify-content-center p-5">Modifier Courier</h4>
        <?php 

            if(isset($_SESSION['msg1']) && !isset($afficher)){
                echo " <div class='alert alert-success justify-content-center' role='alert' style='display: flex; text-align: center; width: 50%;'>Courrier modifié avec succès !</div>";
            }
            if(isset($_SESSION['msg2']) && !isset($afficher)){
                echo "<div class='alert alert-danger justify-content-center' role='alert' style='display: flex; text-align: center; width: 50%;'>modification echoué!</div>";
            }
            if(isset($_SESSION['erreur']) && !isset($afficher)){
                echo "<div class='alert alert-danger justify-content-center' role='alert' style='display: flex; text-align: center; width: 50%;'>Veillez renseigner touts les champs requis</div>";
            }
        ?> 
        <form class="row g-3" action="controller/ajouterE.php" method="post">
            <div class="col-md-4">
                <label for="inputEmail4" class="form-label fs-4">Expediteur <span style="color: red;">*</span></label>
                <input type="text" name="expediteur" class="form-control" id="inputEmail4" value=<?php if(isset($exp)) echo $exp; ?>>
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label fs-4">Destinataire <span style="color: red;">*</span></label>
                <input type="text" name="destinataire" class="form-control" id="inputPassword4" value=<?php if(isset($des)) echo $des; ?>>
            </div>
            <div class="col-md-4">
                <label for="inputEmail4" class="form-label fs-4">Date de reception <span style="color: red;">*</span></label>
                <input type="date" name="date" class="form-control" id="inputEmail4" value=<?php if(isset($date)) echo $date; ?>>
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label fs-4">Objet <span style="color: red;">*</span></label>
                <input type="text" name="objet" class="form-control" id="inputPassword4" value=<?php if(isset($ob)) echo $ob; ?>>
            </div>
            
            <div class="col-4">
                <div id="type" hidden><?=$type?></div>
                <label for="inputState" class="form-label fs-4">Type <span style="color: red;">*</span></label>
                <select id="inputState" name="type" class="form-select">
                    <option id="op1" value="invitation">Invitation</option>
                    <option id="op2" value="rendez-vous">Rendez-vous</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputCity" class="form-label fs-4">Date <span style="color: red;">*</span></label>
                <input type="date" name="delai" class="form-control" id="inputCity" value=<?php if(isset($delai)) echo $delai; ?>>
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label fs-4">Corps <span style="color: red;">*</span></label>
                <textarea name="corps" id="" cols="30" rows="10" class="form-control" id="inputPassword4" ><?php if(isset($corps)) echo $corps; ?></textarea>
                <!--input type="text" name="corps" class="form-control" id="inputAddress"-->
            </div>
        
        
            <div class="col-12 justify-content-end">
                <button type="submit" name="ajouter" class="btn btn-primary">Modifier</button>
            </div>
        </form>
    </div>
    <script>
        var type = document.querySelector("#type")
        if(type.innerText == "invitation"){document.querySelector("#op1").setAttribute('selected', 'true');}
        if(type.innerText == "rendez-vous"){document.querySelector("#op2").setAttribute('selected', 'true');}

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
</body>
</html>