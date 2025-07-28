<?php 
namespace Src\Entity;

use App\Core\Abstract\AbstractEntity;

class Client extends AbstractEntity
{
    private int $id;
    private   string $nom;
    private string $prenom;
    private   array $compteurs;

    public  function  __construct($id=0,$nom="",$prenom="")
    {
            $this->id=$id;
            $this->nom=$nom;
            $this->prenom=$prenom;
    }
    public  static function toObject(array $data):?static
    {               
             $client = new static ();
             $client->setId($data['id'] ?? 0);
             $client->setNom( $data['nom'] ?? '');
             $client->setPrenom( $data['prenom'] ?? '');
            return $client;
           
    }
                
    public  function toArray():array
    {
       return [ "id"=>$this->id,
                'nom'=>$this->nom,
                "prenom"=>$this->prenom,
                'compteur'=>array_map(fn($compteur)=>$compteur->toArray,$this->compteurs)

        
       
            ];

        }
    public function getCompteurs()
    {
            return $this->compteurs;
    }
    public function addCompteur($compteur)
    {
            return   $this->compteurs[]=$compteur;
    }
    public function getIid()
    {
        return  $this->id;
    }
    public function setId($id)
    {
            $this->id=$id;
            return $this;
    }

    
    public function getNom()
    {
            return $this->nom;
    }

      /**
       * Set the value of nom
       *
       * @return  self
       */ 
      public function setNom($nom)
      {
            $this->nom = $nom;

            return $this;
      }

      /**
       * Get the value of prenom
       */ 
      public function getPrenom()
      {
            return $this->prenom;
      }

      /**
       * Set the value of prenom
       *
       * @return  self
       */ 
      public function setPrenom($prenom)
      {
            $this->prenom = $prenom;

            return $this;
      }
 }