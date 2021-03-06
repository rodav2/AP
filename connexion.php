<?php 
 
abstract class ConnexionBDD{
	/**
	 * [Permet de se connecter à la base de données]
	 */
	public function Connexion(){
		try
		{
			// Requête permettant la connection à la base de données MySQL (nom de BDD, identifiant Mysql, Mot De Passe Mysql)
			return $BaseDeDonnees = new PDO('mysql:host=localhost;dbname=auxiliairepuericultrice', 'AP', 'AP2016');
		}
		catch(Exception $erreur)
		{
			// En cas d'erreur, on affiche un message
			echo 'Impossible de se connecter à la base de données<br/>';
			die('Erreur : '.$erreur->getMessage());
			exit();
		}
	}
	/**
	 * [Permet la deconnexion d'un utilisateur]
	 */
	public function Deconnexion(){
		// Détruit toutes les variables d'une session
		session_unset(); 
		// Redirection vers la page index.php
		header('Location:index.php'); 
	}

}