<?php
namespace Src\Entity;

use App\Core\Abstract\AbstractEntity;
use DateTime;

class Logging extends AbstractEntity
{
     private int $id;
     private  DateTime $dateHeure;
    private string $ipAdresse;
     private string $localisation;
     private string $codeRecharge;
     private string $nbreKwatt;
    private  Statut $statut;
    public function  __construct($id=0, $dateHeure=null, $ipAdresse='', $localisation='', $codeRecharge='', $nbreKwatt='', $statut=null)
    {
        $this->id=$id;
        $this->dateHeure=$dateHeure;
        $this->ipAdresse=$ipAdresse;
        $this->localisation=$localisation;
        $this->codeRecharge=$codeRecharge;
        $this->nbreKwatt=$nbreKwatt;
        $this->statut=$statut;
    }
    public  static function  toObject(array $data): ?static
    {
            $logging= new static();

            $logging->setId($data["id"]?? 0);
            $logging->setDateHeure(isset($data['dateHeure']) ? new DateTime($data['dateHeure']) : null);
            $logging->setIpAdresse($data["ipAdresse"] ?? '');
            $logging->setLocalisation($data["localisation"]);
            $logging->setCodeRecharge($data["codeRecharge"]);
            $logging->setNbreKwatt($data["nbreKwatt"]);
            $logging->setStatut(isset($data['statut']) ? Statut::from($data['statut']): null) ;

             return $logging;
    }
    public  function toArray():array
    {
         return [

         ];
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
      * Get the value of dateHeure
      */ 
     public function getDateHeure()
     {
          return $this->dateHeure;
     }

     /**
      * Set the value of dateHeure
      *
      * @return  self
      */ 
     public function setDateHeure($dateHeure)
     {
          $this->dateHeure = $dateHeure;

          return $this;
     }

    /**
     * Get the value of ipAdresse
     */ 
    public function getIpAdresse()
    {
        return $this->ipAdresse;
    }

    /**
     * Set the value of ipAdresse
     *
     * @return  self
     */ 
    public function setIpAdresse($ipAdresse)
    {
        $this->ipAdresse = $ipAdresse;

        return $this;
    }

     /**
      * Get the value of localisation
      */ 
     public function getLocalisation()
     {
          return $this->localisation;
     }

     /**
      * Set the value of localisation
      *
      * @return  self
      */ 
     public function setLocalisation($localisation)
     {
          $this->localisation = $localisation;

          return $this;
     }

     /**
      * Get the value of codeRecharge
      */ 
     public function getCodeRecharge()
     {
          return $this->codeRecharge;
     }

     /**
      * Set the value of codeRecharge
      *
      * @return  self
      */ 
     public function setCodeRecharge($codeRecharge)
     {
          $this->codeRecharge = $codeRecharge;

          return $this;
     }

     /**
      * Get the value of nbreKwatt
      */ 
     public function getNbreKwatt()
     {
          return $this->nbreKwatt;
     }

     /**
      * Set the value of nbreKwatt
      *
      * @return  self
      */ 
     public function setNbreKwatt($nbreKwatt)
     {
          $this->nbreKwatt = $nbreKwatt;

          return $this;
     }

    /**
     * Get the value of statut
     */ 
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set the value of statut
     *
     * @return  self
     */ 
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }
}