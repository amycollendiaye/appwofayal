<?php
namespace Src\Entity;

use App\Core\Abstract\AbstractEntity;

class Compteur extends AbstractEntity
{
     private  int $id;
     private string   $numeroCompteur;
     private Tranche $tranche;
     private array $achats;
     public  function  __construct( $id=0,$numeroCompteur="")
     {
          $this->id=$id;
          $this->numeroCompteur=$numeroCompteur;

     }
     public static function toObject(array $data): ?static
     {
          $compteur= new static();
          $compteur->setId($data['id'] ?? 0);
          $compteur->setNumeroCompteur($data['numeroCompteur']?? '');
          $compteur->setTranche(Tranche::toObject(['id'=>$data["id_compteur"]]));

           return $compteur;
          
     }
     public   function toArray():array
     {
          return [
               "id"=>$this->id,
               "numeroCompteur"=>$this->numeroCompteur,
               "achats"=>array_map(fn($achat)=>$achat->toArray,$this->achats)
               
          ];
     }

     public function  getAchat()
     {
         return  $this->achats;
     }
     public function addAchat($achat)
     {
           return $this->achats[]=$achat;
     }
     public function getNumeroCompteur()
     {
          return $this->numeroCompteur;
     }
     public  function setNumeroCompteur($numeroCompteur)
     {
               $this->numeroCompteur=$numeroCompteur;
               return $this;
     }
     /**
      * Get the value of id
      */ 
     public function getId()
     {
          return $this->id;
     }

     /**
      * Set the value of id
      *
      * @return  self
      */ 
     public function setId($id)
     {
          $this->id = $id;

          return $this;
     }

      /**
       * Get the value of tranche
       */ 
     public function getTranche()
     {
          return $this->tranche;
     }

     /**
       * Set the value of tranche
       *
       * @return  self
       */ 
     public function setTranche($tranche)
     {
          $this->tranche = $tranche;

          return $this;
     }
}