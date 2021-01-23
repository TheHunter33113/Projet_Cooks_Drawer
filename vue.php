<?php 

class ObjetVue extends Objet {

    public function showObjet($nomObj){
        $results = $this->getObjet($nomObj);
        echo "nom Objet : " .$result[0]['objet_nomObj'];
        echo "Description : ".$result[0]['objet_description'];
        echo "Prix :"..$result[0]['objet_prix'];
    }

	
		
	}
}
