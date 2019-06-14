<?php
include("../architecture/identification.php");

	$nom = str_replace("'", " ", $_POST["nom"]);
	$prenom = str_replace("'", " ", $_POST["prenom"]);
	$email = str_replace("'", " ", $_POST["email"]);
	$password = str_replace("'", " ", $_POST["password"]);
	$telephone1 = str_replace("'", " ", $_POST["phone1"]);
	$telephone2 = str_replace("'", " ", $_POST["phone2"]);
	$adresse1 = str_replace("'", " ", $_POST["adresse"]);
	$adresse2 = str_replace("'", " ", $_POST["adresse2"]);
	$ville = str_replace("'", " ", $_POST["ville"]);
	$code_postal = str_replace("'", " ", $_POST["cp"]);

	//Requête d'intégration dans BDD
	$sql = ("INSERT INTO 3il_utilisateurs (nom, prenom, email, password, telephone1, telephone2, adresse, adresse2, ville, code_postal, role) VALUES ('$nom', '$prenom', '$email', '$password', '$telephone1', '$telephone2', '$adresse1', '$adresse2', '$ville', '$code_postal', '1')");
	//On envoie la requête
	$req = mysqli_query($con, $sql) or die('Erreur SQL !<br>'.mysqli_error($con));


//Fermeture de la connexion
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../CSS/redirection.css">
	<title>Redirection</title>
</head>
<body>
	<form>
		<div class="d-flex justify-content-center"> Inscription terminée, un mail contenant vos identifiants vous a été envoyé.<br><br>Vous allez être redirigé vers la page de connexion.<br><br>Si la redirection ne se fait pas, cliquez
			<a href="../connexion">ici</a>.
		</div>
	</form>
	<?php header("refresh:5;url=../index.php"); ?>
</body>
</html>
