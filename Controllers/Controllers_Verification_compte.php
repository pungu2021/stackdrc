<?php

use App\database\inscription\Inscrition;

require 'partials/Contro.php';
$msg="";
$user= new Inscrition();
if(isset($_POST["connexion"])){
   $msg= $user->Verification_compte_user($_POST["gmail"],$_POST["pass"],isset($_POST["check"]));
}