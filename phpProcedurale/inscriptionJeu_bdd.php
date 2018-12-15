<?php
session_start();
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adrMail = $_POST['adrMail'];
$MDP = $_POST['MDP'];
$MDP1 = $_POST['MDP1'];
$sexe = $_POST['sexe'];
$age = $_POST['age'];
$jeu1 = $_POST['jeu1'];
$jeu2 = $_POST['jeu2'];
$jeu3 = $_POST['jeu3'];
$jeu4 = $_POST['jeu4'];
$jeu5 = $_POST['jeu5'];
$jeu6 = $_POST['jeu6'];
$jeu7 = $_POST['jeu7'];
$jeu8 = $_POST['jeu8'];
$jeu9 = $_POST['jeu9'];
$jeu10 = $_POST['jeu10'];
$jeu11 = $_POST['jeu11'];
$jeu12 = $_POST['jeu12'];
$jeu13 = $_POST['jeu13'];
$jeu14 = $_POST['jeu14'];
$jeu15 = $_POST['jeu15'];
$jeu16 = $_POST['jeu16'];
$jeu17 = $_POST['jeu17'];
$jeu18 = $_POST['jeu18'];
$jeu19 = $_POST['jeu19'];
$jeu20 = $_POST['jeu20'];
echo "<pre>";
print_r($_POST);
echo "<\pre>";

if ($MDP == $MDP1) {

    try {
        $connect = new PDO('mysql:host=localhost;dbname=ppem2l;charset=utf8', 'root', '');

        $stmt = $connect->prepare("INSERT INTO membresjeu (id, nom, prenom, adrMail, MDP, sexe, age, jeu1, jeu2, jeu3, jeu4, jeu5, jeu6, jeu7, jeu8, jeu9, jeu10, jeu11, jeu12, jeu13, jeu14, jeu15, jeu16, jeu17, jeu18, jeu19, jeu20)
                              VALUES (NULL, :nom, :prenom, :adrMail, :MDP, :sexe, :age, :jeu1, :jeu2, :jeu3, :jeu4, :jeu5, :jeu6, :jeu7, :jeu8, :jeu9, :jeu10, :jeu11, :jeu12, :jeu13, :jeu14, :jeu15, :jeu16, :jeu17, :jeu18, :jeu19, :jeu20)");
        $stmt ->bindParam(':nom',           $nom);
        $stmt ->bindParam(':prenom',        $prenom);
        $stmt ->bindParam(':adrMail',       $adrMail);
        $stmt ->bindParam(':MDP',           $MDP);
        $stmt ->bindParam(':sexe',          $sexe);
        $stmt ->bindParam(':age',           $age);
        $stmt ->bindParam(':jeu1',          $jeu1);
        $stmt ->bindParam(':jeu2',          $jeu2);
        $stmt ->bindParam(':jeu3',          $jeu3);
        $stmt ->bindParam(':jeu4',          $jeu4);
        $stmt ->bindParam(':jeu5',          $jeu5);
        $stmt ->bindParam(':jeu6',          $jeu6);
        $stmt ->bindParam(':jeu7',          $jeu7);
        $stmt ->bindParam(':jeu8',          $jeu8);
        $stmt ->bindParam(':jeu9',          $jeu9);
        $stmt ->bindParam(':jeu10',         $jeu10);
        $stmt ->bindParam(':jeu11',         $jeu11);
        $stmt ->bindParam(':jeu12',         $jeu12);
        $stmt ->bindParam(':jeu13',         $jeu13);
        $stmt ->bindParam(':jeu14',         $jeu14);
        $stmt ->bindParam(':jeu15',         $jeu15);
        $stmt ->bindParam(':jeu16',         $jeu16);
        $stmt ->bindParam(':jeu17',         $jeu17);
        $stmt ->bindParam(':jeu18',         $jeu18);
        $stmt ->bindParam(':jeu19',         $jeu19);
        $stmt ->bindParam(':jeu20',         $jeu20);


        $stmt->execute();

    } catch (PDOException $e) {
        echo "Erreur de connexion";

    } header("Location: seconnecterJeu.php");
} else header("Location: inscriptionJeu.php");

    ?>
