
<?php
    $precedent = $_SERVER['HTTP_REFERER'];

    include "../dataBase/connectdb.php";
    
    session_start();
    if(isset($_SESSION["erreur"])){unset($_SESSION['erreur']);}
    if(isset($_SESSION["msg1"])){unset($_SESSION['msg1']);}
    if(isset($_SESSION["msg2"])){unset($_SESSION['msg2']);}
    

    if (isset($_POST['ajouter'])) {
       
            if (empty($_POST['nom']) || empty($_POST['pnom']) || empty($_POST['login']) || empty($_POST['mdp'])) { 
                $_SESSION['erreur'] = "Veillez renseigner touts les champs requis";
                    header("location: ../ajouterUser.php");
                    exit();
                }
            extract($_POST);

            $nom = addslashes($nom);
            $prenom = addslashes($pnom);
            $login = addslashes($login);
            $mdp = addslashes($mdp); 

            $resq1 = "INSERT INTO users (Nom, Prenom, Login, MDP, Fonction) VALUES ('$nom', '$prenom', '$login', '$mdp', 'user')";
            $rest = $idcnx->exec($resq1); 
            if($rest){
                $_SESSION['msg1'] = "Utilisateur créé avec succès !";
                    header("location: ../ajouterUser.php");
            }
            else{
                $_SESSION['msg2'] = "Creation echouée!"; 
                    header("location: ../ajouterUser.php");
            }
        }
        
     
    
?>
       