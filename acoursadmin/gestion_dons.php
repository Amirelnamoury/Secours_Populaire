<?php
    
    $leDon = null; 

    if (isset($_GET['action']) && ($_GET['iddon'])){
        $iddon = $_GET['iddon'];
        $action = $_GET['action'];
        switch ($action) {
            case 'sup';
                    $leDon = $unControleur->deleteDon($iddon);
            break;
            
            case 'edit'; 
                    $leDon = $unControleur->selectWhereDon ($iddon); 
                    
            break; 
        }
    }

    require_once ("vue/vue_insert_don.php");

    if (isset($_POST['valider'])){
        
        $unControleur->insertDon ($_POST);
    }
    if (isset($_POST['modifier'])){
       
        $unControleur->updateDon ($_POST);
        header("Location: index.php?page=3");
        
    }
    //affichage des dons
    $lesDons = $unControleur->selectAllDons (); 
    require_once ("vue/vue_SelectAll_dons.php");
?>