<?php

use App\database\bloc\Bloc;

require 'partials/Contro.php';
 $mybloc= new Bloc();
 $datas=null;
 if(isset($_GET["id"])){
   $datas=$mybloc->getArticleById($_GET["id"]);
   $commenatires=$mybloc->getCommentaire($_GET["id"]);
 }
if(isset($_SESSION["stackdrc_gmail"])){
  $data_source=$mybloc->getInfo_USER($_SESSION["stackdrc_gmail"]);
}
 function photo($gmail){
  global $mybloc;
   return $mybloc->getInfo_USER($gmail);
 }
