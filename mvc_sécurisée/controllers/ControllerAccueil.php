<?php
require_once('views/View.php');
class ControllerAccueil
{
    private $_objetManager;
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count(array($url)) > 1 )
          throw new Exception('Page introuvable');
        else
          $this->objet();
    }

    private function objet()
    {
        $this->_objetManager = new ObjetManager;
        $objet = $this->_objetManager->getObjet();

        
        $this->_view = new View('Accueil');
        $this->_view->generate(array('objet' => $objet));
    }
}


