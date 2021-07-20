<?php

use App\database\inscription\Inscrition;

require 'partials/Contro.php';
$msg="";
$user= new Inscrition();
if(isset($_POST["inscrire"])){
   $msg= $user->inscription_user($_POST["pseudo"],$_POST["gmail"],$_FILES["photo"],$_POST["pass1"],$_POST["pass2"]);
}