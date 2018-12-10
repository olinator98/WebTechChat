<?php

@ session_start();

@ ob_start(); 



		unset ($_SESSION["anmeldungFalsch"]);

		echo "</br></br>";

		

		include("php/connection.php");



	//Schutz vor Eingabe des Links in Browser. Ohne aktive Anmeldung läuft nichts. 
	

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



            <a href="ajaxChat.php">Chat</a>

            <a href="php/myAccountCheck.php" class="active">MyAccount</a>

            <a href="php/logout.php">Logout</a>

            <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">

            <i class="fa fa-bars"></i></a>

    </div>

    <div>
    	<?php
    	if ($_SESSION["isAdmin"]){
		echo "<article class = 'information' name = 'information id = 'information'>";
		include('php/adminPane.php');
		echo "</article>";
		}

		?>
		
		
		<article class = "information" name = "information" id = "information">
			<h1> Your Account </h1>
		<?php							
			echo "Your user name is: " . $_SESSION["nameOfTheUser"];
			echo "</br>";
			if ($_SESSION["isAdmin"]){
				echo "You are a Admin";
			} else {
			echo "You are a normal User";
			}
			echo "</br>";
			?>
			
		</article>

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



</body>

</html>