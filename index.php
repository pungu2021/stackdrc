<?php
session_start();
    require "./Controllers/ControllerBloc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stackdrc.com</title>
    <link rel="stylesheet" href="Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="Public/css/style.css">
    <link rel="shortcut icon" href="public/images/stackdrc.png">
</head>
<body>
    <header>
          <span class="stack">Stack</span><span class="drc-1">d</span><span class="drc-2">r</span><sapn class="drc-3">c</sapn>
          <nav>
              <ul>
                  <li><a href="#">Formation</a></li>
                  <li><a href="">Tutoriels</a></li>
                  <li><a href="forum">Forum</a></li>
                  <li><a href="">Apropos</a></li>
                  <li><a href="">Contact</a></li>
              </ul>
          </nav>
    </header>
    <div class="main">
        <figure>
            <img src="Public/images/myform.jpg" alt="" class="stackdrc-index-image">
        </figure>
        <div class="stackdrc-index-bloc-down-picture">
             <p class="stackdrc-titre-gras">La meilleure plateforme en rdc pour se former en ligne <br>
                 <span class="apprenez">Apprenez à coder , Découvrez les compétences de demain </span><br>
                 <button class="stackdrc-btn">Inscrivez-vous</button>

            <p>
        </div>
        <div class="container center-me">
            <span class="stack-titre-presentation"> Une formation qui change votre vie</span>
            <div class="row">
                <div class="col-lg-6">
                    <figure>
                        <img src="Public/images/3.jpg" alt="" class="image-stack-index-presentation">
                    </figure>
                    <span class="presentaion">Apprendre avec des projets réels</span>
                    <p class="text-presentation">
                        Maîtrisez les compétences rechercher par les entreprises , travailler avec équipe ou un groupe 
                        des gens passionné de monde de numerique et devenir independant(e)
                    </p>
                </div>
                <div class="col-lg-6">
                    <figure>
                        <img src="public/images/9.jpg" alt=""  class="image-stack-index-presentation">
                    </figure>
                    <span class="presentaion"> Pas de prerequis pour debuter la formation</span>
                    <p class="text-presentation">
                        vous ne deveez avoir des connaissances dans le domaine pour debuter une formation 
                        , nous vous apprenons de zéro niveau à un niveau plus élèvé qu'avant
                    </p>
                </div>
            </div>
        </div>
          <div class="stackdrc-presenta">
                 <figure>
                     <img src="public/images/2.jpg" alt="" class="p-image">  
                 </figure>
                 <div class="p-bloc">
                      <span class="decouvre">Découvrez Stack-drc</span>
                       <a href="https://www.youtube.com/watch?v=sXXLLUxT_b0"><img src="public/images/bu.png" alt="" class="play"> </a>
                 </div>
                
          </div>
          <div class="container mt-top">
              <div class="row">
                 <div class="col-lg-6">
                    <figure>
                        <img src="public/images/bingo.png" alt="" class="com-p">
                    </figure>
                 </div>
                 <div class="col-lg-6">
                         <span class="stack-titre-presentation"> Pédagogie & compétences professionnelles</span>
                         <p  class="txto">
                             La formation de la plateforme stackdrc est basée sur une pédagogie active 
                             via la réalisation de projets concrets  ou réels.
                             apprendre selon votre rythme , chaque semaine vous aurez un mentor qui sera 
                             là pour vous aidez à vous ameliorez du jour au jour , après une formation 
                             intense , vous serez un bon développeur.se sur le marcher.
                         </p>
                         <p class="txto">
                             c'est la qualité de nos formations qui nous differencie aux autres plateforme 
                         </p>
                 </div>
              </div>
          </div>
        <div class="container-fluid center-me" > 
           <span class="stack-titre-presentation"> Notre bloc </span>
               <div class="stackdrc-bloc-flex-index">
                   <?php foreach($data as $donne){?>
                     <div class="mon-bloc">
                      <a href="<?= $mybloc->separation_string($donne["titre"]).'-'.$donne["id"] ?>">
                         <div class="stack-bloc-index">
                             <figure>
                                   <img src="public/image/<?= $donne["photo"] ?>" alt="language" class="icon-stackdrc">
                             </figure>
                                <span class="stack-titre"><?= $donne["titre"] ?></span>
                             <p class="txt">
                                   <?= $donne["contenu"] ?>
                             </p>
                             <div class="stack-down-barre">
                                 <?php echo $mybloc->ilya(date("Y-m-d H:i:s"), $donne["date_pub"]) ?>
                             </div>
                         </div>
                        </a>
                       </div>
                   <?php }?>
               </div>
              
        </div>
        <!-- formulaire -->
            <div class="stackdrc-index">
                    <form action="" class="myform">
                        <input type="search" name="key" id="" placeholder="Recherche" class="textbox-recherche">
                    </form>
                    <button class="inscrire">S'inscrire</button>
                    <button class="connexion">Connexion</button>
            </div>
         
        <!-- Rejoindre la plateforme -->
        <div class="light">
        <div class="container l">
            <div class="row">
                <div class="col-lg-6">
                    <figure align="center">
                        <img src="public/images/aba.png" alt="" class="rejoindre-image">
                    </figure>
                </div>
                <div class="col-lg-6">
                      <span class="stack-titre1 centre">Rejoignez-nous</span>
                      <p class="txt1 centre">
                                vous etes congolaise et residez vous à kinshasa  <br> la capitale de la république 
                                démocratique du congo <br>  Voulez vous rejoindre  l'équipe de la plateforme stackdrc <br>
                                 juste un clique sur le button en dessous pour nous rejoindre. <br>
                                <button  class="btn-rejoindre">Rejoignez nous </button>
                      </p>
                </div>
            </div>
        </div>
     </div>
            <div class="container">
                <p class="plateforme"> Des plateformes de toutes tailles nous font confiance</p>
            </div>
            <figure align="center">
                <img src="public/images/t1.png" alt="" class="platefome-image2">
                <img src="public/images/t2.png" alt="" class="platefome-image2">
                <img src="public/images/t3.png" alt="" class="platefome-image2">
                <img src="public/images/243.png" alt="" class="platefome-image21">
                <img src="public/images/afr.jpg" alt="" class="platefome-image21">
                <img src="public/images/cod.png" alt="" class="platefome-image2">
            </figure>

        <!-- Transformer-->

        <div class="light">
        <div class="container l">
            <div class="row">
                <div class="col-lg-6">
                         <span class="stack-titre1 centre">Transformez votre vie grâce à l'apprentissage</span>
                      <p class="txt1 centre">
                        Les participants du monde entier se lancent dans de nouvelles 
                        carrières, progressent dans leur domaine et enrichissent leur vie.
                        pourquoi pas vous aussi , ce n'est pas trop tard pour apprendre <br>
                        <button  class="btn-rejoindre">Découvrez comment </button>
                      </p>
                </div>
                <div class="col-lg-6">
                    <figure align="center">
                        <img src="public/images/tr1.jpg" alt="" class="rejoindre-image">
                    </figure>
                </div>
            </div>
        </div>
     </div>

        <!-- -->
         <footer >
             <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-5">
                    <span class="stack">Stack</span><span class="drc-1">d</span><span class="drc-2">r</span><sapn class="drc-3">c</sapn>
                      <p class="stackdrc-footer-text">
                            Après avoir appris sur Internet , université , avec des équipes qualifié , le plus important est de 
                            partager aussi à son tour , c'est pourquoi la platerfome a été créer , 
                            nous sommes Passionné par le web depuis longtemps , maintenant nous aimons partager nos
                            compétences et nos découvertes avec les personnes qui ont cette même passion pour le web ou programmation
                      </p>
                      <figure>
                          <img src="public/images/github.png" alt="" class="platefome-image">
                          <img src="public/images/fb.png" alt="" class="platefome-image">
                          <img src="public/images/wh.png" alt="" class="platefome-image">
                          <img src="public/images/tw.png" alt="" class="platefome-image">
                      </figure>
                 </div>
                 <div class="col-lg-3 tc">
                     <span class="footer-text-titre">Liens utiles</span>
                     <ul>
                          <li><a href="">Formation</a></li>
                          <li><a href="">Tutoriels</a></li>
                           <li><a href="">Forum</a></li>
                      </ul>
                 </div>
                 <div class="col-lg-4 tc">
                       <span class="footer-text-titre">Nous Contacter</span>
                      <ul>
                          <li><a href=""><img src="public/images/mes.png" alt="" class="image-icon-footer"> Email</a></li>
                          <li><a href="https://discord.gg/WHseKQVp"><img src="public/images/tchat.png" alt="" class="image-icon-footer">Tchat</a></li>
                           <li><a href=""><img src="public/images/fb1.png" alt=""class="image-icon-footer">Facebook</a></li>
                           <li><a href=""><img src="public/images/phone.png" alt=""class="image-icon-footer">Contact</a></li>
                          <li><a href=""><img src="public/images/about.png" alt=""class="image-icon-footer">Apropos</a></li>
                      </ul>
                 </div>
             </div>
          </div>
       </footer>
       <div class="developper">
           <span>Développer avec <span style="color:tomato">♥</span> by <span style="color:#029dbe">carlos pungu</span> &copy copyright 2019 - <?php echo date("Y")?></span>
       </div>
    </div>
</body>
</html>