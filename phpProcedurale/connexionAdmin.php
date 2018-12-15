
<?php
include "nav.php";
session_start();
if(isset($_POST["bouton"]))
{
  $mdp = $_POST["mdp"];
  $id = mysqli_connect("localhost","root","","ppem2l");
  if(!$id){
    echo "Erreur de connexion";
  }else{
    $req = "select * from admin where mdp='$mdp'";
    $res = mysqli_query($id,$req);
    if(mysqli_num_rows($res)>0)
    {
      $_SESSION["log"] = "ok";

      $req = "insert into connexion values (null, null, )"
      $r = mysql_query
      header("location:pageAdmin.php");
    }else $erreur = "Erreur de mot de passe";
  }
}
?>

<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/inscriptionJeu.css">
    <title> Admin </title>
  </head>
  <body class="Background1">

    <div class="titre">
      <h1> Connexion Administrateur </h1>
      <br/> <br/>
      <?php if(isset($erreur)) echo "<h2>$erreur;</h2>" ?>
      <form action="connexionAdmin.php" method="post">
        <input type="password" name="mdp" />
        <br /><br />
        <input type="submit" value="Connecter" name="bouton" />
      </form>
    </div>
