<?php

abstract class Model
{
    //instancie la connexion a la bdd
    private static $_bdd;

    private static function setBdd()
    {
        $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        self::$_bdd = new PDO('mysql:host=localhost;dbname=cooks_drawer;charset=utf8',
        'root', '', $options);
       // self::$_bdd->setAtrribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    }

    //recuperer la connexion a la bdd
    protected function getBdd()
    {
        if (self::$_bdd == null) {
                self::setBdd();
                return self::$_bdd;
        }
 
    }

    protected function getAll($table, $obj)
    {
        $var = [];
        $req = $this->getBdd()->prepare('SELECT * FROM' .$table. 'ORDER BY id desc');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);

        }
        return $var;
        $req->closeCursor();
    }
}