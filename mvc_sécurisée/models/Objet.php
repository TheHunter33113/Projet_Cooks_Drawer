<?php
class Objet
{
    private $idObj
    private $nomObj
    private $description
    private $prix
    private $dispo
    private $nomCat

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrtae(array $data)
    {
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if(method_exists($this, $method))
            $this->$method($value);
            
        }
    }

    public function setIdObj($idObj)
    {
        $id = (int) $idObj;
        $this->idObj = $idObj;
    }

    public function setDescription($description)
    {
        if(is_string($description);
        $this->description = $description;
    }

    public function setNomObj($nomObj)
    {
        if(is_string($nomObj);
        $this->nomObj = $nomObj;
    }

    public function setPrix($prix)
    {
        $id = (float) $prix;
        $this->prix = $prix;
    }

    public function setDispo($dispo)
    {
        $id = (bool) $dispo;
        $this->dispo = $dispo;
    }

    public function setNomCat($nomCat)
    {
        if(is_string($nomCat);
        $this->nomCat = $nomCat
        ;
    }

    //GETTERS
    public function idObj()
    {
        return $this->idObj;
    }

    public function nomObj()
    {
        return $this->nomObj;
    }

    public function description()
    {
        return $this->description;
    }

    public function prix()
    {
        return $this->prix;
    }

    public function dispo()
    {
        return $this->dispo;
    }

    public function nomcat()
    {
        return $this->nomCat;
    }













}