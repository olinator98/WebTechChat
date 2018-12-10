<?
	//define variables
	$data = $emailError = $usernameError = "";
	function test_text($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  $data = mysqli_real_escape_string($data);
	  return $data;
	}
	function test_username($data){
		$data = test_text($data);
		if ( !preg_match("/^[a-zA-Z0-9]+'?[a-zA-Z0-9]+$/", $data)){
			$usernameError = "Invalid username: Only letters, numbers and ' allowed";
			header("Location: http://192.168.56.101/source/index.php");
		}
		return $data;
	}
	function test_email($data){
	$data = test_text($data);
		if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/",$data)) {
		    $emailError = "Invalid email format";
		    header("Location: http://192.168.56.101/source/index.php");
		}
		return $data;
	}
?>