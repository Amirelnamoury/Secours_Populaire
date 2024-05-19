<link rel="stylesheet" type="text/css" href="gest.css">
    <br/>
    <h2> Liste des commentaires </h2> 
    <table border = 1>
            <tr> <td> Date du commentaire </td>
            <td> Contenu </td> <td> Note </td>
            <td> Actions </td>
</tr>
    <?php                        
            foreach ($lesCommentaires as $leCommentaire) {
                echo "<tr> <td> ".$leCommentaire['datecomment']."</td>
                           <td> ".$leCommentaire['contenu']."</td>
                           <td> ".$leCommentaire['note']."</td>
                        
                           <td>
                           <a href='index.php?page=4&action=sup&idcomment=".$leCommentaire['idcomment']."'>
                           <img src ='images/sup.png' height='20' width='20'> </a>
                           
                           <a href='index.php?page=4&action=edit&idcomment=".$leCommentaire['idcomment']."'>
                           <img src ='images/edit.png' height='20' width='20'> </a>
                           </td>
                         
                           </tr>";
            }
     ?>
    
    </table>

