<?php

class DB {
	private static $instance;
	private $MySQLi;
	private $db_host = "192.168.56.101";
	private $db_user = "aitec";
	private $db_pass = "dachs";
	private $db_name = "db_webchat";
	
	private function __construct(array $dbOptions){

		$this->MySQLi = @ new mysqli(	$dbOptions[$db_host],
										$dbOptions[$db_user],
										$dbOptions[$db_pass],
										$dbOptions[$db_name] );

		if (mysqli_connect_errno()) {
			throw new Exception('Database error.');
		}

		$this->MySQLi->set_charset("utf8");
	}
	
	public static function init(array $dbOptions){
		if(self::$instance instanceof self){
			return false;
		}
		
		self::$instance = new self($dbOptions);
	}
	
	public static function getMySQLiObject(){
		return self::$instance->MySQLi;
	}
	
	public static function query($q){
		return self::$instance->MySQLi->query($q);
	}
	
	public static function esc($str){
		return self::$instance->MySQLi->real_escape_string($str);
	}
}

?>