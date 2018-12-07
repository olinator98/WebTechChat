<?php
@ session_start();
@ ob_start(); 

		unset ($_SESSION["anmeldungFalsch"]);
		echo "</br></br>";
		
		include("connection.php");

	//Schutz vor Eingabe des Links in Browser. Ohne aktive Anmeldung läuft nichts. 
	if ($_SESSION["isAdmin"]){
		
		include('adminPane.php');
	}
	else {

    }	
    



?>