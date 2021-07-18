<?php

use App\database\bloc\Bloc;

require "Controllers/ControllersCommentaire.php";
$myReponse= new Bloc();
$myReponse->InsertionReponse($_POST["id"],$_POST["auteur"],$_POST["message"],$_POST["gmail"]);