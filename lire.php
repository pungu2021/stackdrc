<?php
require "header.php";
require "Controllers/ControllerLireArticle.php";
?>
 <div class="container lire-top ">
      <div class="row">
            <div class="col-lg-8">
                  <h2> <?= $datas[0]["titre"];?> </h2>
                  <div>
                      <figure>
                          <img src="Public/images/aba.png" alt="publier par" class="stackder-lire-image-publier">
                          <span class="stack-lire-nom-auteur">Par <span style="color: #029dbe;"><?= $datas[0]["auteur"];?> </span></span> 
                          <span class="stack-lire-heure"><?= $mybloc->ilya(date("Y-m-d H:i:s"), $datas[0]["date_pub"]) ?></span>
                      </figure>
                  </div>
                  <figure class="stack-lire-barre-sociaux">
                      <img src="Public/images/wh.png" alt="" class="stack-lire-icon-sociaux">
                      <img src="Public/images/fb.png" alt="" class="stack-lire-icon-sociaux">
                      <img src="Public/images/tw.png" alt="" class="stack-lire-icon-sociaux">
                      <img src="Public/images/github.png" alt="" class="stack-lire-icon-sociaux">
                  </figure>
                  <figure>
                      <img src="public/image/<?= $datas[0]["photo"];?> " alt="photo article" class="stack-lire-image">
                  </figure>
                  <p class="stack-lire-contenu">
                        <?= $datas[0]["contenu"];?> 
                  </p>
                  <span class="stack-lire-commentaire">12 Commentaires</span>
                  <?php 
                      if(isset($_SESSION["stackdrc_gmail"]) And !empty($_SESSION["stackdrc_gmail"])){ ?>
                  <form id="sub-form-1" method="POST">
                      <input type="text" name="auteur_commentaire" id="auteur_commentaire" value="<?=$data_source[0]["pseudo"] ?>" class="hide-input">
                      <input type="email" name="gmail_commentaire" id="gmail_commentaire" value="<?=$data_source[0]["gmail"] ?>" class="hide-input">
                      <textarea name="message" id="message_commenatire" cols="30" rows="10" class="form-control"></textarea>
                      <button  class="btn-lire-envoyer" id="id_com" name="id_commenaire" value="<?= $_GET["id"];?> ">Envoyer</button>
                  </form>
                   <?php } 
                       else{
                         echo '<div class="participer"> Veux tu participer aux commentaires ? veuillez <a href="inscription">S\'iscrire</a> ou <a href="login">Connecte-toi</a></div>';
                         //$_SESSION["stackdrc_gmail"]
                       }
                   ?>
                  <?php 
                  /** <?php ?> */
                   $i=0;
                      foreach($commenatires as $com){
                          $myPicture=photo($com["gmail"]);
                    
                  ?>
                     <figure>
                         <img src="Public/imageUser/<?= $myPicture[0]["photo"] ?>" alt="" class="stackder-lire-image-publier">
                         <span style="color: #029dbe;font-family:Arial, Helvetica, sans-serif;font-size:17px;font-weight:bold;margin-left:20px"> <?= $com["auteur"]?></span>
                     </figure>
                     <p class="stack-lire-message-reondre-commentaire">
                         <span class="enswer"><?= $mybloc->ilya(date("Y-m-d H:i:s"), $com["date_pub"]) ?> <a href="#<?= 'slider-'.$i ?>" class="<?= 'slider-'.$i ?>"> Repondre <img src="Public/images/left.png" alt="repondre" class="reply-lire-icon"></a></span> <br>
                         <?= $com["message_com"]?>
                     </p>
                     <div class="stack-lire-div-reponse">
                         
                            <!-- REPONDRE -->
                            <?php 
                               $reponses=$mybloc->getReponse($com["id"]);
                                foreach($reponses as $reponse ){
                                    $mPicture=photo($reponse["gmail"]);    
                                ?>
                                
                             <figure>
                                <img src="Public/imageUser/<?= $mPicture[0]["photo"] ?>" alt="" class="stackder-lire-image-publier">
                                <span style="color: #029dbe;font-family:Arial, Helvetica, sans-serif;font-size:17px;font-weight:bold;margin-left:20px">by <?= $reponse["auteur"]?> </span>
                            </figure>
                            <p class="stack-lire-message-reondre-commentaire">
                                <span class="enswer"><?= $mybloc->ilya(date("Y-m-d H:i:s"), $reponse["date_pub"]) ?>  <a href="#<?= 'slider-'.$i ?>" class="<?= 'slider-'.$i ?>"> Repondre <img src="Public/images/left.png" alt="repondre" class="reply-lire-icon"></a></span> <br>
                                <?= $reponse["message_rep"]?> 
                            </p>
                             <?php }?>
                             <!--FIN RPONDRE  -->
                             <?php 
                             if(isset($_SESSION["stackdrc_gmail"]) And !empty($_SESSION["stackdrc_gmail"])){ ?>
                          <form  method="POST" id="<?= 'slider-'.$i ?>" class="<?= 'hide-'.$i ?>">
                                <input type="text" name="auteur" id="auteur-<?= $i ?>" value="<?=$data_source[0]["pseudo"] ?>" class="hide-input">
                                <input type="email" name="gmail" id="gmail-<?= $i ?>" value="<?=$data_source[0]["gmail"] ?>" class="hide-input">
                                <textarea name="message" id="message-<?= $i ?>" cols="30" rows="10" class="form-control"></textarea>
                                <button  class="btn-lire-envoyer" id="reponseCom-<?= $i ?>" value="<?= $com["id"]?>">Envoyer</button>
                          </form>
                             <?php }?>
                     </div>
                  <?php 
                     $i++;}
                  ?>
            </div>
            <div class="col-lg-4">
                    <div class="stack-lire-bloc-de-recherche">
                        <div>Recherche</div>  
                            <form action="" method="GET">
                                <input type="search" name="key" id="" placeholder="Recherche" class="form-control stack-lire-text">
                                <button class="stack-lire-btn">Recherche</button>
                            </form>
                    </div>
                    <p class="cadeau">Cadeau de bienvenue</p> 
                    <div class="bloc-lire-aside">
                        <p class="stack-lire-rejoindre">
                            Rejoins vite plus de 500 codeurs et reçois gratuitement le livre 
                        </p>
                        <figure>
                            <img src="public/images/livre.png" alt="" class="stack-lire-livre">
                        </figure> 
                            <span style="font-family: Arial, Helvetica, sans-serif; font-size:20px;">Inscris-toi</span>
                        <form action="">
                            <input type="text" name="" id="" placeholder="Prénom" class="form-control mt-2">
                            <input type="email" name="" id="" placeholder="email" class="form-control mt-2">
                            <button  class="btn-lire-bonus">Telecharge</button>
                        </form>
                    </div>
            </div>
      </div>
 </div>
 <!-- Bloc afficher reponse par ajax-->
 <div class="reponseAjax">
   
 </div>
<?php
require "footer.php";
?>