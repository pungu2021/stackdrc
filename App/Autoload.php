<?php
namespace App\database;

class Autoload{
    
    public static function Chargement_Classe(){

        spl_autoload_register([__CLASS__,"Autoload"]);
    }
    public static function Autoload($class){
       require dirname(__DIR__).'/' .$class.'.php';
    }
}