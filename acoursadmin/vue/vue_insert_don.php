<link rel="stylesheet" type="text/css" href="gest.css">
<?php echo ($leDon!=null)? "<h2> Mise à jour d'un Don </h2>" : "<h2> Ajout d'un nouveau Don </h2>"; ?>
<form method="post" action="">
    <table>
        <tr>
            <td> date du don </td>
            <td> <input type="date" name ="date" value="<?php echo ($leDon !=null)? $leDon['date']:""?>" > </td>
        </tr>
        <tr>
            <td> Somme du don </td>
            <td> <input type="text" name ="somme" value="<?php echo ($leDon !=null)? $leDon['somme']:""?>" > </td>
        </tr>
        <tr> 
            <td> Contenu du Commentaire </td>
            <td> <input type="text" name ="appreciation" value="<?php echo ($leDon !=null)? $leDon['appreciation']:""?>" > </td>
        </tr>
        
        <tr>
            <td> <input type="reset" name ="annuler" value="Annuler"> </td>
            <td> <input type="submit"
                <?php echo ($leDon!=null)? 'name="modifier" value="Modifier"': 'name="valider" value="Valider"'; ?>
                > </td>
        </tr>
        <?php echo ($leDon!=null) ? "<input type ='hidden' name ='iddon' value ='".$leDon['iddon']."'>" : ""; ?>
    </table>
</form>
