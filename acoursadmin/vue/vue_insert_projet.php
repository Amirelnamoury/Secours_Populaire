<link rel="stylesheet" type="text/css" href="gest.css">
<?php echo ($leProjet!=null)? "<h2> Mise à jour d'un projet </h2>" : "<h2> Ajout d'un nouveau projet </h2>"; ?>
<form method="post" action="">
    <table>
        <tr>
            <td> Description du projet </td>
            <td> <input type="text" name ="description" value="<?php echo ($leProjet !=null)? $leProjet['description']:""?>" > </td>
        </tr>
        <tr> 
            <td> Date lancement  </td>
            <td> <input type="date" name ="datelancement" value="<?php echo ($leProjet !=null)? $leProjet['datelancement']:""?>" > </td>
        </tr>
        <tr>
            <td> Pays du projet </td>
            <td> <input type="text" name ="pays" value="<?php echo ($leProjet !=null)? $leProjet['pays']:""?>" > </td>
        </tr>
        <tr>
            <td> Ville du projet </td>
            <td> <input type="text" name ="ville" value="<?php echo ($leProjet !=null)? $leProjet['ville']:""?>" > </td>
        </tr>
        <tr>
            <td> Budget du projet </td>
            <td> <input type="text" name ="budget" value="<?php echo ($leProjet !=null)? $leProjet['budget']:""?>" > </td>
        </tr>
        <tr>
            <td> Somme collectée du projet</td>
            <td> <input type="text" name ="sommecollectee" value="<?php echo ($leProjet !=null)? $leProjet['sommecollectee']:""?>" > </td>
        </tr>
        
        <tr>
            <td> <input type="reset" name ="annuler" value="Annuler"> </td>
            <td> <input type="submit"
                <?php echo ($leProjet!=null)? 'name="modifier" value="Modifier"': 'name="valider" value="Valider"'; ?>
                > </td>
        </tr>
        <?php echo ($leProjet!=null) ? "<input type ='hidden' name ='idprojet' value ='".$leProjet['idprojet']."'>" : ""; ?>
    </table>
</form>
