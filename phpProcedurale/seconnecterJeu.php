<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/inscriptionJeu.css">
    <title>Index</title>
  </head>
  <?php
      include "nav.php";
  ?>
  <body class="background">
    <div class="haut">
    	<div class="droite">
        <center><h1 class="h3 mb-3 font-weight-normal" style="color:white">Identification</h1></center>
    <form class="form-signin" method="post" action="seconnecterJeu_bdd.php"><center>
      <div class="text-light"><div class="form-row" >
    <div class="form-group col-md-12">
      <input type="email" name="adrMail" id="inputEmail" class="form-control" placeholder="Adresse mail" required autofocus><br>
    </div>
      <br>
      <label for="inputPassword" class="sr-only"></label>
      <input type="password" name="MDP" id="inputPassword" class="form-control" placeholder="Mot de passe" required></center>
      <br>
      <center><button type="submit" class="btn btn-primary btn-lg">Se connecter</button></center>
        <br>
      <center><a href="inscriptionJeu.php" style="color: white">Inscription</a></center>
   
      
    </center>
    
  </div>
</div>
  </body>
</html>