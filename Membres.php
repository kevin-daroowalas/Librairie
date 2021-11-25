<?php

declare(strict_types=1);


class Membres implements Hydratation
{

    private  $_RefMembre;

    private  $_Prenom;

    private  $_Nom;

    private  $_MembreType;

    private  $_Adresse;

    private  $_Courriel;

    private  $_AnneeNaissance;
    //
    //Constructor
    //
    public function __construct( array $donnees)
    {
        $this->hydrate($donnees);
    }
    //getter
    public function RefMembre()
    {
        return $this->_RefMembre;
    }

    public function Prenom()
    {
        return $this->_Prenom;
    }

    public function Nom()
    {
        return $this->_Nom;
    }

    public function MembreType()
    {
        return $this->_MembreType;
    }

    public function Adresse()
    {
        return $this->_Adresse;
    }

    public function Courriel()
    {
        return $this->_Courriel;
    }

    public function AnneeNaissance()
    {
        return $this->_AnneeNaissance;
    }
    
    //setter

    public function SetRefMembre($a)
    {
        $this->_RefMembre = $a;
    }

    public function SetPrenom($b)
    {
        $this->_Prenom = $b;
    }

    public function SetNom($c)
    {
        $this->_Nom = $c;
    }

    public function SetMembreType($d)
    {
        $this->_MembreType = $d;
    }

    public function SetAdresse($e)
    {
        $this->_Adresse = $e;
    }

    public function SetCourriel($f)
    {
        $this->_Courriel = $f;
    }

    public function SetAnneeNaissance($g)
    {
        $this->_AnneeNaissance = $g;
    }

    //
    //hydrate function
    //
    public function hydrate(array $donnees)
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
