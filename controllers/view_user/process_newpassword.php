<?php 
session_start();
include '../helpers.php';

$users = get_users("../data/users.json");
$id = $_POST['id'];
$pass = $_POST['newpassword'];
$pass2 = $_POST['confirmpassword'];


if(strlen($pass) < 4 ) {
	// $errors++;
	echo "Password should be atleast 4 chracters";
	die();
}

if($pass !== $pass2) {
	echo "Password is not same!";
	die();
}

// $users[$id]->password = password_hash($pass, PASSWORD_DEFAULT);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
file_put_contents("../data/users.json", json_encode($users,JSON_PRETTY_PRINT));
header("Location: /");