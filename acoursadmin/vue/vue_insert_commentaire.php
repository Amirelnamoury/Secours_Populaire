<link rel="stylesheet" type="text/css" href="gest.css">
<?php echo ($leCommentaire!=null)? "<h2> Mise à jour d'un Commentaire </h2>" : "<h2> Ajout d'un nouveau Commentaire </h2>"; ?>
<form method="post" action="">
    <table>
        <tr>
            <td> Date du Commentaire</td>
            <td> <input type="date" name ="datecomment" value="<?php echo ($leCommentaire !=null)? $leCommentaire['datecomment']:""?>" > </td>
        </tr>
        <tr> 
            <td> Contenu du Commentaire </td>
            <td> <input type="text" name ="contenu" value="<?php echo ($leCommentaire !=null)? $leCommentaire['contenu']:""?>" > </td>
        </tr>
        <tr>
            <td> Note Commentaire </td>
            <td> <input type="text" name ="note" value="<?php echo ($leCommentaire !=null)? $leCommentaire['note']:""?>" > </td>
        </tr>
        
        <tr>
            <td> <input type="reset" name ="annuler" value="Annuler"> </td>
            <td> <input type="submit"
                <?php echo ($leCommentaire!=null)? 'name="modifier" value="Modifier"': 'name="valider" value="Valider"'; ?>
                > </td>
        </tr>
        <?php echo ($leCommentaire!=null) ? "<input type ='hidden' name ='idcomment' value ='".$leCommentaire['idcomment']."'>" : ""; ?>
    </table>
</form>
