<?php
	class Db{
		private static $conn = NULL;
		private $host = 'localhost';
		private $db = 'php_mvc';
		private $user = 'root';
		private $pass = '';
		private $charset = 'utf8';
		private $opt = [
		    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		    PDO::ATTR_EMULATE_PREPARES   => false,
		];

		private function __construct() {}

		public function connect(){
			if(!isset(self::$conn)){
				self::$conn = new PDO("mysql:host={$host};dbname={$db}",$user,$pass,$opt);
			}
			return self::$conn;
		}
	}

?>