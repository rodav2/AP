<?php
include_once "connexion.php";

abstract class Utilitaire{


		public function creationQuestion( $question, $id_module, $reponse, $type){

			$bdd = ConnexionBDD::Connexion();
			$resultquestion = $bdd->query('INSERT INTO questionnaire VALUES ("", "'.$question.'", '.$id_module.')');

			$resultat = $bdd->query('SELECT id_question FROM `questionnaire` ORDER BY id_question DESC limit 1');
			$id_question = $resultat->fetch();
				

			foreach ($reponse as $value) {
				$bdd->query('INSERT INTO reponse VALUES ('.$id_question.', "'.$value.'", "'.$type.'")');
			}

			return $donnees;
		}

		public function creationModule( $newmodule ){

			$bdd = ConnexionBDD::Connexion();
			$result = $bdd->query('INSERT INTO modules VALUES ("", "'.$newmodule.'" );');
			
			if(!empty($result)){
				return 'Nouveau module "'.$newmodule.'" bien enregistrement';	
			}else{
				return 'Erreur lors de l\'enregistrement du module '.$newmodule.'';
			}
		}


}