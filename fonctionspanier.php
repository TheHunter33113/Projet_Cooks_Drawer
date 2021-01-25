<?php

function creatPanier(){
   if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
      $_SESSION['panier']['nomObj'] = array();
      $_SESSION['panier']['qteObj'] = array();
      $_SESSION['panier']['prixObj'] = array();
      $_SESSION['panier']['lock'] = false;
   }
   return true;
}

function addObj($nomObj,$qteObj,$prixObj){

   //Si le panier existe
   if (creatPanier() && !isLocked())
   {
      //Si le produit existe déjà on ajoute seulement la quantité
      $positionObj = array_search($nomProd,  $_SESSION['panier']['nomProd']);

      if ($positionObj !== false)
      {
         $_SESSION['panier']['qteObj'][$positionObj] += $qteObj ;
      }
      else
      {
         //Sinon on ajoute le produit
         array_push( $_SESSION['panier']['nomObj'],$nomObj);
         array_push( $_SESSION['panier']['qteObj'],$qteObj);
         array_push( $_SESSION['panier']['prixObj'],$prixObj);
      }
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function supprObj($nomObj){
   //Si le panier existe
   if (creatPanier() && !isLocked())
   {
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['nomObj'] = array();
      $tmp['qteObj'] = array();
      $tmp['prixObj'] = array();
      $tmp['verrou'] = $_SESSION['panier']['verrou'];

      for($i = 0; $i < count($_SESSION['panier']['nomObj']); $i++)
      {
         if ($_SESSION['panier']['nomObj'][$i] !== $nomObj)
         {
            array_push( $tmp['nomObj'],$_SESSION['panier']['nomObj'][$i]);
            array_push( $tmp['qteObj'],$_SESSION['panier']['qteObj'][$i]);
            array_push( $tmp['prixObj'],$_SESSION['panier']['prixObj'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function modifierQteObj($nomObj,$qteObj){
   //Si le panier existe
   if (creatPanier() && !isLocked())
   {
      //Si la quantité est positive on modifie sinon on supprime l'article
      if ($qteObj > 0)
      {
         //Recherche du produit dans le panier
         $positionProduit = array_search($nomObj,  $_SESSION['panier']['nomObj']);

         if ($positionProduit !== false)
         {
            $_SESSION['panier']['qteObj'][$positionProduit] = $qteObj ;
         }
      }
      else
      supprObj($nomObj);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function MontantTotal(){
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['nomObj']); $i++)
   {
      $total += $_SESSION['panier']['qteObj'][$i] * $_SESSION['panier']['prixObj'][$i];
   }
   return $total;
}

function isLocked(){
   if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
   return true;
   else
   return false;
}

function compterObjets()
{
   if (isset($_SESSION['panier']))
   return count($_SESSION['panier']['nomObj']);
   else
   return 0;

}

function supprPanier(){
   unset($_SESSION['panier']);
}