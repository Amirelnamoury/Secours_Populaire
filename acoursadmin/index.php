<?php
    session_start(); 
    require_once("controleur/controleur.class.php");
    //instancier le controleur
    $unControleur = new Controleur ();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestion du secours populaire </title>
    <link rel="stylesheet" type="text/css" href="gest.css">
</head>
<body>
    <center>
            <h1>Administration</h1>
            <?php
            if ( ! isset($_SESSION['email']))
            {
                require_once("vue/vue_connexion.php");
            }
            if (isset ($_POST['seconnecter']))
            {
                $unUser = $unControleur->selectWhereUser($_POST);
                if ($unUser ==null || $unUser == false){
                    echo "<br/>Veuillez vérifier vos identfiants";
                }else {
                    $_SESSION['email'] = $unUser ['email'];
                    $_SESSION['droits'] = $unUser ['droits'];
                    header("Location: index.php");
                } 
            }
            if (isset($_SESSION['email']) && ($_SESSION['droits']=='user'))
                {
                require_once("vue/vue_connexion.php");
                }
            if (isset($_SESSION['email']) && ($_SESSION['droits']=='admin'))
                   
             { 
                    echo '
                        <a href="index.php?page=0"> <img src="images/home.png" height="100" width ="100"></a>
                        <a href="index.php?page=1"> <img src="images/membre.jpg" height="100" width ="100"></a>
                        <a href="index.php?page=2"> <img src="images/projet.png" height="100" width ="100"></a>
                        <a href="index.php?page=3"> <img src="images/don.png" height="100" width ="100"></a>
                        <a href="index.php?page=4"> <img src="images/commentaire.png" height="100" width ="100"></a>
                        <a href="index.php?page=5"> Déconnexion </a>
                        <br/><br/> ';

                    
                        if (isset($_GET['page'])) $page = $_GET['page'];
                        else $page = 0;
                        switch($page)
                        {
                            case 0 : require_once ("home.php"); break;
                            case 1 : require_once ("gestion_membres.php"); break;
                            case 2 : require_once ("gestion_projets.php"); break;
                            case 3 : require_once ("gestion_dons.php"); break;
                            case 4 : require_once ("gestion_commentaires.php"); break;
                            case 5 : session_destroy();
                                     header("Location: index.php");
                                     break; 
                        }
                        
             } 
            
            ?>
    </center>
</body>
</html>