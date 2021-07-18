<?php require "partials/head.php" ?>
     <div class="container mt-top">
            <div class="row">
                <div class="col-lg-2">
                    <a href="login.php"> <button class="forum-btn-creer-topic">Créer un topic</button></a>
                </div>
                <div class="col-lg-10">
                      <form action="recherche" method="Get">
                         <input type="text" name="key" id="" class=" forum-input" placeholder="recherche un topic ">
                      </form>
                </div>
            </div>
            <div class="row">
                 <div class="col-lg-8">
                     <div class="langages">
                          <span>Langages </span>
                          <?php
                          $tab=["algorithme","php","javascript","html","css","nodejs","Angular","ionic","wordpress","mysql","c#","langage c","java","vbnet","python"];
                              for($i=0;$i<count($tab);$i++){?>
                                <a href="">
                                    <div class="forum-topic">
                                        <?= $tab[$i];?>
                                    </div>
                                </a>
                              <?php }?>
                     </div>
                 </div>
                 <div class="col-lg-4">
                      <div class="langages">
                           <span>derniers commentaires</span>
                           <?php
                          $tab=["php","javascript","html","css","nodejs","Angular","ionic","wordpress","mysql","c#","langage c","java","vbnet","python"];
                              for($i=0;$i<count($tab);$i++){?>
                                <a href="">
                                    <div class="forum-topic">
                                        <?= $tab[$i];?>
                                    </div>
                                </a>
                              <?php }?>
                      </div>
                 </div>
            </div>
     </div>
</body>
</html>