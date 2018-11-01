<!DOCTYPE html>
<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/resonsivePage/styleResponsiveDesktop.css" />
<link rel="stylesheet" type="text/css" href="../css/page.css" />

</head>

<body>

    <div class="col-6 header">
      <h2>Ajax Webchat Login</h2>
    </div>
    <div class="col-6 header signIn">
      <form id = "loginForm" name = "loginForm" method = "POST" action = "checkLogin.php">
        Username:
        <input type = "text" id = "username" name = "username" placeholder = "username" required/><br>
        Password:
        <input type = "password" id = "password" name = "password" placeholder = "password" required/><br>
        <button type = "submit">Login </button>
      </form>
    </div>

  <div class="col-12 center">
    <div class="signUp col-3">
      <h2>
        Not registered yet?
      </h2>
      <p>
        Sign up now:
      </p>

          <form id = "registerForm" name = "registerForm" method = "POST" action = "doRegistration.php">
            Email:
            <input type = "email" id = "email" name = "email" placeholder = "Email" required/><br>
            Password:
            <input type = "password" id = "passwordRegister" name = "passwordRegister" placeholder = "password" required/><br>
            Confirm Password:
            <input type = "password" id = "passwordConfirmRegister" name = "passwordConfirmRegister" placeholder = "password confirmation" onblur = "passwordEqualsPasswordConfirm()" required/><br>
            Prename:
            <input type = "text" id = "prename" name = "prename" placeholder = "Prename" required/><br><br>
            Surname:
            <input type = "text" id = "surname" name = "surname" placeholder = "Surname" required/><br>
            Adress:
            <input type = "text" id = "adress" name = "adress" placeholder = "Adress" required/><br>
            Country:
            <input type = "text" id = "country" name = "country" placeholder = "Country" required/><br>


            <button type = "submit">Register </button>
          </form>

      <script>
          var passwordConfirmed = false;
      function passwordEqualsPasswordConfirm()
          {
              var password = document.getElementById("passwordRegister").value;
              var passwordConfirm = document.getElementById("passwordConfirmRegister").value;
              if(password == passwordConfirm)
              {
                  passwordConfirmed = true;
              }
              else{
                  passwordConfirmed = false;
                  alert("shit");
              }
          }
      </script>

      </div>
    </div>
    <img class="watermark" src="https://www.hslu.ch/-/media/campus/common/images/header/hslu-logo-hslu.svg?la=de-ch" alt="Logo der HSLU">
  </body>

</html>
