<?php
    
    $leCommentaire = null; 

    if (isset($_GET['action']) && ($_GET['idcomment'])){
        $idcomment = $_GET['idcomment'];
        $action = $_GET['action'];
        switch ($action) {
            case 'sup';
                    $leCommentaire = $unControleur->deleteCommentaire($idcomment);
            break;
            
            case 'edit'; 
                    $leCommentaire = $unControleur->selectWhereCommentaire ($idcomment); 
                    
            break; 
        }
    }

    require_once ("vue/vue_insert_commentaire.php");

    if (isset($_POST['valider'])){
        
        $unControleur->insertCommentaire ($_POST);
    }
    if (isset($_POST['modifier'])){
       
        $unControleur->updateCommentaire ($_POST);
        header("Location: index.php?page=4");
        
    }
    //affichage des commentaires
    $lesCommentaires = $unControleur->selectAllCommentaires (); 
    require_once ("vue/vue_SelectAll_commentaires.php");
?>