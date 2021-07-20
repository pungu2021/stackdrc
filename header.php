<?php


session_start();
  if(isset($_SESSION["stackdrc_gmail"]) and !empty($_SESSION["stackdrc_gmail"])){
    $_SESSION["stackdrc_gmail"];
  }
  else if(isset($_COOKIE["stackdrc_gmail"])and !empty($_COOKIE["stackdrc_gmail"])){
    $_SESSION["stackdrc_gmail"]=$_COOKIE["stackdrc_gmail"];
}
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
    <link rel="stylesheet" href="Public/css/stack.css">
    <link rel="shortcut icon" href="Public/images/stackdrc.png">
</head>
<body>
    <header>
          <a href="index.php" class="ax"><span class="stack">Stack</span><span class="drc-1">d</span><span class="drc-2">r</span><span class="drc-3">c</span></a>
          <nav>
              <ul>
                  <li><a href="">Formation</a></li>
                  <li><a href="">Tutoriels</a></li>
                  <li><a href="forum">Forum</a></li>
                  <li><a href="">Apropos</a></li>
                  <li><a href="">Contact</a></li>
              </ul>
          </nav>
    </header>

