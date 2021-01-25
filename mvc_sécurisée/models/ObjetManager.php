<?php
class ObjetManager extends Model
{
	function getObjet(){
    return $this->getAll('objet' , 'Objet');
}

}