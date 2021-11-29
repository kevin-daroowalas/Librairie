<?php

//declare(strict_types=1);
session_start();

class CommandeManager
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
// list commade will show all the orders of everyone
    public function ListCommande()
    {
        $req = $this->_db->query('SELECT * FROM commande');

        while($data=$req->fetch(PDO::FETCH_ASSOC))
        {
           
            $u [] = new Commande($data);
        }
        return $u;
    }

    /**
     * 
     */
    public function MyCommande( Membres $m)
    {
        $id= $m->Refer_Membre();
         $req = $this->_db->query("SELECT * FROM Commande WHERE Refer_Membre ='".$id."'");

        while($data=$req->fetch(PDO::FETCH_ASSOC))
        {
           
            $orders [] = new Commandes($data);
        }
        return $orders;
    }

   // function to place an order
    public function PlacerCommande(Commandes $c)
    {
        $query = $this->_db->prepare("INSERT into commande(RefCommande,Refer_Membre,Panier,Livraison,Prix) VALUES (:RefCommande,:Refer_Membre,:Panier,:Livraison,:Prix)");
        
        $query->bindValue(":RefCommande",$c->RefCommande());
        $query->bindValue(":Refer_Membre",$c->Refer_Membre());
        $query->bindValue(":Panier",$c->Panier());
        $query->bindValue(":Livraison",$c->Livraison());
        $query->bindValue(":Prix",$c->Prix());
        $query->execute();
    }

 
     // on peut pas update une commande
    public function UpdateCommande()
    {
        // TODO implement here
    }
    // To Cancel order
    public function AnnulerCommande(Commande $c)
    {
       $id = $c->RefCommande();
        $this->_db->exec("DELETE FROM commande WHERE RefCommande ='".$id."'");
    }

}
