<?php
include_once "connexion.php";

abstract class Utilitaire{


		public function creationQuestion( $question, $id_module, $reponse, $type, $correct){

			$bdd = ConnexionBDD::Connexion();
			$bdd->query('INSERT INTO questionnaire VALUES ("", "'.$question.'", '.$id_module.')');
			


			$resultat = $bdd->query('SELECT id_question FROM questionnaire ORDER BY id_question DESC limit 1');
			$id_question = $resultat->fetch(PDO::FETCH_ASSOC);
				

			foreach ($correct as $value) {
				print_r($value);
				
			}
			
			foreach ($reponse as $value) {
				
				$bdd->query('INSERT INTO reponse VALUES ('.$id_question['id_question'].', "'.$value.'", "'.$type.'" , '.$correct.')');
			}

			return $id_question;
		}

		public function creationModule( $newmodule ){

			$bdd = ConnexionBDD::Connexion();
			$result = $bdd->query('INSERT INTO modules VALUES ("", "'.$newmodule.'" );');
			
			if(!empty($result)){
				return '<div class="alert alert-success alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Nouveau module <strong>"'.$newmodule.'"</strong> bien enregistrement.</div>';	
			}else{
				return '<div class="alert alert-danger alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Erreur lors de l\'enregistrement du module <strong>'.$newmodule.' </strong>.</div>';
			}
		}


}