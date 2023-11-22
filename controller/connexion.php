
<?php
    include "../dataBase/connectdb.php";
    
    session_start();
    if(isset($_SESSION["erreur"])){unset($_SESSION['erreur']);}
    if(isset($_SESSION["inconnu"])){unset($_SESSION['inconnu']);}

    if (isset($_POST['connecte'])) {
        if (!isset($_POST['login']) || !isset($_POST['mdp'])) { 
            $_SESSION['erreur'] = "Veillez renseigner touts les champs requis"; 

            header("location: ../login.php");
            exit();
        }
        
        $mdp = $_POST['mdp'];
        $login = $_POST['login'];

        $resq = "SELECT * FROM users WHERE login='$login' AND MDP='$mdp'";
        $result=$idcnx-> query($resq);

        if($result != null && $result->rowCount()>0){
            $resultat = $result->fetch (PDO::FETCH_ASSOC);
            $_SESSION['login'] = $login;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['nomprenom'] = $resultat['Nom']+" "+$resultat['Prenom'];
            $_SESSION['fonction'] = $resultat['Fonction'];
            if($resultat['Fonction']=='user'){
                header("location: ../index.php");
            }
            else{
                header("location: ../admin.php");
            }
        }else {
            $_SESSION['inconnu'] = "Identifiants incorrects";  
            header("location: ../login.php");
        }
    }
?>
       