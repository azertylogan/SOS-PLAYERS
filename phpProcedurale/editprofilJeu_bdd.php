<?php 
session_start();
	// include 'private.php'; // Connexion to the BDD	$sql = "SELECT * FROM membres WHERE id = ".$id;

	$id = $_POST['id'];
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
	/*$sql = "SELECT * FROM membres WHERE id = ".$id;
	$stmt = $link -> prepare($sql);
	$stmt->execute();

	$result = $stmt->fetch();

	$id = $_POST['id'];*/
	$link = new PDO('mysql:host=localhost;dbname=ppem2l;charset=utf8', 'root', '');
	$sql = "UPDATE membresjeu SET nom = :nom, prenom = :prenom, adrMail = :adrMail, MDP = :MDP, jeu1 = :jeu1, jeu2 = :jeu2, jeu3 = :jeu3, jeu4 = :jeu4, jeu5 = :jeu5, jeu6 = :jeu6, jeu7 = :jeu7, jeu8 = :jeu8, jeu9 = :jeu9, jeu10 = :jeu10, jeu11 = :jeu11, jeu12 = :jeu12, jeu13 = :jeu13, jeu14 = :jeu14, jeu15 = :jeu15, jeu16 = :jeu16, jeu17 = :jeu17, jeu18 = :jeu18, jeu19 = :jeu19, jeu20 = :jeu20, WHERE id = :id";



	$stmt = $link-> prepare($sql);
	$stmt -> execute(array(
		'id' => $id['id'],
		'nom' => $_POST['nom'],
		'prenom' => $_POST['prenom'],
		'adrMail' => $_POST['adrMail'],
		'MDP' => $_POST['MDP'],
		'jeu1' => $_POST['jeu1'],
		'jeu2' => $_POST['jeu2'],
		'jeu3' => $_POST['jeu3'],
		'jeu4' => $_POST['jeu4'],
		'jeu5' => $_POST['jeu5'],
		'jeu6' => $_POST['jeu6'],
		'jeu7' => $_POST['jeu7'],
		'jeu8' => $_POST['jeu8'],
		'jeu9' => $_POST['jeu9'],
		'jeu10' => $_POST['jeu10'],
		'jeu11' => $_POST['jeu11'],
		'jeu12' => $_POST['jeu12'],
		'jeu13' => $_POST['jeu13'],
		'jeu14' => $_POST['jeu14'],
		'jeu15' => $_POST['jeu15'],
		'jeu16' => $_POST['jeu16'],
		'jeu17' => $_POST['jeu17'],
		'jeu18' => $_POST['jeu18'],
		'jeu19' => $_POST['jeu19'],
		'jeu20' => $_POST['jeu20'],
		
	));
	$_SESSION['nom'] = $_POST['nom'];
		$_SESSION['prenom'] = $_POST['prenom'];
		$_SESSION['adrMail'] = $_POST['adrMail'];
		$_SESSION['MDP'] = $_POST['MDP'];
		$_SESSION['jeu1'] = $_POST['jeu1'];
		$_SESSION['jeu2'] = $_POST['jeu2'];
		$_SESSION['jeu3'] = $_POST['jeu3'];
		$_SESSION['jeu4'] = $_POST['jeu4'];
		$_SESSION['jeu5'] = $_POST['jeu5'];
		$_SESSION['jeu6'] = $_POST['jeu6'];
		$_SESSION['jeu7'] = $_POST['jeu7'];
		$_SESSION['jeu8'] = $_POST['jeu8'];
		$_SESSION['jeu9'] = $_POST['jeu9'];
		$_SESSION['jeu10'] = $_POST['jeu10'];
		$_SESSION['jeu11'] = $_POST['jeu11'];
		$_SESSION['jeu12'] = $_POST['jeu12'];
		$_SESSION['jeu13'] = $_POST['jeu13'];
		$_SESSION['jeu14'] = $_POST['jeu14'];
		$_SESSION['jeu15'] = $_POST['jeu15'];
		$_SESSION['jeu16'] = $_POST['jeu16'];
		$_SESSION['jeu17'] = $_POST['jeu17'];
		$_SESSION['jeu18'] = $_POST['jeu18'];
		$_SESSION['jeu19'] = $_POST['jeu19'];
		$_SESSION['jeu20'] = $_POST['jeu20'];
	header("Location: profil.php");
 ?>