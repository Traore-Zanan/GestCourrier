
<table class="table table-hover table-striped" style="overflow-x: auto;" >
            <thead>
            <tr>
                <th scope="col">N</th>
                <th scope="col">Expéditeur</th>
                <th scope="col">Destinataire</th>
                <th scope="col">Envoyé le</th>
                <th scope="col">Objet</th>
                <th scope="col">Corps</th>
                <th scope="col">Type</th>
                <!--th scope="col">Delai</th-->
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
        <?php 
          
           $sql="SELECT * FROM courriers WHERE Nature = 'sortant'";
           $result=$idcnx-> query($sql);
           $count=1;
           if ($result-> rowCount() > 0){
               while ($row=$result-> fetch(PDO::FETCH_ASSOC)) {

                /*
                $dateDonnee = new DateTime($row["delai"]);
                $dateActuelle = new DateTime();

                $diff = $dateActuelle->diff($dateDonnee);
                $delai = $diff->format('%a jours');
                */
                //echo $diff->format('%a jours'); // Affiche le nombre de jours de différence
         
        ?>
        
            <tr>
                <td style="font-size: 16px"><?=$count?></td> 
                <td style="font-size: 16px"><?=$row["Expediteur"]?></td>
                <td style="font-size: 16px"><?=$row["Destinataire"]?></td>      
                <td style="font-size: 16px"><?=$row["DateEnvoie"]?></td> 
                <td style="font-size: 16px"><?=$row["Objet"]?></td>     
                <td style="font-size: 16px">
                    <div id="corps" hidden><?=$row["Corps"]?></div>
                    <a href="#" id="monLien" onclick="afficherPopup()">Mon lien</a>
                </td>  
                <td style="font-size: 16px"><?=$row["Type"]?></td> 
                <td style="font-size: 16px">
                    <a href="modifierS.php?id=<?=$row["id"]?>">
                        <button class="btn btn-primary" style="height:40px">Modifier</button>
                    </a>
                    <a href="controller/suprimer.php?id=<?=$row["id"]?>">
                        <button class="btn btn-danger" style="height:40px">suprimer</button>
                    </a>
                </td>     
            </tr>
        <?php
                $count=$count+1;
            }
            }
        ?>
        </tbody>
    </table>
    
