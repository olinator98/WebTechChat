<?php
$db = mysqli_connect("192.168.56.101", "aitec", "dachs", "db_webchat");
		if(!$db)
		{
		  exit("Verbindungsfehler: ".mysqli_connect_error());
		}
?> 