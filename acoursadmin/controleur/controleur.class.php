<?php
    require_once("modele/modele.class.php");

    class Controleur {

        private $unModele ; 

        public function __construct (){
            // instancier la classe Modele 
            $this->unModele = new Modele (); //connexion BDD etablie
        }


    /***************************************  Gestion des Membres *********************************/

    //controle de l'extraction des données pour l'affichage
    public function selectAllMembres () {
            
        //extraction
        $lesMembres = $this->unModele->selectAllMembres(); 
        
        //traitement des données avant envoi à la vue
        //...
        //...
        return $lesMembres ; 
    }
    public function insertMembre ($tab){
        //controler les champs
        $this->unModele->insertMembre($tab);
    }
    public function deleteMembre ($idmembre){
        //controler les champs
        $this->unModele->deleteMembre($idmembre);
    }
    public function selectWhereMembre ($idmembre){
        return $this->unModele->selectWhereMembre ($idmembre);
    }
    public function updateMembre ($tab){
        return $this->unModele->updateMembre($tab);
    }

    /***************************************  Gestion des Projets *********************************/
    //controle de l'extraction des données pour l'affichage
    public function selectAllProjets () {
            
        //extraction de toutes les classes
        $lesProjets = $this->unModele->selectAllProjets(); 
        
        //traitement des données avant envoi à la vue
        //...
        //...
        return $lesProjets ; 
    }
    public function insertProjet ($tab){
        //controler les champs
        $this->unModele->insertProjet($tab);
    }
    public function deleteProjet ($idprojet){
        //controler les champs
        $this->unModele->deleteProjet($idprojet);
    }
    public function selectWhereProjet ($idprojet){
        return $this->unModele->selectWhereProjet ($idprojet);
    }
    public function updateProjet ($tab){
        return $this->unModele->updateProjet($tab);
    }

    /***************************************  Gestion des Dons *********************************/
    public function selectAllDons () {
            
        //extraction 
        $lesDons = $this->unModele->selectAllDons(); 
        
        //traitement des données des  avant envoi à la vue
        //...
        //...
        return $lesDons ; 
    }
    public function insertDon ($tab){
        //controler les champs
        $this->unModele->insertDon($tab);
    }
    public function deleteDon ($iddon){
        //controler les champs
        $this->unModele->deleteDon($iddon);
    }
    public function selectWhereDon ($iddon){
        return $this->unModele->selectWhereDon ($iddon);
    }
    public function updateDon ($tab){
        return $this->unModele->updateDon($tab);
    }
    /***************************************  Gestion des Commentaires *********************************/
    //controle de l'extraction des données pour l'affichage
    public function selectAllCommentaires () {
            
        //extraction 
        $lesCommentaires = $this->unModele->selectAllCommentaires(); 
        
        //traitement des données des  avant envoi à la vue
        //...
        //...
        return $lesCommentaires ; 
    }
    public function insertCommentaire ($tab){
        //controler les champs
        $this->unModele->insertCommentaire($tab);
    }
    public function deleteCommentaire ($idcomment){
        //controler les champs
        $this->unModele->deleteCommentaire($idcomment);
    }
    public function selectWhereCommentaire ($idcomment){
        return $this->unModele->selectWhereCommentaire ($idcomment);
    }
    public function updateCommentaire ($tab){
        return $this->unModele->updateCommentaire($tab);
    }
    /************************************************************************/
    public function selectWhereUser ($tab)
    {
        return $this->unModele->selectWhereUser($tab);
    }

}   
?>