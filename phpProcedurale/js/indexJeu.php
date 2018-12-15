<!DOCTYPE html>
   <html>
      <head>
         <title></title>
         <meta charset="utf-8">
         <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="css/inscriptionJeu.css">
      </head>
      <body class="background">
         
<div >
         <?php
            include "nav.php";
         ?>
         
         <div class="droite">
          <div class="haut">
         <center>
           <form action="inscriptionJeu_bdd.php" method="POST">
    <div class="text-light"><div class="form-row" >
    <div class="form-group col-md-5">
      <label for="inputNom">Nom</label>
      <input required="nom" type="text" class="form-control" name="nom" placeholder="Nom">
    </div>
    <div class="form-group col-md-5">
      <label for="inputPrenom">Prénom</label>
      <input required="prenom" type="text" class="form-control" name="prenom" placeholder="Prénom">
    </div>
    <div class="form-group col-md-5">
      <label for="inputPassword">Mot de Passe</label>
      <input required="password" type="password" class="form-control"  placeholder="Mot de passe" name="MDP">
    </div>
    <div class="form-group col-md-5">
      <label for="inputPassword2">Confirmer le mot de passe</label>
      <input required="password" type="password" class="form-control"  placeholder="Mot de passe" name="MDP1">
    </div>
  <div class="form-group col-md-10">
    <label for="inputEmail">Email</label>
    <input required="adrMail" type="text" class="form-control" name="adrMail" placeholder="Email">
  </div>
    <div class="form-group col-md-10">
      <input type="radio" name="sexe" value="1" />
        <label class="radio" >Homme</label>
      <input  type="radio" name="sexe" value="2" />
        <label class="radio">Femme</label>
    </div>
    <div class="form-group col-md-10">
      <label for="inputAge">Age</label>
      <select id="inputAge" class="form-control" name="age">
        <option>11-14</option>
        <option>14-18</option>
        <option>18-25</option>
        <option>25+</option>
      </select>
    </div>
  </div>
</div>
</div>
<div class="button">
  <br>
<button type="submit" class="btn btn-primary" style="margin-left: 35.5%">Inscription</button></div>
</form></FONT></center>
         
      </div>
      </body>
   </html>