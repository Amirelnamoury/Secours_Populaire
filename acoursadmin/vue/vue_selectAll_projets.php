<link rel="stylesheet" type="text/css" href="gest.css">
    <br/>
    <h2> Liste des projets </h2> 
    <table border = 1>
            <tr> <td> Id Projet </td>
            <td> Description </td> <td> Date lancement </td>
            <td> Pays </td> 
            <td> Ville </td>
            <td> Budget </td>
            <td> Somme collectée </td>
            <td> Actions </td>
</tr>
    <?php                        
            foreach ($lesProjets as $leProjet) {
                echo "<tr> <td> ".$leProjet['idprojet']."</td>
                           <td> ".$leProjet['description']."</td>
                           <td> ".$leProjet['datelancement']."</td>
                           <td> ".$leProjet['pays']."</td> 
                           <td> ".$leProjet['ville']."</td>
                           <td> ".$leProjet['budget']."</td>
                           <td> ".$leProjet['sommecollectee']."</td>
                           <td>
                           <a href='index.php?page=2&action=sup&idprojet=".$leProjet['idprojet']."'>
                           <img src ='images/sup.png' height='20' width='20'> </a>
                           
                           <a href='index.php?page=2&action=edit&idprojet=".$leProjet['idprojet']."'>
                           <img src ='images/edit.png' height='20' width='20'> </a>
                           </td>
                         
                           </tr>";
            }
     ?>
    
    </table>

