<?php
  require "header.php";
  require "Controllers/Controllers_Inscription.php";
?>
   <div class="container mt-top">
         <div class="login-bloc">
           <figure style="text-align:center">
               <img src="public/images/stackdrc.png" alt="" width="50px" height="50px">
           </figure>
             <span>Créer un compte gratuit</span>
             Bienvenue sur stackdrc
             <?= $msg ?>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <label for="login">Pseudo</label>
                  <input type="text" name="pseudo" id="" class="form-control" value="<?php if(isset($_POST['pseudo'])) echo $_POST['pseudo'] ?>">
                  <label for="login">Gmail</label>
                  <input type="email" name="gmail" id="" class="form-control" value="<?php if(isset($_POST['gmail'])) echo $_POST['gmail'] ?>">
                  <label for="login">Impoter une photo</label>
                  <label for="image"><img src="public/images/camera-icon.png" alt="" height="100px" width="100px" style="cursor: pointer;"></label>
                  <input type="file" name="photo" id="image" style="display: none;">
                  <label for="login">Password</label>
                  <input type="password" name="pass1" id="" class="form-control" value="<?php if(isset($_POST['pass1'])) echo $_POST['pass1'] ?>">
                  <label for="login">Confirmer</label>
                  <input type="password" name="pass2" id="" class="form-control" value="<?php if(isset($_POST['pass2'])) echo $_POST['pass2'] ?>">
                  <button class="btn-login" name="inscrire">S'inscrire</button> 
                   <div class="deja">
                      <a href="login.php">déjà un compte ?</a>
                      <input type="checkbox" name="" id="" checked>
                      <span>J'ai lu et j'accepte les conditions d'utilisation. Conditions de stackdrc</span>
                   </div>
              </form>
         </div>
   </div>
<?php
  require "footer.php";
?>