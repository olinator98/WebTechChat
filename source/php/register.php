<?
   @include('inputvalidation.php');

	// define variables and set to empty values
	$username = $password = "";

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$email = test_email($_POST['email']);
	if( $email = "Invalid email format" )
	{
		alert $email;
	}
?>
    <h1>
        Register
    </h1>
    <form id = "registerForm" name = "registerForm" method = "POST" action = "ajaxChat.php">
      <br>Email:<br>
      <input type = "email" id = "email" name = "email" placeholder = "Email" required/>
      <br>Password:<br>
      <input type = "password" id = "passwordRegister" name = "passwordRegister" placeholder = "password" required/>
      <br>Confirm Password:<br>
      <input type = "password" id = "passwordConfirmRegister" name = "passwordConfirmRegister" placeholder = "password confirmation" onblur = "passwordEqualsPasswordConfirm()" required/>
      <br>Username:<br>
      <input type = "text" id = "username" name = "username" placeholder = "Username" required/>
      <input type = "submit"> </button>
    </form>


<script>
// Check if Password and confirm Password are equal
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
            alert("Your Passwords do not match");
        }
    }
</script>
