
<?php
@ session_start();
@include('connection.php');
@include('inputvalidation.php');

// define variables and set to empty values
$username = $password = "";

$username = test_input($_POST['username']);
$password = test_input($_POST['password']);

?>
    <h1>
         Login
    </h1>
    <form id = "loginForm" name = "loginForm" method = "POST" action = "php/loginCheck.php">
      Username:<br>
      <input type = "text" id = "username" name = "username" placeholder = "username" required/>
      <br>
      Password: <br>
      <input type = "password" id = "password" name = "password" placeholder = "password" required/>
      <br>
      <input type = "submit"> </button>
    </form>
