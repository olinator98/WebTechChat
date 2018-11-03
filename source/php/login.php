
<?php
@ session_start(); 

?>
    <h1>
         Login
    </h1>
    <form id = "loginForm" name = "loginForm" method = "POST" action = "ajaxChat.php">
      Username:<br>
      <input type = "text" id = "username" name = "username" placeholder = "username" required/>
      <br>
      Password: <br>
      <input type = "password" id = "password" name = "password" placeholder = "password" required/>
      <br>
      <input type = "submit"> </button>
    </form>
