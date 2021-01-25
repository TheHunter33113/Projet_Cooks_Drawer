<?php

abstract class Model
{
    //instancie la connexion a la bdd
    private static $dbconnexion

    private static function setBdd()
    {
        self::$bd = new PDO('mysql:host=localhost;dbname=cokks_drawer;charset=utf8',
        'root', '');
        self::$_bdd->setAtrribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    }

    //recuperer la connexion a la bdd
    protected function getBdd()
    {
        self::setBdd();
        return self::$_bdd
    }

    protected function getAll($table, $obj)
    {
        $var = [];
        $req = $this->getBdd()->prepare('SELECT * FROM' .table. 'ORDER BY id desc');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);

        }
        return $var;
        $req->closeCursor();
    }
}