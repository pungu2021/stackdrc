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
    <!-- barre de recherche , inscription  -->
    <div class="stackdrc-index">
         <form action="" class="myform">
              <input type="search" name="key" id="" placeholder="Recherche" class="textbox-recherche">
         </form>
          <?php if(isset( $_SESSION["stackdrc_gmail"]) and !empty( $_SESSION["stackdrc_gmail"])){
                   $monPicture=photo($_SESSION["stackdrc_gmail"]);
                 echo '
                    <figure>
                        <img src="Public/imageUser/'.$monPicture[0]["photo"] .'" alt="" class="stackder-lire-image-publier user-photo">
                   </figure>
                       '; 
          }
          else{
              echo '
              <a href="inscription.php"><button class="inscrire">S\'inscrire</button></a>
              <a href="login.php"><button class="connexion">Connexion</button></a>';
          }
          ?>
       
        </div>
    <script src="public/js/stack.js"></script>
    <script src="public/js/stackdrc.js"></script>
</body>
</html>