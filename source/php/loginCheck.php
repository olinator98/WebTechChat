<?php
@ session_start();
include("connection.php");

ob_start();

$password = $_POST["password"];
$username = $_POST["username"];

$username = trim($username);
$username = stripslashes($username);
$username = htmlspecialchars($username);
$username = mysqli_real_escape_string($db, $username);



//INPUT VALIDATION HERE

// Erzeugung von Passwort-Hash

$hash = hash('sha256', $password);

//echo $hash; 


//Richtiger Benutzername
$result = "Select username, user_password from webchat_users 
where user_password = '$hash' 
AND username ='$username'";

$result = mysqli_query($db, $result);
echo mysqli_error($db);
$num_rows = mysqli_num_rows($result);



$total = $num_rows;


if($total == 1){
	
	$_SESSION["nameOfTheUser"] = $username;
	unset ($_SESSION["anmeldungFalsch"]);
	header("Location: http://192.168.56.101/source/ajaxChat.php"); //Umleitung bei korrekter Anmeldung auf die Main Site der Web
}
else{
	$_SESSION["anmeldungFalsch"] = 0;
   header("Location: http://192.168.56.101/source/index.php"); //Umleitung bei falscher Anmeldung auf die Startseite der Web 
		 
}

?>
