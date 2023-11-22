<?php 
$precedent = $_SERVER['HTTP_REFERER'];
    if(isset($_GET['id'])){
        include "../dataBase/connectdb.php";       
        $id = $_GET['id'];
        $resq1 = "DELETE FROM courriers WHERE id = '$id'";
        $rest = $idcnx->exec($resq1);
        if($rest){
            if($precedent == "http://localhost/GestCourrier/courrierE.php"){
                header("location: ../courrierE.php");
            }
            else{header("location: ../courrierS.php");}
        } 
    }
?>