<?php
namespace App\Core;
use PDO;
class Database {
  private static ?PDO $pdo = null;

  private function __construct(){}
  public static function getInstance(){
    if(self::$pdo === null){
            $dsn='pgsql:host=ballast.proxy.rlwy.net;dbname=railway;port=42578';

      self::$pdo = new PDO($dsn,"postgres","SPLHdRWAdToAzpTOdrgieVnYIGvNoVrj",
      [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]
    );
  }
   return self::$pdo;
  }
}


