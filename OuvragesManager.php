<?php

//declare(strict_types=1);
session_start();

class OuvragesManager
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
   
    //List all the books
    public function ListAll()
    {
         $req = $this->_db->query('SELECT * FROM Ouvrages');

        while($data=$req->fetch(PDO::FETCH_ASSOC))
        {
           
            $users [] = new Ouvrages($data);
        }
    }

    //List all Books by Title
    public function ListByName( Ouvrages $o)
    {
         $title = $o->Titre();
         $req = $this->_db->query('SELECT * FROM Ouvrages WHERE Titre = '".$title."'");

        while($data=$req->fetch(PDO::FETCH_ASSOC))
        {
           
            $users [] = new Ouvrages($data);
        }
    }

    /**
     * 
     */
    public function ListByAuteur( Ouvrages $o)
    {
         $aut = $o->Auteur();
         $req = $this->_db->query('SELECT * FROM Ouvrages WHERE Auteur = '".$aut."'");

        while($data=$req->fetch(PDO::FETCH_ASSOC))
        {
           
            $users [] = new Ouvrages($data);
        }
    }

    /**
     * 
     */
    public function ListByType( Ouvrages $o)
    {
        $type = $o->Type();
         $req = $this->_db->query('SELECT * FROM Ouvrages WHERE Type = '".$Type."'");

        while($data=$req->fetch(PDO::FETCH_ASSOC))
        {
           
            $users [] = new Ouvrages($data);
        }
    }

    /**
     * 
     */
    public function ListByGenre( Ouvrages $o)
    {
         $genre = $o->Genre();
         $req = $this->_db->query('SELECT * FROM Ouvrages WHERE Genre = '".$genre."'");

        while($data=$req->fetch(PDO::FETCH_ASSOC))
        {
           
            $users [] = new Ouvrages($data);
        }
    }

    /**
     * 
     */
    public function ListByMotCles( Ouvrages $o)
    {
         $mc = $o->MotCles();
         $req = $this->_db->query('SELECT * FROM Ouvrages WHERE MotCles = '".$mc."'");

        while($data=$req->fetch(PDO::FETCH_ASSOC))
        {
           
            $users [] = new Ouvrages($data);
        }
    }

    ///  IM TRYING SOMETHING ///
   ///////////////////////////////
    public function ListByNbPages( Ouvrages $o)
    {
         $nbp=$_POST["val_pages"];
         $req = $this->_db->query("SELECT * FROM Ouvrages WHERE NbPages BETWEEN 0 AND '".$nbp."'");

        while($data=$req->fetch(PDO::FETCH_ASSOC))
        {
           
            $users [] = new Ouvrages($data);
        }
    }
/////////////////////////////////////////////
    /**
     * 
     */
     ///  IM TRYING SOMETHING ///
   ///////////////////////////////
    public function ListByPrix( Ouvrages $o)
    {
         $p=$_POST["val_pages"];
         $req = $this->_db->query("SELECT * FROM Ouvrages WHERE Prix BETWEEN 0 AND '".$p."'");

        while($data=$req->fetch(PDO::FETCH_ASSOC))
        {
           
            $users [] = new Ouvrages($data);
        }
    }

    /**
     * 
     */
    /////////////////////////////////////////////
    public function ListByNameAndAuteur( Ouvrages $o)
    {
        $title = $o->Titre();
         $aut = $o->Auteur();
         $req = $this->_db->query('SELECT * FROM Ouvrages WHERE Titre = '".$title."' AND Auteur ='".$aut."'");

        while($data=$req->fetch(PDO::FETCH_ASSOC))
        {
           
            $users [] = new Ouvrages($data);
        }
    }

    /**
     * 
     */
    public function ListByNameAuteurType( Ouvrages $o)
    {
        $title = $o->Titre();
         $aut = $o->Auteur();
        $type = $o->Type();
         $req = $this->_db->query('SELECT * FROM Ouvrages WHERE Titre = '".$title."' AND Auteur ='".$aut."' AND Type = '"$type"'");

        while($data=$req->fetch(PDO::FETCH_ASSOC))
        {
           
            $users [] = new Ouvrages($data);
        }
    }

    /**
     * 
     */
    public function ListByNameAuteurTypeGenre( Ouvrages $o)
    {
        $title = $o->Titre();
         $aut = $o->Auteur();
        $type = $o->Type();
        $genre = $o->Genre();
         $req = $this->_db->query('SELECT * FROM Ouvrages WHERE Titre = '".$title."' AND Auteur ='".$aut."' AND Type = '".$type."' AND Genre ='".$genre."'");

        while($data=$req->fetch(PDO::FETCH_ASSOC))
        {
           
            $users [] = new Ouvrages($data);
        }
    }

    /**
     * 
     */
    public function ListByNameAuteurTypeGenreMotCles( Ouvrages $o)
    {
       $title = $o->Titre();
         $aut = $o->Auteur();
        $type = $o->Type();
        $genre = $o->Genre();
         $mc = $o->MotCles();
         $req = $this->_db->query('SELECT * FROM Ouvrages WHERE Titre = '".$title."' AND Auteur ='".$aut."' AND Type = '".$type."' AND Genre ='".$genre."' AND Motcles = '".$mc."'");

        while($data=$req->fetch(PDO::FETCH_ASSOC))
        {
           
            $users [] = new Ouvrages($data);
        }
    }

    /**
     * 
     */
    // I DONT KNOW HOW TO IMPLEMENT THAT
    //////////////////////////
    public function ListByAll()
    {
        $title = $o->Titre();
        $aut = $o->Auteur();
        $type = $o->Type();
        $genre = $o->Genre();
        $mc = $o->MotCles();
        $an_p = $o->Annee_Pub();
        $p = $o->Prix();
        $nbp=$_POST["val_pages"];
         $req = $this->_db->query('SELECT * FROM Ouvrages WHERE Titre = '".$title."' AND Auteur ='".$aut."' AND Type = '".$type."' AND Genre ='".$genre."' AND Motcles = '".$mc."'");

        while($data=$req->fetch(PDO::FETCH_ASSOC))
        {
           
            $users [] = new Ouvrages($data);
        }
    }
//////////////////////////////////////////////////////////////
    /**
     * 
     */
    public function ListByNameAuteurTypeGenreMotClesPages()
    {
        $title = $o->Titre();
        $aut = $o->Auteur();
        $type = $o->Type();
        $genre = $o->Genre();
        $mc = $o->MotCles();
        $nbp=$_POST["val_pages"];
         $req = $this->_db->query('SELECT * FROM Ouvrages WHERE NbPages BETWEEN 0 AND '".$nbp."'AND Titre = '".$title."' AND Auteur ='".$aut."' AND Type = '".$type."' AND Genre ='".$genre."' AND Motcles = '".$mc."'");

        while($data=$req->fetch(PDO::FETCH_ASSOC))
        {
           
            $users [] = new Ouvrages($data);
    }

}
