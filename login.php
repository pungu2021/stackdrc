<?php
  require "header.php";
  require "Controllers/Controllers_Verification_compte.php";
  if(isset($_SESSION["stackdrc_gmail"]) and !empty($_SESSION["stackdrc_gmail"])){
    $_SESSION["stackdrc_gmail"];
  }
  else if(isset($_COOKIE["stackdrc_gmail"])and !empty($_COOKIE["stackdrc_gmail"])){
    $_SESSION["stackdrc_gmail"]=$_COOKIE["stackdrc_gmail"];
}
 if(isset( $_SESSION["stackdrc_gmail"])){
   header("location:index.php");
 }
?>
   <div class="container mt-top">
         <div class="login-bloc">
           <figure style="text-align:center">
               <img src="public/images/stackdrc.png" alt="" width="50px" height="50px">
           </figure>
             <span>Connectez-vous rapidement</span>
             Bienvenue sur stackdrc
             <?=$msg ?>
            <form action="<?= $_SERVER["PHP_SELF"]?>" method="POST">
                  <label for="login">Gmail</label>
                  <input type="email" name="gmail" id="" class="form-control" value="<?php if(isset($_POST['gmail'])) echo $_POST['gmail'] ?>">
                  <label for="login">Password</label>
                  <input type="password" name="pass" id="" class="form-control" value="<?php if(isset($_POST['pass'])) echo $_POST['pass'] ?>">
                  <span class="se-souvenir">  <input type="checkbox" name="check" id=""> <label for="" class="float-left">se souvenir de moi</label></span>
                  <button class="btn-login" name="connexion">Connexion</button> 
                   <div class="deja">
                      <a href="inscription.php">créer un compte </a>
                      <input type="checkbox" name="" id="" checked>
                      <span>J'ai lu et j'accepte les conditions d'utilisation. Conditions de stackdrc</span>
                   </div>
              </form>
         </div>
   </div>
<?php
  require "footer.php";
?>