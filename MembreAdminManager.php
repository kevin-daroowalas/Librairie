<?php
//Commence la session
session_start();
//declare(strict_types=1);


class MembreAdminManager extends MembreSimpleManager
{

    //retour de l'objet de connection pdo
    private $_db;

    //definir un constructeur
    public function __construct($db)
    {
        $this->setDb($db);
    }

    //setter
    public function setDb($db1)
    {
        $this->_db=$db1;
    }

    //getter
    public function db()
    {
        return $this->_db;
    }

    

    // Sert a Ajouter des Ouvrages
    public function AjouterOuvrage( Ouvrages $ou)
    {
        $query = $this->_db->prepare("INSERT into ouvrages (Titre,Auteur,NbPages,Annee_Pub,Type,Genre,Motcles,Resume) VALUES (:Titre,:Auteur,:NbPages,:Annee_Pub,:Type,:Genre,:Motcles,:Resume)");

        $query->bindValue(":Titre,$ou->Titre()");
        $query->bindValue(":Auteur,$ou->Nom()");
        $query->bindValue(":NbPages,$ou->NbPages()");
        $query->bindValue(":Annee_Pub,$ou->Annee_Pages()");
        $query->bindValue(":Type,$ou->Type()");
        $query->bindValue(":Genre,$ou->Genre()");
        $query->bindValue(":Motcles,$ou->Motcles()");
        $query->bindValue(":Resume,$ou->Resume()");
        $query->execute();
    }

    //Updates les ouvrages
    public function UpdateOuvrage(Ouvrages $ou)
    {
        $t = $ou->Titre();
        $query=$this->_db->prepare("UPDATE ouvrages SET Titre= :Titre,Auteur = :Auteur,NbPages = :NbPages,Annee_Pub = :Annee_Pub,Type = :Type,Genre = :Genre,Motcles = :Motcles,Resume = :Resume WHERE Titre = ".$t.")");
        $query->bindValue(":Titre,$ou->Titre()");
        $query->bindValue(":Auteur,$ou->Nom()");
        $query->bindValue(":NbPages,$ou->NbPages()");
        $query->bindValue(":Annee_Pub,$ou->Annee_Pages()");
        $query->bindValue(":Type,$ou->Type()");
        $query->bindValue(":Genre,$ou->Genre()");
        $query->bindValue(":Motcles,$ou->Motcles()");
        $query->bindValue(":Resume,$ou->Resume()");
        $query->execute();
    }

    
    public function UpdateAnyMemberInfo( Membres $m)
    {
       $id_m = $m->RefMembre();
       $query=$this->_db->prepare("UPDATE utilisateurs SET Prenom = :Prenom,Nom = :Nom,MembreType = :MembreType,Adresse = :Adresse,Courriel = :Courriel,AnneeNaissance = :AnneeNaissance WHERE RefMembre = ".$id_m.")");
       $query->bindValue(":Prenom,$m->Prenom()");
        $query->bindValue(":Nom,$m->Nom()");
        $query->bindValue(":MembreType,$m->MembreType()");
        $query->bindValue(":Adresse,$m->Adresse()");
        $query->bindValue(":Courriel,$m->Courriel()");
        $query->bindValue(":AnneeNaissance,$m->AnneNaissance()");
   
        $query->execute();
    }

}
ge
