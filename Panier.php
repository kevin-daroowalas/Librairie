<?php

declare(strict_types=1);


class Panier implements Hydratation
{

    private  $_ReferMembre;
    private  $_Articles;
//
//Constructor  
//
    public function __construct( array $donnees)
    {
        $this->hydrate($donnees);
    }

    //getter
    public function ReferMembre()
    {
        return $this->_ReferMembre;
    }
    //setter
    public function Articles()
    {
        return $this->_Articles;
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
