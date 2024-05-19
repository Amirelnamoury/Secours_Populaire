<?php
class Modele {
    private $unPdo ; 

    public function __construct ()
    {
        $this->unPdo = null;
        //connexion à la base de données en utilisant PDO (php data objet)
        try {
            $this->unPdo = new Pdo ("mysql:host=localhost;dbname=secours","root","");
            // root pour les mac
        }
        catch(PDOException $exp){
            echo "<br/> Erreur de la connexion à la base de données !";
        }
    }
    /*************************************** Gestion Membres ***************************************************** */
    public function selectAllMembres ()
    {

        if($this->unPdo != null){
        //extraction des données membres
        $requete=" select * from membre ; " ;
        //preparation de la requete avant exécution
        $select = $this->unPdo->prepare ($requete);
        //execution de la requete
        $select->execute ();
        //extraction des donnees fetch
        $lesMembres =$select->fetchAll ();
        return $lesMembres; 
        }
        else {
            return null;
        }
    }
    public function insertMembre ($tab)
    {
        if($this->unPdo != null){

            $requete =" insert into membre values (null, :nom, :prenom, :adresse, :tel, :email, :mdp) ; " ;
            $donnees =array (":nom"=>$tab['nom'], ":prenom"=>$tab['prenom'], ":adresse"=>$tab['adresse'], 
            ":tel"=>$tab['tel'], ":email"=>$tab['email'], ":mdp"=>$tab['mdp']);
            //preparation de la requete avant execution

            $insert = $this->unPdo->prepare ($requete);
            //execution de la requete
            $insert->execute ($donnees);

        }
        else {
            return null;
        }
    }
    public function deleteMembre ($idmembre)
    {
        if ($this->unPdo != null){

            $requete ="delete from membre where idmembre = :idmembre; " ;
            $donnees =array (":idmembre"=>$idmembre);
            //preparation de la requete avant execution
            
            $delete= $this->unPdo->prepare ($requete);
            //execution de la requete
            $delete->execute ($donnees);
        }
        else {
            return null;
        }
    }
    public function selectWhereMembre ($idmembre)
    {
        if ($this->unPdo != null){

            $requete =" select * from membre where idmembre = :idmembre ; " ;
            $donnees =array(":idmembre"=>$idmembre);
            //preparation de la requete avant execution

            $select=$this->unPdo->prepare ($requete);
            //execution de la requete
            $select->execute ($donnees);
            //extraction des donnees fetch
            $unMembre =$select->fetch (); // un seul, resultat
            return $unMembre;
        }
        else {
            return null;
        }
    }
    public function updateMembre ($tab)
    {
        if ($this->unPdo != null){

            $requete =" update membre set nom= :nom, prenom= :prenom, adresse= :adresse, tel= :tel, 
            email= :email, mdp= :mdp where idmembre= :idmembre;"; 
            $donnees =array (":nom"=>$tab['nom'], ":prenom"=>$tab['prenom'], ":adresse"=>$tab['adresse'], 
            ":tel"=>$tab['tel'], ":email"=>$tab['email'], ":mdp"=>$tab['mdp'], ":idmembre"=>$tab['idmembre']);
            $update = $this->unPdo->prepare ($requete);
            //execution de la requete
            $update->execute ($donnees);
        }
        else {
            return null;
        }
    }
    /*******************************************gestion user**************************************/
    public function selectWhereUser($tab)
    {
        if ($this->unPdo != null){
            //extraction des donnees membres
            $requete="select * from user where email = :email and mdp = :mdp ;" ;
            $donnees=array(":email"=>$tab['email'],":mdp"=>$tab['mdp']);
            //preparation de la requete avant execution
            $select =$this->unPdo->prepare ($requete);
            //execution de la requete
            $select->execute ($donnees);
            //extraction des donnees fetch
            $unUser =$select->fetch (); // un seul, resultat
            return $unUser;
        }
        else {
            return null;
        }
    }

    /*************************************** Gestion Projets ***************************************************** */
    public function selectAllProjets ()
    {

        if($this->unPdo != null){
        //extraction des données projets
        $requete=" select * from projet ; " ;
        //preparation de la requete avant exécution
        $select = $this->unPdo->prepare ($requete);
        //execution de la requete
        $select->execute ();
        //extraction des donnees fetch
        $lesProjets =$select->fetchAll ();
        return $lesProjets; 
        }
        else {
            return null;
        }
    }
    public function insertProjet ($tab)
    {
        if($this->unPdo != null){

            $requete =" insert into projet values (null, :description, :datelancement, :pays, :ville, :budget, :sommecollectee) ; " ;
            $donnees =array (":description"=>$tab['description'], ":datelancement"=>$tab['datelancement'], ":pays"=>$tab['pays'], 
            ":ville"=>$tab['ville'], ":budget"=>$tab['budget'], ":sommecollectee"=>$tab['sommecollectee']);
            //preparation de la requete avant execution

            $insert = $this->unPdo->prepare ($requete);
            //execution de la requete
            $insert->execute ($donnees);

        }
        else {
            return null;
        }
    }
    public function deleteProjet ($idprojet)
    {
        if ($this->unPdo != null){

            $requete ="delete from projet where idprojet = :idprojet; " ;
            $donnees =array (":idprojet"=>$idprojet);
            //preparation de la requete avant execution
            
            $delete= $this->unPdo->prepare ($requete);
            //execution de la requete
            $delete->execute ($donnees);
        }
        else {
            return null;
        }
    }
    public function selectWhereProjet ($idprojet)
    {
        if ($this->unPdo != null){

            $requete =" select * from projet where idprojet = :idprojet ; " ;
            $donnees =array(":idprojet"=>$idprojet);
            //preparation de la requete avant execution

            $select=$this->unPdo->prepare ($requete);
            //execution de la requete
            $select->execute ($donnees);
            //extraction des donnees fetch
            $unProjet =$select->fetch (); // un seul, resultat
            return $unProjet;
        }
        else {
            return null;
        }
    }
    public function updateProjet ($tab)
    {
        if ($this->unPdo != null){

            $requete =" update projet set description= :description, datelancement= :datelancement, pays= :pays, ville= :ville, 
            budget= :budget, sommecollectee= :sommecollectee where idprojet= :idprojet;"; 
            $donnees =array (":description"=>$tab['description'], ":datelancement"=>$tab['datelancement'], ":pays"=>$tab['pays'], 
            ":ville"=>$tab['ville'], ":budget"=>$tab['budget'], ":sommecollectee"=>$tab['sommecollectee'], ":idprojet"=>$tab['idprojet']);
            $update = $this->unPdo->prepare ($requete);
            //execution de la requete
            $update->execute ($donnees);
        }
        else {
            return null;
        }
    }
    
    
    /*************************************** Gestion Don ***************************************************** */
    public function selectAllDons ()
    {

        if($this->unPdo != null){
        //extraction des données commentaires
        $requete=" select * from don ; " ;
        //preparation de la requete avant exécution
        $select = $this->unPdo->prepare ($requete);
        //execution de la requete
        $select->execute ();
        //extraction des donnees fetch
        $lesDons =$select->fetchAll ();
        return $lesDons; 
        }
        else {
            return null;
        }
    }
    public function insertDon ($tab)
    {
        if($this->unPdo != null){

            $requete =" insert into don values (null, :date, :somme, :appreciation,1,1) ; " ;
            $donnees =array (":date"=>$tab['date'],":somme"=>$tab['somme'], ":appreciation"=>$tab['appreciation'],);
            //preparation de la requete avant execution

            $insert = $this->unPdo->prepare ($requete);
            //execution de la requete
            $insert->execute ($donnees);

        }
        else {
            return null;
        }
    }
    public function deleteDon ($iddon)
    {
        if ($this->unPdo != null){

            $requete ="delete from don where iddon = :iddon; " ;
            $donnees =array (":iddon"=>$iddon);
            //preparation de la requete avant execution
            
            $delete= $this->unPdo->prepare ($requete);
            //execution de la requete
            $delete->execute ($donnees);
        }
        else {
            return null;
        }
    }
    public function selectWhereDon ($iddon)
    {
        if ($this->unPdo != null){

            $requete =" select * from don where iddon = :iddon ; " ;
            $donnees =array(":iddon"=>$iddon);
            //preparation de la requete avant execution

            $select=$this->unPdo->prepare ($requete);
            //execution de la requete
            $select->execute ($donnees);
            //extraction des donnees fetch
            $unDon =$select->fetch (); // un seul, resultat
            return $unDon;
        }
        else {
            return null;
        }
    }
    public function updateDon ($tab)
    {
        if ($this->unPdo != null){

            $requete =" update don set date= :date,somme= :somme, appreciation= :appreciation, where iddon= :iddon;"; 
            $donnees =array (":date"=>$tab['date'], ":somme"=>$tab['somme'], ":appreciation"=>$tab['appreciation'], ":iddon"=>$tab['iddon']);
            $update = $this->unPdo->prepare ($requete);
            //execution de la requete
            $update->execute ($donnees);
        }
        else {
            return null;
        }
    }

    /*************************************** Gestion Commentaires ***************************************************** */
    
    public function selectAllCommentaires ()
    {

        if($this->unPdo != null){
        //extraction des données commentaires
        $requete=" select * from commentaire ; " ;
        //preparation de la requete avant exécution
        $select = $this->unPdo->prepare ($requete);
        //execution de la requete
        $select->execute ();
        //extraction des donnees fetch
        $lesCommentaires =$select->fetchAll ();
        return $lesCommentaires; 
        }
        else {
            return null;
        }
    }
    public function insertCommentaire ($tab)
    {
        if($this->unPdo != null){

            $requete =" insert into commentaire values (null, :datecomment, :contenu, :note) ; " ;
            $donnees =array (":datecomment"=>$tab['datecomment'], ":contenu"=>$tab['contenu'], ":note"=>$tab['note']);
            //preparation de la requete avant execution

            $insert = $this->unPdo->prepare ($requete);
            //execution de la requete
            $insert->execute ($donnees);

        }
        else {
            return null;
        }
    }
    public function deleteCommentaire ($idcomment)
    {
        if ($this->unPdo != null){

            $requete ="delete from commentaire where idcomment = :idcomment; " ;
            $donnees =array (":idcomment"=>$idcomment);
            //preparation de la requete avant execution
            
            $delete= $this->unPdo->prepare ($requete);
            //execution de la requete
            $delete->execute ($donnees);
        }
        else {
            return null;
        }
    }
    public function selectWhereCommentaire ($idcomment)
    {
        if ($this->unPdo != null){

            $requete =" select * from commentaire where idcomment = :idcomment ; " ;
            $donnees =array(":idcomment"=>$idcomment);
            //preparation de la requete avant execution

            $select=$this->unPdo->prepare ($requete);
            //execution de la requete
            $select->execute ($donnees);
            //extraction des donnees fetch
            $unCommentaire =$select->fetch (); // un seul, resultat
            return $unCommentaire;
        }
        else {
            return null;
        }
    }
    public function updateCommentaire ($tab)
    {
        if ($this->unPdo != null){

            $requete =" update commentaire set datecomment= :datecomment, contenu= :contenu, note= :note, idcomment= :idcomment;"; 
            $donnees =array (":datecomment"=>$tab['datecomment'], ":contenu"=>$tab['contenu'], ":note"=>$tab['note'], ":idcomment"=>$tab['idcomment']);
            $update = $this->unPdo->prepare ($requete);
            //execution de la requete
            $update->execute ($donnees);
        }
        else {
            return null;
        }
    }
    

        
}
?>

    
