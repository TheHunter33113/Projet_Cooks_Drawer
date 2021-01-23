<?php

class Objet extends Dbconnexion {

    protected function getObjet($nomObj){
        $sql =" SELECT * FROM objet WHERE nomObj = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nomObj]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setObjet($nomObjet, $description ,$Prix){
        $sql = "INSERT TO objet(objet_nomObjet, objet_description ,objet_Prix");
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([($nomObjet, $description ,$Prix]);

    }
    
}
