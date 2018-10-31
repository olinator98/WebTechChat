
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
