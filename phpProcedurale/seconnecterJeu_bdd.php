<?php
session_start();

$MDP = $_POST['MDP'];
$adrMail = $_POST['adrMail'];

try {
    $link = new PDO('mysql:host=localhost;dbname=ppem2l;charset=utf8', 'root', '');
    $stmt = $link->prepare("SELECT * FROM membresJeu WHERE adrMail = :adrMail AND MDP = :MDP");

    $stmt -> execute(array(
        ':adrMail' => $adrMail,
        ':MDP' => $MDP,
        ));

    var_dump($MDP, $adrMail, $stmt->rowCount());
    if ( $stmt->rowCount() > 0) {
        
        $res = $stmt->fetch();
        $_SESSION['id'] = $res['id'];
        $_SESSION['adrMail'] = $res['adrMail'];
        $_SESSION['nom'] = $res['nom'];
        $_SESSION['prenom'] = $res['prenom'];
        $_SESSION['MDP'] = $res['MDP'];
        $_SESSION['sexe'] = $res['sexe'];
        $_SESSION['age'] = $res['age'];
        $_SESSION['jeu1'] = $res['jeu1'];
        $_SESSION['jeu2'] = $res['jeu2'];
        $_SESSION['jeu3'] = $res['jeu3'];
        $_SESSION['jeu4'] = $res['jeu4'];
        $_SESSION['jeu5'] = $res['jeu5'];
        $_SESSION['jeu6'] = $res['jeu6'];
        $_SESSION['jeu7'] = $res['jeu7'];
        $_SESSION['jeu8'] = $res['jeu8'];
        $_SESSION['jeu9'] = $res['jeu9'];
        $_SESSION['jeu10'] = $res['jeu10'];
        $_SESSION['jeu11'] = $res['jeu11'];
        $_SESSION['jeu12'] = $res['jeu12'];
        $_SESSION['jeu13'] = $res['jeu13'];
        $_SESSION['jeu14'] = $res['jeu14'];
        $_SESSION['jeu15'] = $res['jeu15'];
        $_SESSION['jeu16'] = $res['jeu16'];
        $_SESSION['jeu17'] = $res['jeu17'];
        $_SESSION['jeu18'] = $res['jeu18'];
        $_SESSION['jeu19'] = $res['jeu19'];
        $_SESSION['jeu20'] = $res['jeu20'];
        

    }

    } catch (PDOException $e) {
          die('Erreur !: ' . $e->getMessage());
    }header("Location: profil.php");
?>