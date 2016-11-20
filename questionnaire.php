<?php 

include_once "header.php";
include_once "connexion.php";

// on crée la requête SQL 
$resultat = $mysqli->query ("SELECT * FROM questionnaire");

// on envoie la requête 
//$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
die($resultat);
// on fait une boucle qui va faire un tour pour chaque enregistrement 
foreach($resultat as $data) 
    { 
    // on affiche les informations de l'enregistrement en cours 
    echo '<b>'.$data['id_question'].' '.$data['question'].'</b>'; 
    } 

// on ferme la connexion à mysql 
mysql_close(); 


?>



<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					Questionnaire <small>(Auxiliaire puericultrice - "Modules 1")</small>
				</h1>
			</div>
			<div class="list-group">
				 <a href="#" class="list-group-item active">Ici la question</a>
				<div class="list-group-item">
					<h4 class="list-group-item-heading">
						List group item heading
					</h4>
				</div>
				<div class="list-group-item">				
				</div> <a class="list-group-item active">resultat</a>
			</div>
		</div>
	</div>
</div>