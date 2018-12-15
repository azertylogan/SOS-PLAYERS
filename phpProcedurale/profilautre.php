<?php
session_start();
    if (!isset($_SESSION["id"])) {
        header("Location: seconnecterJeu.php");
    }

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/inscriptionJeu.css">
    <title>Profil recherché</title>
</head>
<body class="background">
    <?php
            include "nav.php";
         ?>
<div class="contrainer">
    <div class="row">
        <div class="col-sm">
            <center><h1>Les jeux de l'utilisateur recherché</h1></center>
            <center><a href="profil.php">Retourner sur mon profil</a></center>

        </div>
    </div>
        <div class="row">
            <div class="col-sm">
                <table class="table">
                    <tr>
                        <th>Battlefield</th>
                        <th>Call of Duty</th>
                        <th>C.S.G.O</th>
                        <th>Diablo 3</th>
                        <th>Dofus</th>
                        <th>F1 2018</th>
                        <th>Fallout 76</th>
                        <th>FIFA 19</th>
                        <th>Fortnite</th>
                        <th>Halo</th>
                        <th>Hearstone</th>
                        <th>Heroes of the Storm</th>
                        <th>League of Legends</th>
                        <th>Monster Hunter W</th>
                        <th>Overwatch</th>
                        <th>PUBG</th>
                        <th>Rainbow Six Siege</th>
                        <th>Star Craft 2</th>
                        <th>Trackmania Stadium 2</th>
                        <th>W.O.W</th>
                    </tr>
                        <tr>
                            <td><?php if ($_SESSION["jeu1"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                            <td><?php if ($_SESSION["jeu2"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                            <td><?php if ($_SESSION["jeu3"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                            <td><?php if ($_SESSION["jeu4"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                            <td><?php if ($_SESSION["jeu5"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                            <td><?php if ($_SESSION["jeu6"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                            <td><?php if ($_SESSION["jeu7"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                            <td><?php if ($_SESSION["jeu8"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                            <td><?php if ($_SESSION["jeu9"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                            <td><?php if ($_SESSION["jeu10"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                            <td><?php if ($_SESSION["jeu11"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                            <td><?php if ($_SESSION["jeu12"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                            <td><?php if ($_SESSION["jeu13"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                            <td><?php if ($_SESSION["jeu14"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                            <td><?php if ($_SESSION["jeu15"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                            <td><?php if ($_SESSION["jeu16"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                            <td><?php if ($_SESSION["jeu17"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                            <td><?php if ($_SESSION["jeu18"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                            <td><?php if ($_SESSION["jeu19"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                            <td><?php if ($_SESSION["jeu20"] != "NeJouePas" && "Ne joue pas") {echo "J'y joue";} else{echo "Ne joue Pas";} ?></td>
                        </tr>
                </table>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  </body>
</html>