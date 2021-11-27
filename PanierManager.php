<?php
session_start();
declare(strict_types=1);


class PanierManager
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
    
   // Shows content of the panier
    public function Show()
    {
        $req = $this->_db->query('SELECT * FROM Panier');

        while($data=$req->fetch(PDO::FETCH_ASSOC))
        {
            $u [] = new panier($data);
        }
        return $u;
    }

    /**
     * 
     */
    public function AjouterPanier()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function UpdatePanier()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function RemoveItemPanier()
    {
        // TODO implement here
    }

}
