<?php

declare(strict_types=1);

// if session is not started  start session
if(!isset($_SESSION))
{
    session_start();
}

class MembreSimpleManager
{
    //retour de la connection pdo
    private $db;
    
    //constructeur
    public function __construct($db)
    {
       $this->SetDb($db);
    }

    //setter
    public function SetDb($db1)
    {
        $this->_db=$db1;
    }
    
    //getter
    
    public function db()
    {
        return $this->_db;
    }
    
    //The create user function will create simple user
    public function CreateUser(MembreSimple $ms)
    {
         $query = $this->_db->prepare("INSERT into utlisateur (RefMembre,Prenom,Nom,MembreType,Adresse,Courriel,AnneeNaissance) VALUES (:RefMembre,:Prenom,:Nom,:MembreType,:Adresse,:Courriel,:AnneeNaissance)");

        $query->bindValue(":RefMembre,$ms->RefMembre()");
        $query->bindValue(":Prenom,$ms->Prenom()");
        $query->bindValue(":Nom,$ms->Nom()");
        $query->bindValue(":MembreType,$ms->MembreType()");
        $query->bindValue(":Adresse,$ms->Adresse()");
        $query->bindValue(":Courriel,$ms->Courriel()");
        $query->bindValue(":AnneeNaissance,$ms->AnneeNaissance()");
        $query->execute();
    
    }

    // The UpdateProfile function updates the info of the present user
    public function UpdateProfileInfo(MembreSimple $ms)
    {
         $id=$ms->id();
        $query=$this->_db->prepare("UPDATE utilisateur SET RefMembre = :RefMembre,Prenom = :Prenom,Nom = :Nom,MembreType = :MembreType,Adresse = :Adresse,Courriel = :Adresse ,AnneeNaissance= :AnneeNaissance WHERE RefMembre='".$id."'");
        $query->bindValue(":RefMembre,$ms->RefMembre()");
        $query->bindValue(":Prenom,$ms->Prenom()");
        $query->bindValue(":Nom,$ms->Nom()");
        $query->bindValue(":MembreType,$ms->MembreType()");
        $query->bindValue(":Adresse,$ms->Adresse()");
        $query->bindValue(":Courriel,$ms->Courriel()");
        $query->bindValue(":AnneeNaissance,$ms->AnneeNaissance()");
        $query->execute();
    }

}
