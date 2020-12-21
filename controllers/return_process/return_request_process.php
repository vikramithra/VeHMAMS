<?php
session_start();
require_once '../helpers.php';
$returns = get_return('../../data/return.json');
$assets = get_assets('../../data/assets.json');

$return = new stdClass();
$return->id = $_GET['id'];
$return->username = $_SESSION['user_details']->username;
$return->item = $assets[$_GET['id']]->name;
$return->category = $assets[$_GET['id']]->category;

$returns[] = $return;

file_put_contents('../../data/return.json', json_encode($returns, JSON_PRETTY_PRINT));

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>