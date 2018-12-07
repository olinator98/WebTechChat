<?php
@session_start();
include('connection.php');
$result = "Select username, user_state from webchat_users WHERE
    user_state = 'true'
    AND username ='$_SESSION[nameOfTheUser]'";


    echo $result;


    $result = mysqli_query($db, $result);
    echo mysqli_error($db);
    $num_rows = mysqli_num_rows($result);

    $total = $num_rows;
    echo $total;
    if($total == 1){ 
	
        $_SESSION["isAdmin"] = true;
        header("Location: myAccount.php"); //Umleitung bei korrekter Anmeldung auf die Main Site der Web
    }
    else{
        $_SESSION["isAdmin"] = false;
        $_SESSION["anmeldungFalsch"] = 0;
        header("Location: myAccount.php"); //Umleitung bei korrekter Anmeldung auf die Main Site der Web
             
    }
?>