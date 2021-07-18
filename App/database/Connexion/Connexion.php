<?php
namespace App\database\Connexion;
use PDO;
use PDOException;

class Connexion{
      public static function getPdo(){
              try{
                $pdo=new PDO("mysql:host=localhost;dbname=stackdrc;charset=utf8","root","");
               $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
              }
              catch(PDOException $e){
                  die("Erreur de connexion avec la base de données".$e->getMessage());
              }
              return $pdo;
          }
}