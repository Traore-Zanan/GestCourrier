<?php
    session_start();

    include "../dataBase/connectdb.php";
    
    if(isset($_SESSION["erreur"])){unset($_SESSION['erreur']);}
    if(isset($_SESSION["msg1"])){unset($_SESSION['msg1']);}
    if(isset($_SESSION["msg2"])){unset($_SESSION['msg2']);}

    if (isset($_POST['ajouter'])) {
        if (!isset($_POST['titre']) && !isset($_POST['contenue'])) { 

            $_SESSION['erreur'] = "Veuillez renseigner tous les champs requis";
            header("location: ../ajouterPa.php");
            exit();

        } else {
            extract($_POST);
            
            $dossier = $_SESSION['dossier'];
            
          
            $req2 = "INSERT INTO $dossier(titre, contenue) VALUES('$titre', '$contenue')";
            $ret = $idcnx->exec($req2);
           

            if ($ret){
                $_SESSION["msg1"] = "hkd";
                header("location: ../ajouterSPa.php");
            } else {
                $_SESSION["msg2"] = "hkd";
                header("location: ../ajouterSPa.php");
            }
        }
    }
?>