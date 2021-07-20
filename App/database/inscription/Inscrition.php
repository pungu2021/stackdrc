<?php
namespace App\database\inscription;

use App\database\Connexion\Connexion;
/**  inclusion du fichier */
$link=dirname(__DIR__);
require $link."/Connexion/Connexion.php";
class Inscrition{

  public function inscription_user($pseudo,$gmail,$photo,$password1, $password2)
  {
        $pseudo=htmlspecialchars(strip_tags(trim($pseudo)));
        $gmail=htmlspecialchars(strip_tags(trim($gmail)));
        $gmail=filter_var($gmail,FILTER_SANITIZE_EMAIL);
        $mypicture=$photo["name"];
        $tmp=$photo["tmp_name"];
        $password1=htmlspecialchars(strip_tags(trim($password1)));
        $password2=htmlspecialchars(strip_tags(trim($password2)));
        if(isset($pseudo) and !empty($pseudo) and isset($gmail) and !empty($gmail) and isset($password1) and !empty($password1) and isset($password2)and !empty($password2))
        {
           if(strlen($pseudo)<=2){
               return '<span class="errormessage">le pseudo ne peut pas avoir moins de 2 caracteres </span>';
           }
           else if( strlen($password2)<8){
            return '<span class="errormessage">le mot de passe ne peut pas avoir moins de 8 caracteres </span>';
           }
           else if($password2!=$password1){
               return '<span class="errormessage">les deux mot de passe ne sont pas le meme </span>';
           }
           else{
               if(preg_match("#^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$gmail)){
                      $query=Connexion::getPdo()->prepare("SELECT * FROM inscription WHERE gmail=?");
                      $query->execute(array($gmail));
                     if($query->rowCount()!=0){
                        return '<span class="errormessage">désolé le compte gmail inserer ou saisie existe déjà </span>';
                     }
                   else{
                        $extensionImage=explode(".",$mypicture);
                        $nomImage=explode(".",$gmail);
                        move_uploaded_file($tmp,"./public/imageUser/".$nomImage[0].'.'.end($extensionImage));
                        $sql="INSERT INTO inscription(pseudo,gmail,photo,pass) VALUES(?,?,?,?)";
                        $req=Connexion::getPdo()->prepare($sql);
                        $req->execute(array($pseudo,$gmail,$nomImage[0].'.'.end($extensionImage),\password_hash($password1,PASSWORD_DEFAULT)));
                         $_SESSION["stackdrc_gmail"]=$gmail;
                        header("location:index.php");
                   }
               }
               else{
                   return '<span class="errormessage">votre gmail est incorrect  </span>';
               }
           }
        }
        else{
            return '<span class="errormessage">Veuillez remplir tous les champs </span>';
        }
  }
  /**
   * Verification du compte
   */
  public function Verification_compte_user($gmail, $pass,$check){
    $gmail=htmlspecialchars(strip_tags(trim($gmail)));
    $gmail=filter_var($gmail,FILTER_SANITIZE_EMAIL);
    $pass=htmlspecialchars(strip_tags(trim($pass)));
    if(isset($gmail) and !empty($gmail) and isset($pass) and !empty($pass)){
        if(preg_match("#^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$gmail)){
             $sql="SELECT * FROM inscription ";
             $req=Connexion::getPdo()->query($sql);
             while($data=$req->fetch()){
                 if($gmail==$data["gmail"] and \password_verify($pass,$data["pass"])){
                     $_SESSION["stackdrc_gmail"]=$data["gmail"];
                     if($check=="on"){
                         \setcookie("stackdrc_gmail",$data["gmail"],time()+365*24*60*60,null,null,false,true);
                     }
                     header("location:index.php");
                 }
             }
                return '<span class="errormessage">désolé compte inexistant ou votre compte n\'existe pas </span>';
        }
        else{
            return '<span class="errormessage">désolé compte gmail incorrect ou n\'est pas valide </span>';
        }
    }
    else{
         return '<span class="errormessage">Vueillez remplir tous les champs </span>';
    }
  }
}