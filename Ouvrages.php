<?php

declare(strict_types=1);


class Ouvrages implements Hydratation
{

    private  $Titre;

    private  $Auteur;

    private  $NbPages;

    private  $Annee_pub;

    private  $Type;

    private  $Genre;

    private  $Motcles;

    private  $Resume;

    public  $Prix;

    public  $Commentaire;
//
//Constructor
//
    public function __construct( array $donees)
    {
        $this->hydrate($donnees);
    }

    //getter
    public function Titre()
    {
        return $this->_Titre;
    }

    public function Auteur()
    {
        return $this->_Auteur;
    }

    public function NbPages()
    {
        return $this->_NbPages;
    }

    public function Annee_Pub()
    {
        return $this->_Annee_Pub;
    }
    public function Type()
    {
        return $this->_Type;
    }

    public function Genre()
    {
        return $this->_Genre;
    }

    public function Motcles()
    {
        return $this->_Motcles;
    }

    public function Resume()
    {
        return $this->_RefCommande;
    }
    
    public function Prix()
    {
        return $this->_Prix;
    }

    public function Commentaire()
    {
        return $this->Commentaire;
    }

    //setter

    public function SetTitre($a)
    {
        $this->_Titre = $a;
    }

    public function SetAuteur($b)
    {
        $this->_Auteur = $b;
    }

    public function SetNbPages($c)
    {
        $this->_NbPages = $c;
    }

    public function SetAnnee_Pub($d)

        $this->_Annee_Pub = $d;
    }

    public function SetType($e)
    {
        $this->_Type = $e;
    }

    public function SetGenre($f)
    {
        $this->_Genre = $f;
    }

    public function SetMotcles($g)
    {
        $this->_Motcles = $g;
    }

    public function SetResume($h)
    {
        $this->_Resume = $h;
    }

    public function SetPrix($i)
    {
        $this->_Prix = $i;
    }

    public function SetCommentaire($j)
    {
        $this->_Commentaire = $j;
    }

    public function hydrate( array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

}
