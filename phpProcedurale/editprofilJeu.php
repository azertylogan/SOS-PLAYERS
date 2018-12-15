<?php
session_start();
    if (!isset($_SESSION["id"])) {
        header("Location: seconnecterJeu.php");
      }
    ?>
<!doctype html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/private.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Editon profil</title>
    </head>
  <body class="background">
<?php include "nav.php"; ?>
<br>
    <center><h2>Vos informations personnels</h2></center>
      <center><form action="editprofilJeu_bdd.php" method="post">
        <br>
        <div class="marge">
        <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>"/>
        <label for="nom">Nom :</label> 
        <input type="text" name="nom" value="<?php echo $_SESSION['nom']; ?>"/><br><br>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" value="<?php echo $_SESSION['prenom']; ?>"/><br><br>
        <label for="adrMailail">Email :</label>
        <input type="text" name="adrMail" value="<?php echo $_SESSION['adrMail']; ?>"/><br><br>
        <label for="MDP">Mot de passe :</label>
        <input type="text" name="MDP" value="<?php echo $_SESSION['MDP']; ?>"/><br><br>
        
        <br>
        <?php 
          include "inscriptionJeu2.php";
        ?>
      </form>
    </center><center><input value="Modifier" name="editprofilJeu_bdd" type="submit"><?php echo ' ' ?><input type="button" value="Retour" onClick="window.history.back()"></center>
    <br>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  </body>
</html>