<?php
    
    $leMembre = null; 

    if (isset($_GET['action']) && ($_GET['idmembre'])){
        $idmembre = $_GET['idmembre'];
        $action = $_GET['action'];
        switch ($action) {
            case 'sup';
                    $leMembre = $unControleur->deleteMembre($idmembre);
            break;
            
            case 'edit'; 
                    $leMembre = $unControleur->selectWhereMembre ($idmembre); 
                    
            break; 
        }
    }

    require_once ("vue/vue_insert_membre.php");

    if (isset($_POST['valider'])){
        
        $unControleur->insertMembre ($_POST);
    }
    if (isset($_POST['modifier'])){
       
        $unControleur->updateMembre ($_POST);
        header("Location: index.php?page=1");
        
    }
    //affichage des membres
    $lesMembres = $unControleur->selectAllMembres (); 
    require_once ("vue/vue_SelectAll_membres.php");
?>