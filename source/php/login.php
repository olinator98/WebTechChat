<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
  </head>
  <body>
    <form id = "loginForm" name = "loginForm" method = "POST" action = "checkLogin.php">
      Username:
      <input type = "text" id = "username" name = "username" placeholder = "username"/>
      Password:
      <input type = "password" id = "password" name = "password" placeholder = "password"/>
      <button type = "submit">Login </button>
    </form>
  </body>
</html>