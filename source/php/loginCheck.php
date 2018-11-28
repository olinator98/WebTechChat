<?php
@ session_start();
@include('connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT COUNT(id) FROM webchat_users WHERE username = :username AND user_password = :user_password");
$stmt->execute(array('username' => $username, 'user_password' => $password)); 
$stmt->fetch();  

if ($stmt->fetch())
{
    echo "found :)";
} else {
    echo "not found :'(";
}
?>