<link rel="stylesheet" type="text/css" href="gest.css">
<?php echo ($leMembre!=null)? "<h2> Mise à jour d'un membre </h2>" : "<h2> Ajout d'un nouveau membre </h2>"; ?>
<form method="post" action="">
    <table>
        <tr>
            <td>Nom du membre</td>
            <td> <input type="text" name ="nom" value="<?php echo ($leMembre !=null)? $leMembre['nom']:""?>" > </td>
        </tr>
        <tr> 
            <td> Prenom du membre </td>
            <td> <input type="text" name ="prenom" value="<?php echo ($leMembre !=null)? $leMembre['prenom']:""?>" > </td>
        </tr>
        <tr>
            <td> Adresse du membre </td>
            <td> <input type="text" name ="adresse" value="<?php echo ($leMembre !=null)? $leMembre['adresse']:""?>" > </td>
        </tr>
        <tr>
            <td> Telephone du membre</td>
            <td> <input type="text" name ="tel" value="<?php echo ($leMembre !=null)? $leMembre['tel']:""?>" > </td>
        </tr>
        <tr>
            <td> Email du membre</td>
            <td> <input type="text" name ="email" value="<?php echo ($leMembre !=null)? $leMembre['email']:""?>" > </td>
        </tr>
        <tr>
            <td> MDP du membre</td>
            <td> <input type="text" name ="mdp" value="<?php echo ($leMembre !=null)? $leMembre['mdp']:""?>" > </td>
        </tr>
        
        <tr>
            <td> <input type="reset" name ="annuler" value="Annuler"> </td>
            <td> <input type="submit"
                <?php echo ($leMembre!=null)? 'name="modifier" value="Modifier"': 'name="valider" value="Valider"'; ?>
                > </td>
        </tr>
        <?php echo ($leMembre!=null) ? "<input type ='hidden' name ='idmembre' value ='".$leMembre['idmembre']."'>" : ""; ?>
    </table>
</form>
