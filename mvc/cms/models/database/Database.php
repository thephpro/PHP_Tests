<?php
# SQL Types
define("INT", "INT");
define("FLOAT", "FLOAT");
define("VARCHAR", "VARCHAR");
define("TEXT", "TEXT");
define("LONGTEXT", "LONGTEXT");

# Useful characters
define("COMMA", ", ");
define("AND_A", " AND ");
define("BQ", "`"); #Backquote
define("QT", "'"); #Single Quote
define("CL", ":"); #Colon

class Database extends Model
{
	public function __construct()
	{
		$this->pdo = $this->getDatabaseConnection();
		$this->siteConfig = new SiteConfiguration($this->pdo);
		$this->menu = new Menu($this->pdo);
		$this->pages = new Pages($this->pdo);
		$this->users = new Users($this->pdo);

		/*
		$this->siteConfig->create();
		$this->menu->create();
		$this->pages->create();
		$this->users->create();
		*/

		#$a = array("title" => "Blog CMS", "color" => "blue", "template" => "default");
		#$this->siteConfig->insert($a);
		
	}

	private function getDatabaseConnection() {
		try {
			$dsn = DB_TYPE .":dbname=" .DB_NAME .";host=" .DB_HOST;
			$dbUser = DB_USER;
			$dbPass = DB_PASS;

			$pdo = new PDO($dsn, $dbUser, $dbPass);
			# echo "Connected to Database."; die();
			return $pdo;
		} catch(PDOException $e) {
			if (defined("DEBUG") && DEBUG) {
				echo "<br>Connection failed:<br>" .$e->getMessage(); die();
			}
			throw new Exception("<b>Database</b>: Error connecting to PDO.", 1);
		}

		return null;
	}
}