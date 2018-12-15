<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/private.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Recherche</title>
    </head>
  <body class="background">
<?php include "nav.php"; ?>
<?php
try
{
 $bdd = new PDO("mysql:host=localhost;dbname=ppem2l", "root", "");
 $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
  die("Une erreur a été trouvé : " . $e->getMessage());
}
$bdd->query("SET NAMES UTF8");

if (isset($_GET["s"]) AND $_GET["s"] == "Rechercher")
{
 $_GET["terme"] = htmlspecialchars($_GET["terme"]);
 $terme = $_GET["terme"];
 $terme = trim($terme);
 $terme = strip_tags($terme);

if (isset($terme))
 {
   $terme = strtolower($terme);
   $select_terme = $bdd->prepare('SELECT * FROM membresJeu WHERE nom LIKE "'.$terme.'%" OR prenom LIKE "'.$terme.'%" OR age LIKE "'.$terme.'%" OR jeu1 LIKE "'.$terme.'%" OR jeu2 LIKE "'.$terme.'%" OR jeu3 LIKE "'.$terme.'%" OR jeu4 LIKE "'.$terme.'%" OR jeu5 LIKE "'.$terme.'%" OR jeu6 LIKE "'.$terme.'%" OR jeu7 LIKE "'.$terme.'%" OR jeu8 LIKE "'.$terme.'%" OR jeu9 LIKE "'.$terme.'%" OR jeu10 LIKE "'.$terme.'%" OR jeu11 LIKE "'.$terme.'%" OR jeu12 LIKE "'.$terme.'%" OR jeu13 LIKE "'.$terme.'%" OR jeu14 LIKE "'.$terme.'%" OR jeu15 LIKE "'.$terme.'%" OR jeu16 LIKE "'.$terme.'%" OR jeu17 LIKE "'.$terme.'%" OR jeu18 LIKE "'.$terme.'%" OR jeu19 LIKE "'.$terme.'%"  OR jeu20 LIKE "'.$terme.'%"');
   $select_terme->execute(array("%".$terme."%", "%".$terme."%"));
 }
 else
 {
  $message = "Vous devez entrer votre requete dans la barre de recherche";
 }
}
  while($terme_trouve = $select_terme->fetch())
  {
    ?><table class="table table-dark">
  <thead>
    <tr>
      <th scope="col"><?php echo "<h2><p>".$terme_trouve['nom']."</p></h2>"?></th>
      <th scope="col"><?php echo "<h2><p>".$terme_trouve['prenom']."</p></h2>"?></th><p>
      <th scope="col"><?php echo "<h2><p>".$terme_trouve['age']."</p></h2>"?></th><p>
      <th scope="col"><a href="profilautre"><h2>Voir <strong></strong> profil</h2></a></th>
    </tr>
  </thead>
</table><?php
   
  }
  $select_terme->closeCursor();
   ?>
