<?php 
namespace Src\Entity;

use App\Core\Abstract\AbstractEntity;

class Tranche  extends AbstractEntity
{
      private   int $id;
       private  string $type;
        private  string $consommation;
        private  string $prixKwatt;
        public function __construct($id=0,$type='',$consommation='',$prixKwatt='')
        {
            $this->id=$id;
            $this->type=$type;
            $this->consommation=$consommation;
            $this->prixKwatt=$prixKwatt;
        }
         public  static  function toObject(array $data): ?static
         {
              $tranche=new static();
              $tranche->setId($data['id']);
              $tranche->setType($data['type']);
              $tranche->setConsommation($data['consommation']);
              $tranche->setPrixkw($data['prixKwatt']);


               return $tranche;

         }
        public function toArray()
        {
            return [];
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
        * Get the value of type
        */ 
       public function getType()
       {
              return $this->type;
       }

       /**
        * Set the value of type
        *
        * @return  self
        */ 
       public function setType($type)
       {
              $this->type = $type;

              return $this;
       }

        /**
         * Get the value of consommation
         */ 
        public function getConsommation()
        {
                return $this->consommation;
        }

        /**
         * Set the value of consommation
         *
         * @return  self
         */ 
        public function setConsommation($consommation)
        {
                $this->consommation = $consommation;

                return $this;
        }

        /**
         * Get the value of prixKwatt
         */ 
        public function getPrixkw()
        {
                return $this->prixKwatt;
        }

        /**
         * Set the value of prixKwatt
         *
         * @return  self
         */ 
        public function setPrixkw($prixKwatt)
        {
                $this->prixKwatt = $prixKwatt;

                return $this;
        }
}