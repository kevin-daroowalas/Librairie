<?php

declare(strict_types=1);


class Commandes implements Hydratation
{

    private  $_RefCommande;

    private  $_Refer_Membre;

    private  $_Panier;

    private  $_Livraison;

    private  $_Prix;

    //
    //Constructor
    //
    public function __construct( array $donnees)
    {
        $this->hydrate($donnees);
    }

    //getter

    public function RefCommande()
    {
        return $this->_RefCommande;
    }

    public function Refer_Membre()
    {
        return $this->_Refer_Membre;
    }

    public function Panier()
    {
        return $this->_Panier;
    }

    public function Livraison()
    {
        return $this->_Livraison;
    }
    public function Prix()
    {
        return $this->_Prix;
    }

    //setter

    public function SetRefCommande($a)
    {
        $this->_RefCommande = $a;
    }

    public function SetRefer_Membre($b)
    {
        $this->_Refer_Membre = $b;
    }

    public function SetPanier($c)
    {
        $this->_Panier = $c;
    }

    public function SetLivraison($d)
    {
        $this->_Livraison = $d;
    }

    public function SetPrix($e)
    {
        $this->_Prix = $e;
    }

    
    public function hydrate( $array $donnees)
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
