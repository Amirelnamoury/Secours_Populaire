<?php
    
    $leProjet = null; 

    if (isset($_GET['action']) && ($_GET['idprojet'])){
        $idprojet = $_GET['idprojet'];
        $action = $_GET['action'];
        switch ($action) {
            case 'sup';
                    $leProjet = $unControleur->deleteProjet($idprojet);
            break;
            
            case 'edit'; 
                    $leProjet = $unControleur->selectWhereProjet ($idprojet); 
                    
            break; 
        }
    }

    require_once ("vue/vue_insert_projet.php");

    if (isset($_POST['valider'])){
        
        $unControleur->insertProjet ($_POST);
    }
    if (isset($_POST['modifier'])){
       
        $unControleur->updateProjet ($_POST);
        header("Location: index.php?page=2");
        
    }
    //affichage des projets
    $lesProjets = $unControleur->selectAllProjets (); 
    require_once ("vue/vue_SelectAll_projets.php");
?>