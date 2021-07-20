<?php

use App\database\Autoload;
use App\database\bloc\Bloc;
use App\database\Connexion\Connexion ;
date_default_timezone_set('Africa/Kinshasa');
/* suppression d'un dossier pour faciliter le chemin */
$link=str_replace("Public","",dirname(__DIR__));
/**  inclusion du fichier */
require $link. DIRECTORY_SEPARATOR. 'App'.DIRECTORY_SEPARATOR.'Autoload.php';
/** appel à autoload , qui permet d'inclure des classes automatiquement  */
Autoload::Chargement_Classe();
/**instanciation des objets  de nos classe  */
$mybloc= new Bloc();
$data=$mybloc->Afficher_Astuces();
function photo($gmail){
    global $mybloc;
     return $mybloc->getInfo_USER($gmail);
   }
