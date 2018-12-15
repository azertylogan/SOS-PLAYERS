<!DOCTYPE html>
   <html>
      <head>
         <title></title>
         <meta charset="utf-8">
         <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="css/inscriptionJeu.css">
         <title>Inscription</title>
      </head>
      <body class="background">

<div >
         <?php
            include "nav.php";
         ?>
          <form action="inscriptionJeu_bdd.php" method="POST">
          <div class="haut">
         <center>

    <div class="text-light">
      <div class="form-row" >
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
        <option>15-18</option>
        <option>19-25</option>
        <option>25+</option>
      </select>

    </div>
  </div>
</div>
</div>

  <br>
<center><div class="form-row">
      <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>Battlefield</h3></label>
        <select id="inputState" class="form-control" name="jeu1">
          <option selected value="NeJouePas">Ne joue pas</option>
          <option value="Battlefield">J'y joue</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>Call of Duty</h3></label>
        <select class="form-control" name="jeu2">
          <option selected value="NeJouePas">Ne joue pas</option>
          <option value="Call of Duty">J'y joue</option>
        </select>
      </div>
    <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>C.S.G.O</h3></label>
        <select class="form-control" name="jeu3">
          <option selected value="NeJouePas">Ne joue pas</option>
          <option value="C.S.G.O">J'y joue</option>
        </select>
      </div>
    <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>Diablo 3</h3></label>
        <select id="inputState" class="form-control" name="jeu4">
          <<option selected value="NeJouePas">Ne joue pas</option>
          <option value="Diablo 3">J'y joue</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>Dofus</h3></label>
        <select id="inputState" class="form-control" name="jeu5">
          <option selected value="NeJouePas">Ne joue pas</option>
          <option value="Dofus">J'y joue</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>F1 2018</h3></label>
        <select id="inputState" class="form-control" name="jeu6">
          <<option selected value="NeJouePas">Ne joue pas</option>
          <option value="F1 2018">J'y joue</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>Fallout 76</h3></label>
        <select id="inputState" class="form-control" name="jeu7">
          <option selected value="NeJouePas">Ne joue pas</option>
          <option value="Fallout 76">J'y joue</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>FIFA 19</h3></label>
        <select id="inputState" class="form-control" name="jeu8">
          <option selected value="NeJouePas">Ne joue pas</option>
          <option value="FIFA 19">J'y joue</option>
        </select>
      </div>
    <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>Fortnite</h3></label>
        <select id="inputState" class="form-control" name="jeu9">
          <option selected value="NeJouePas">Ne joue pas</option>
          <option value="Fortnite">J'y joue</option>
        </select>
      </div>
    <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>Halo</h3></label>
        <select id="inputState" class="form-control" name="jeu10">
          <option selected value="NeJouePas">Ne joue pas</option>
          <option value="Halo">J'y joue</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>Hearstone</h3></label>
        <select id="inputState" class="form-control" name="jeu11">
          <option selected value="NeJouePas">Ne joue pas</option>
          <option value="Hearstone">J'y joue</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>Heroes of the Storm</h3></label>
        <select id="inputState" class="form-control" name="jeu12">
          <option selected value="NeJouePas">Ne joue pas</option>
          <option value="Heroes of the Strom">J'y joue</option>
        </select>
      </div>
    <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>League of Legends</h3></label>
        <select id="inputState" class="form-control" name="jeu13">
          <option selected value="NeJouePas">Ne joue pas</option>
          <option value="League of legends">J'y joue</option>
        </select>
      </div>
    <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>Monster Hunter W</h3></label>
        <select id="inputState" class="form-control" name="jeu14">
          <option selected value="NeJouePas">Ne joue pas</option>
          <option value="Monster Hunter W">J'y joue</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>Overwatch</h3></label>
        <select id="inputState" class="form-control" name="jeu15">
          <option selected value="NeJouePas">Ne joue pas</option>
          <option value="Overwatch">J'y joue</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>PUBG</h3></label>
        <select id="inputState" class="form-control" name="jeu16">
          <option selected value="NeJouePas">Ne joue pas</option>
          <option value="PUBG">J'y joue</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>Rainbow Six Siege</h3></label>
        <select id="inputState" class="form-control" name="jeu17">
          <option selected value="NeJouePas">Ne joue pas</option>
          <option value="Rainbow Six Siege">J'y joue</option>
        </select>
      </div>
    <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>Star Craft 2</h3></label>
        <select id="inputState" class="form-control" name="jeu18">
          <option selected value="NeJouePas">Ne joue pas</option>
          <option value="Star Craft 2">J'y joue</option>
        </select>
      </div>
    <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>Trackmania Stadium 2</h3></label>
        <select id="inputState" class="form-control" name="jeu19">
          <option selected value="NeJouePas">Ne joue pas</option>
          <option value="Trackmania Stadium">J'y joue</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="inputState" style="color: white"><h3>W.O.W</h3></label>
        <select id="inputState" class="form-control" name="jeu20">
          <option selected value="NeJouePas">Ne joue pas</option>
          <option value="W.O.W">J'y joue</option>
        </select>
      </div></center>
      <button type="submit" class="btn btn-primary" style="margin-left: 35.5%">Inscription</button></div>
</form></FONT></center>

      </div>
      </body>
   </html>
