<?php
namespace Src\Entity;

use App\Core\Abstract\AbstractEntity;
use DateTime;

 class Achat extends AbstractEntity
{
    private  int $id;
    private  string  $reference;
    private string  $codeRecharge;
    private string $nbreKwatt;
    private DateTime $dateHeure;
    private string $prixKwatt;
    private Compteur $compteur;
    

    public function __construct($id=0,$reference="",$codeRecharge="",$nbreKwatt='',$dateHeure=null,$prixKwatt="")

    {
        $this->id=$id;
        $this->reference=$reference;
        $this->codeRecharge=$codeRecharge;
        $this->nbreKwatt=$nbreKwatt;
        $this->dateHeure=$dateHeure;
        $this->prixKwatt=$prixKwatt;
    }
    public     static function toObject(array $data): ?static
    {
         $achat=new static();
          $achat->setId($data["id"]);
          $achat->setReference($data["reference"]);
          $achat->setCodeRecharge($data["codeRechage"]);
          $achat->setNbreKwatt($data["nbreKwatt"]);
          $achat->setDateHeure(isset($data['dateHeure']) ? new DateTime($data['dateHeure']) : null);
          $achat->setPrixKwatt($data["prixKwatt"]);
          $achat->setCompteur(Compteur::toObject([
            "id" => $data['id_compteur']
          ]));



         return $achat; 
    }
     public  function toArray()
     {
         return [

         ];
     }
    
    




   
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
     * Get the value of reference
     */ 
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     *
     * @return  self
     */ 
    public function setReference($reference)
    {
        $this->reference = $reference;

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
     * Get the value of prixKwatt
     */ 
    public function getPrixKwatt()
    {
        return $this->prixKwatt;
    }

    /**
     * Set the value of prixKwatt
     *
     * @return  self
     */ 
    public function setPrixKwatt($prixKwatt)
    {
        $this->prixKwatt = $prixKwatt;

        return $this;
    }

    /**
     * Get the value of compteur
     */ 
    public function getCompteur()
    {
        return $this->compteur;
    }

    /**
     * Set the value of compteur
     *
     * @return  self
     */ 
    public function setCompteur($compteur)
    {
        $this->compteur = $compteur;

        return $this;
    }
}

