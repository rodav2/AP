<?php 

include_once "header.php";
include_once "connexion.php";

$serveur = "localhost";
$base = "auxiliairepuericultrice";
$user = "AP";
$pass = "AP2016";

/*
$mysqli est une nouvelle instance de la classe mysqli
prédéfinie dans php et hérite donc de ses propriétés et méthodes
connexion à la base de données
*/
$mysqli = new mysqli($serveur, $user, $pass, $base);
// si la connexion se fait en UTF-8, sinon ne rien indiquer
$mysqli->set_charset("utf8");
/*
utilisation de la méthode connect_error
qui renvoie un message d'erreur si la connexion échoue
*/
if ($mysqli->connect_error) {
    die('Erreur de connexion ('.$mysqli->connect_errno.')'. $mysqli->connect_error);
}

if ($mysqli->connect_error) {
    echo 'connexion impossible... :'.$mysqli->connect_error;
}

?>

<div class="container-fluid" >
	<div class="row" style="margin-top:5%">
		<div class="col-md-12">
			<div class="page-header text-center" >
				<h1>
					<small>Préparation au concours d'auxiliaire puericultrice</small>
				</h1>
			</div>
		</div>
	</div>
	<div class="row" style="margin-top:10%">
		<div class="col-md-6">			 
			<button type="button" class="btn btn-info btn-block btn-lg"><a href="http://localhost/questionnaire/creation.php" style="color:white;">Ajouter une question</a></button>
		</div>
		<div class="col-md-6">
			<button type="button" class="btn btn-block btn-info btn-lg"><a href="http://localhost/questionnaire/questionnaire.php" style="color:white;">Questionnaire</a></button>
		</div>
	</div>
</div>
