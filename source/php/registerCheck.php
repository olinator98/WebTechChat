<?php
// Start the session
@ session_start();
ob_start();
header("Location: http://192.168.56.101/source/index.php");

?>
<!--<meta http-equiv="refresh" content="2; URL=index.php">-->
<?php

include("connection.php"); 

//This if for the new Login. There are all the informations about the user in one table

$username= htmlspecialchars($_POST["email"]);
//Useless $passwort = $_POST["passwort_register"];
//Benutzereingaben Non-Login

$_SESSION["userEmail"] = $username;
$user_state = "user";
$timestamp = time();


$hashDB = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable.
// Example output: f4552671f8909587cf485ea990207f3b

			//Useless $password = $_POST["passwort_register"];
			
			//Coding the passwort with sha256
			// Erzeugung von Passwort-Hash
			$password = $_POST["passwordRegister"];
			$hash = hash('sha256', $password);
				
	
	// new
	$qu_insertIntoUser =("INSERT INTO webchat_users(username, user_password, user_state, last_activity)
	values ('" . $username . "',
	'" . $hash . "' ,
    '" . $user_state ."',
    '" . $timestamp ."') ") or die(mysqli_error());
	echo $qu_insertIntoUser;
	

	
	mysqli_query($db, $qu_insertIntoUser);
	
?>