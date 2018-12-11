<?php

/* Database Configuration. Add your details below */

$dbOptions = array(
	'db_host' => '192.168.56.101',
	'db_user' => 'aitec',
	'db_pass' => 'dachs',
	'db_name' => 'db_webchat'
);

/* Database Config End */

//report everything except notice
error_reporting(E_ALL ^ E_NOTICE);

require "php/classes/DB.class.php";
require "php/classes/Chat.class.php";
require "php/classes/ChatBase.class.php";
require "php/classes/ChatLine.class.php";
require "php/classes/ChatUser.class.php";

session_name('webchat');
session_start();

try{
	
	// Connecting to the database
	DB::init($dbOptions);	
	$response = array();

	// Handling the supported actions:
	switch($_GET['action']){

		case 'submitChat':
		$chatText = $_POST['chatText'];
		$chatText = trim($chatText);
		$chatText = stripslashes($chatText);
		$chatText = htmlspecialchars($chatText);
		//$chatText = mysqli_real_escape_string($db, $chatText);
		$response = Chat::submitChat($chatText);
		break;
		
		case 'getUsers':
			$response = Chat::getUsers();
		break;
		
		case 'getChats':
			$response = Chat::getChats($_GET['lastID']);
		break;
		
		default:
			throw new Exception('Wrong action');
	}
	
	echo json_encode($response);
}
catch(Exception $e){
	die(json_encode(array('error' => $e->getMessage())));
}

?>