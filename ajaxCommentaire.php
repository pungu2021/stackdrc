<?php

use App\database\bloc\Bloc;

require "Controllers/ControllersCommentaire.php";
$mycommentaire= new Bloc();
$mycommentaire->InsertionCommentaire($_POST["id"],$_POST["auteur"],$_POST["message"],$_POST["gmail"]);