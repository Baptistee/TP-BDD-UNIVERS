<?php
class DB
{
	private static $instance = null;
	///////////// Paramètres de connexions avec DOCKER ///////////////////////////////////
	// Paramètres de connexion à la base de données
	private static $dbhost = "db"; // adresse du serveur : 'db', cf docker-compose.yml
	private static $dbport = 5432; // port du serveur
	private static $dbuname = "postgres"; // login
	private static $dbpass = "changeme"; // mot de passe
	private static $dbname = "BDD-UNIVERS"; // nom de la base de données
	////////////////////////////////////////////////////////////////////////////
	
	public static function get()
	{
		if(self::$instance == null)
		{
			try
			{
				self::$instance =  new PDO("pgsql:host=".self::$dbhost.";dbname=".self::$dbname, self::$dbuname, self::$dbpass);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(Exception $e)
			{
				die('Error : ' . $e->getMessage());
			}
		}
		return self::$instance;
	}

	public static function disconnect()
	{
		self::$instance = null;
	}
}
?>
