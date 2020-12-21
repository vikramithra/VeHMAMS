<?php
require_once'../helpers.php';
$username = $_POST['username'];
$password = $_POST['password']; //12345678

$users = get_users('../../data/user.json');

foreach ($users as $indiv_user) {
	if($indiv_user->username == $username && password_verify($password, $indiv_user->password)) {
		session_start();
		$_SESSION['user_details'] = $indiv_user;
		header("Location: /views/index.php");
	}
}

echo "Nothing found/ Typo wrong ";
echo "<br>";
echo "<a href='/'>Go to login</a>";
?>