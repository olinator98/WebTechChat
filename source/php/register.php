<h1>
        Register
    </h1>
    <form id = "registerForm" name = "registerForm" method = "POST" action = "php/registerCheck.php">
      <br>Email:<br>
      <input type = "email" id = "email" name = "email" placeholder = "Email" required/>
      <br>Password:<br>
      <input type = "password" id = "passwordRegister" name = "passwordRegister" placeholder = "password" required/>
      <br>Confirm Password:<br>
      <input type = "password" id = "passwordConfirmRegister" name = "passwordConfirmRegister" placeholder = "password confirmation" onblur = "passwordEqualsPasswordConfirm()" required/>
      <input type = "submit"> </button>
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