<link rel="stylesheet" type="text/css" href="gest.css">
    <br/>
    <h2> Liste des dons </h2> 
    <table border = 1>
            <tr> <td> Id Don </td>
            <td> Somme </td> <td> Appreciation </td>
            <td> Actions </td> 
            
</tr>
    <?php      
        
            foreach ($lesDons as $leDon) {
                echo "<tr> <td> ".$leDon['iddon']."</td>
                           <td> ".$leDon['date']."</td>
                           <td> ".$leDon['somme']."</td>
                           <td> ".$leDon['appreciation']."</td>

                           <td>
                           <a href='index.php?page=3&action=sup&iddon=".$leDon['iddon']."'>
                           <img src ='images/sup.png' height='20' width='20'> </a>
                           
                           <a href='index.php?page=3&action=edit&iddon=".$leDon['iddon']."'>
                           <img src ='images/edit.png' height='20' width='20'> </a>
                           </td>
                         
                           </tr>";
            }
    ?>
    
    </table>

