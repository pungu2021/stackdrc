<?php

use App\database\bloc\Bloc;

require 'partials/Contro.php';
 $mybloc= new Bloc();
 $datas=null;
 if(isset($_GET["id"])){
   $datas=$mybloc->getArticleById($_GET["id"]);
   $commenatires=$mybloc->getCommentaire($_GET["id"]);
 }