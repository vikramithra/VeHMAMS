<?php 
// session_start();
include '../helpers.php';

$users = get_users("../../data/user.json");
	// print_r($_POST);
	// die();
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$admin = $_POST['admin'];


// $users = get_users();
$errors = 0;
$existing = false;


if(strlen($firstname) < 2) {
	$errors++;
	echo "Firstname must be greater than or equal to 2 characters";
}

if(strlen($lastname) < 2) {
	$errors++;
	echo "Lastname must be greater than or equal to 2 characters";
}


if(strlen($username) < 8) {
	$errors++;
	echo "Username should be atleast 8 characters";
}

if(strlen($password) < 8){
	$errors++;
	echo "Password should be atleast 8 characters";
}

//Check if the username is already existing.
foreach($users as $indiv_user) {
	if($indiv_user->username == $username) {
		$existing = true;
	}
}

if($existing) {
	$errors++;
	echo "Username already exists";
}


if($errors == 0) {
	$user = new stdClass();
	$user->firstname =$firstname;
	$user->username =$username;
	$user->lastname =$lastname;
	// $user->username = $username;
	$user->email = $email;
	$user->password = password_hash($password, PASSWORD_DEFAULT);
	$user->isAdmin = filter_var($admin, FILTER_VALIDATE_BOOLEAN);;	

	$users[] = $user;

	file_put_contents('../../data/user.json', json_encode($users, JSON_PRETTY_PRINT));
	header("Location: /views/partials/view.php");
}