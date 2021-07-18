<?php 
 namespace App\database\bloc;

use App\database\Connexion\Connexion;

/**  inclusion du fichier */
$link=dirname(__DIR__);
require $link."/Connexion/Connexion.php";
class Bloc{
    // instanciation delan classe connexion pour se connecter à notre base de données 
   public function Afficher_Astuces() {
        $sql= "SELECT * FROM bloc ORDER BY id DESC LIMIT 8 ";
        $req=Connexion::getPdo()->query($sql);
        return $req->fetchAll();
    }
    /**
     * Fonction getArticle par id 
     */
    public function getArticleById($id){
        $id=htmlspecialchars(strip_tags(trim($id)));
        $sql="SELECT * FROM bloc WHERE id =?";
        if(is_numeric($id)){
            $req=Connexion::getPdo()->prepare($sql);
            $req->execute(array($id));
             if($req->rowCount()!=0)
                  return $req->fetchAll();
              else
                 header("location:404.php");
        }
        else{
            header("location:404.php");
        }
    }
    /**
     * obtrnir les commentaires
     */
    public function getCommentaire($id){
        $id=htmlspecialchars(strip_tags(trim($id)));
        $sql="SELECT * FROM commentaire WHERE id_article=?";
            $req=Connexion::getPdo()->prepare($sql);
            $req->execute(array($id));
           return $req->fetchAll();
    }
    /**
     *   obtenir les reponses des commenatires
     */
    public function getReponse($id){
        $id=htmlspecialchars(strip_tags(trim($id)));
        $sql="SELECT * FROM repondre WHERE id=?";
            $req=Connexion::getPdo()->prepare($sql);
            $req->execute(array($id));
           return $req->fetchAll();
    }
    /**
     *   innsertion commentaire 
     */
    public function InsertionCommentaire($id_article,$auteur,$message,$gmai){
            $id_article=htmlspecialchars(strip_tags(trim($id_article)));
            $auteur=htmlspecialchars(strip_tags(trim($auteur)));
            $message=htmlspecialchars(strip_tags(trim($message)));
            $gmai=htmlspecialchars(strip_tags(trim($gmai)));
           if(isset($id_article)and !empty($id_article)and isset($auteur)and !empty($auteur) and isset($message)and !empty($message) and isset($gmai)and !empty($gmai)){
            $sql="INSERT INTO commentaire(id_article ,auteur ,message_com ,gmail , date_pub ) VALUES(?,?,?,?,NOW())";
            $req=Connexion::getPdo()->prepare($sql);
            $req->execute(array($id_article,$auteur,$message,$gmai));
            echo "true";
           }
           else{
               echo "false";
           }
    }
    /**
     * insertion Reponse commentaire
     */
     public function InsertionReponse($id,$auteur,$message,$gmai){
        $id_article=htmlspecialchars(strip_tags(trim($id)));
        $auteur=htmlspecialchars(strip_tags(trim($auteur)));
        $message=htmlspecialchars(strip_tags(trim($message)));
        $gmai=htmlspecialchars(strip_tags(trim($gmai)));
       if(isset($id_article)and !empty($id_article)and isset($auteur)and !empty($auteur) and isset($message)and !empty($message) and isset($gmai)and !empty($gmai)){
        $sql="INSERT INTO repondre(id ,auteur ,message_rep ,gmail , date_pub ) VALUES(?,?,?,?,NOW())";
        $req=Connexion::getPdo()->prepare($sql);
        $req->execute(array($id,$auteur,$message,$gmai));
        echo "true";
       }
       else{
           echo "false";
       }
}
    /**
     * Fonction il ya 
     */
    public function ilya($date_now,$date_enre){
             // declaration de deux variables date
                $date1=strtotime($date_now);
                $date2=strtotime($date_enre);
                // ici on a fait la difference de dates
                $date_difference=abs($date1-$date2);
                if($date_difference>=31536000)
                 {
                   return 'il ya '.floor($date_difference/31536000).' ans';
                 }
                  else if ($date_difference != 0 and $date_difference >= 2592000) 
                  {
                      return 'il ya ' . floor($date_difference / 2592000) . ' mois';
                  } 
                  else if ($date_difference >= 604800 and $date_difference < 2592000)
                  {
                            if (floor($date_difference / 604800) >= 2)
                                      return 'il ya ' . floor($date_difference / 604800) . ' semaines';
                             else
                                      return 'il ya ' . floor($date_difference / 604800) . ' semaine';
                  }
                  else if($date_difference >=86400 and $date_difference<2592000)
                  {
                            if(floor($date_difference/86400) >=2)
                                      return 'il ya '.floor($date_difference/86400).' jours';
                            else
                                      return 'il ya '.floor($date_difference/86400).' jour';
                   }  
                    else if($date_difference>=3600 and $date_difference<86400)
                    { 
                        return 'il ya '.floor($date_difference/3600).' h';
                    }
                    else if($date_difference<3600)
                    {
                        return 'il ya '.floor($date_difference/60).' min';
                    }
             
     }

     public function separation_string($chaine){
         return str_replace(' ','-',$chaine);
     }
 }