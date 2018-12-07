<?php
@ session_start();
@ ob_start(); 

		unset ($_SESSION["anmeldungFalsch"]);
		echo "</br></br>";
		
		include("php/connection.php");

	//Schutz vor Eingabe des Links in Browser. Ohne aktive Anmeldung läuft nichts. 
	if (isset($_SESSION["nameOfTheUser"])){
		
		
	}
	else {
		
		header("Location: http://192.168.56.101/source/index.php");
		echo "Bitte melden Sie sich zuerst an. "; 
	}		
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Making an AJAX Web Chat With PHP, MySQL and jQuery </title>

<link rel="stylesheet" type="text/css" href="js/jScrollPane/jScrollPane.css" />
<link rel="stylesheet" type="text/css" href="css/page.css" />
<link rel="stylesheet" type="text/css" href="css/chat.css" />
<link rel="stylesheet" href="css/font-awsome.min.css">


</head>

<body>
    <div id="navigation" class = "navigation" name="navigation">

            <a href="ajaxChat.php" class="active">Chat</a>
            <a href="php/myAccountCheck.php">MyAccount</a>
            <a href="thisChat.php">This Chat</a>
            <a href="php/logout.php">Logout</a>
            <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
            <i class="fa fa-bars"></i></a>
    </div>
    <div id="chatContainer">

    <div id="chatLineHolder"></div>

    <div id="chatBottomBar" class="rounded">
    	<div class="tip"></div>
        
        <form id="submitForm" method="post" action="">
            <input id="chatText" name="chatText" class="rounded" maxlength="255" />
            <input type="submit" class="blueButton" value="Submit" />
        </form>
        
    </div>
    
</div>

<footer class = "footer">
            <p>Oliver Werlen | Sven Guggisberg</p>
            <p>Webtech</p>
</footer>


<script>
        function toggleMenu() {
            var x = document.getElementById("navigation");
            if (x.className === "navigation") {
                x.className += " responsive";
            } else {
                x.className = "navigation";
            }
        }
</script> 

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/jScrollPane/jquery.mousewheel.js"></script>
<script src="js/jScrollPane/jScrollPane.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
