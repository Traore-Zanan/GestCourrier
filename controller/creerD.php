<?php
    session_start();
    include "../dataBase/connectdb.php";
        
    if(isset($_SESSION["erreur"])){unset($_SESSION['erreur']);}
    if(isset($_SESSION["msg1"])){unset($_SESSION['msg1']);}
    if(isset($_SESSION["msg2"])){unset($_SESSION['msg2']);}

    if (isset($_POST['ajouter'])) {
        if (!isset($_POST['doss'])) { 
            $_SESSION['erreur'] = "Veuillez renseigner tous les champs requis";
            header("location: ../ajouterPa.php");
        } else {
            extract($_POST);
            $dossier = $doss;

            // Utilisation d'une requête préparée pour la création de table
            $req1 = "CREATE TABLE IF NOT EXISTS $dossier(id INT PRIMARY KEY AUTO_INCREMENT, titre VARCHAR(50), contenue TEXT)";
            $stmt1 = $idcnx->prepare($req1);
            $stmt1->execute();

            // Correction de la requête d'insertion dans la table "paragraphe"
            $req2 = "INSERT INTO paragraphe(personalite) VALUES(:dossier)";
            $stmt2 = $idcnx->prepare($req2);
            $stmt2->bindParam(':dossier', $dossier);
            $stmt2->execute();

            if (isset($_POST['titre']) && isset($_POST['contenue'])){
                // Utilisation d'une requête préparée pour l'insertion de données
                $req3 = "INSERT INTO $dossier(titre, contenue) VALUES(:titre, :contenue)";
                $stmt3 = $idcnx->prepare($req3);
                $stmt3->bindParam(':titre', $titre);
                $stmt3->bindParam(':contenue', $contenue);
                $stmt3->execute();

                header("location: ../ajouterPa.php");
            } else {
                header("location: ../ajouterPa.php");
            }
        }
    }
?>