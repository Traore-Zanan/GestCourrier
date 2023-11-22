
<?php
    $precedent = $_SERVER['HTTP_REFERER'];

    include "../dataBase/connectdb.php";
    
    session_start();
    if(isset($_SESSION["erreur"])){unset($_SESSION['erreur']);}
    if(isset($_SESSION["msg1"])){unset($_SESSION['msg1']);}
    if(isset($_SESSION["msg2"])){unset($_SESSION['msg2']);}
    

    if (isset($_POST['ajouter'])) {
       
        if($precedent == "http://localhost/GestCourrier/ajouterS.php"){

            if (empty($_POST['expediteur']) || empty($_POST['destinataire']) || empty($_POST['date']) || empty($_POST['objet']) || empty($_POST['corps'])) { 
                $_SESSION['erreur'] = "Veillez renseigner touts les champs requis";
                    header("location: ../ajouterS.php");
                    exit();
                }
                
                
            

            extract($_POST);

            $exp = addslashes($expediteur);
            $des = addslashes($destinataire);
            $ob = addslashes($objet);
            $corps = addslashes($corps); 
            $type = addslashes($type);

            $resq1 = "INSERT INTO courriers (Expediteur, Destinataire, DateEnvoie, Objet, Corps, Type, delai, Nature) VALUES ('$exp', '$des', '$date', '$ob', '$corps', '$type', '$delai', 'sortant')";
            $rest = $idcnx->exec($resq1); 
            if($rest){
                $_SESSION['msg1'] = "Courrier enregistré avec succès !";
                    header("location: ../ajouterS.php");
            }
            else{
                $_SESSION['msg2'] = "Enregistrement echoué!"; 
                    header("location: ../ajouterS.php");
            }
        }
        else{
            
            if (empty($_POST['expediteur']) || empty($_POST['destinataire']) || empty($_POST['date']) || empty($_POST['objet']) || empty($_POST['corps'])) { 
                $_SESSION['erreur'] = "Veillez renseigner touts les champs requis";
                    header("location: ../modifier.php");
                    exit();
                }
                
                
            extract($_POST);

            $exp = addslashes($expediteur);
            $des = addslashes($destinataire);
            $ob = addslashes($objet);
            $corps = addslashes($corps); 
            $type = addslashes($type);
            $id = $_SESSION['id'];

            
            $resq1 = "INSERT INTO courriers (Expediteur, Destinataire, DateEnvoie, Objet, Corps, Type, Nature) VALUES ('$exp', '$des', '$date', '$ob', '$corps', '$type', 'sortant')";
            $rest = $idcnx->exec($resq1); 
            if($rest){
                echo 'fbkrr';
                $resq1 = "DELETE FROM courriers WHERE id = '$id'";
                $rest = $idcnx->exec($resq1);
                $_SESSION['msg1'] = "Courrier modifié avec succès !";
                    header("location: ../modifier.php");
                }
            
            else{
                $_SESSION['msg2'] = "Modification echoué!"; 
                    header("location: ../modifier.php");
            }
        }        
    }   
    
?>
       