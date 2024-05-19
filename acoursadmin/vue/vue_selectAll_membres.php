<link rel="stylesheet" type="text/css" href="gest.css">
    <br/>
    <h2> Liste des membres </h2> 
    <table border = 1>
            <tr> <td> Id Membre </td>
            <td> Nom </td> <td> Prenom </td>
            <td> Adresse </td> 
            <td> Telephone </td>
            <td> Email </td>
            <td> Mot de passe </td>
            <td> Actions </td>
</tr>
    <?php                        
            foreach ($lesMembres as $leMembre) {
                echo "<tr> <td> ".$leMembre['idmembre']."</td>
                           <td> ".$leMembre['nom']."</td>
                           <td> ".$leMembre['prenom']."</td>
                           <td> ".$leMembre['adresse']."</td> 
                           <td> ".$leMembre['tel']."</td>
                           <td> ".$leMembre['email']."</td>
                           <td> ".$leMembre['mdp']."</td>
                           <td>
                           <a href='index.php?page=1&action=sup&idmembre=".$leMembre['idmembre']."'>
                           <img src ='images/sup.png' height='20' width='20'> </a>
                           
                           <a href='index.php?page=1&action=edit&idmembre=".$leMembre['idmembre']."'>
                           <img src ='images/edit.png' height='20' width='20'> </a>
                           </td>
                         
                           </tr>";
            }
     ?>
    
    </table>

