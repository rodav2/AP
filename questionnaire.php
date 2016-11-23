<?php 
include_once "header.php";
include_once "connexion.php";

$BaseDeDonnees = ConnexionBDD::Connexion();
$NumeroModule='';

if( !isset($_POST['module']) )
{	   
	$module = $BaseDeDonnees->query('SELECT id_module FROM modules');
	while ($donnees = $module->fetch())
	{
		$NumeroModule .= $donnees['id_module'].'- ';
	}
	$modules='';
}
else
{
	$module ='WHERE ';
	
	foreach($_POST['module'] as $valeur)
	{
	   $module .= 'modules.id_module = '.$valeur.' OR ';
	   $NumeroModule .= ' - '.$valeur;
	}
	// nombre de caractères à supprimer
	$nombre_debut=0;
	$nombre_fin=4;
	// calcul de la longueur de la chaine
	$longueur_chaine=strlen($module);
	// écriture de la chaine avec suppression des caractères en question
	$modules = substr($module, $nombre_debut, $longueur_chaine-$nombre_fin);
}

echo '<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					Questionnaire <small>(Auxiliaire puericultrice Modules '.$NumeroModule.')</small>
				</h1>
			</div>
		</div>
		<div class="col-md-12">
		<form>';	
	$question = $BaseDeDonnees->query('SELECT id_question, question, module, questionnaire.id_module FROM questionnaire INNER JOIN modules ON questionnaire.id_module = modules.id_module '.$modules.'');
	$val=1;
	while ($donnees = $question->fetch())
	{
			echo '<div class="page-header">
				<h1>
					<small>Question n°'.$val.'</small>
				</h1>
			</div>
				<div class="list-group">
				 <a href="#" class="list-group-item active"><h4>'. $donnees['question'].'</h4></a>
				<div class="list-group-item">
					<h4 class="list-group-item-heading">';
				$reponses = $BaseDeDonnees->query('SELECT id_question, reponse, type FROM reponse where id_question = '.$donnees['id_question'].'');
				while ($reponse = $reponses->fetch())
				{
					switch($reponse['type']){
						case 'radio':
							echo '<input type="radio" name="reponse[]" value="'.$reponse['id_question'].'">'.$reponse['reponse'].'<br>';
							break;
						case 'checkbox':
							echo '<input type="checkbox" name="reponse[]" value="'.$reponse['id_question'].'">'.$reponse['reponse'].'<br>';
							break;
						case 'text':
							echo 'Tapez votre réponse : <input type="text" name="reponse[]"><br>';
							break;
						case '':
							// vide
						break;
					}
				}	
				
			echo '</h4>
				</div>
				<a class="list-group-item active" style="display: none;">resultat</a>
			</div>';
		$val++;
	}
	?>
			<input type="submit" value="Résultat" class="btn btn-block btn-success btn-lg"></input>
			</form>
		</div>
	</div>
</div>