<?php
session_start();
require_once '../helpers.php';
$borrows = get_borrow('../../data/borrow.json');
$assets = get_assets('../../data/assets.json');

$borrow = new stdClass();
$borrow->id = $_GET['id'];
$borrow->username = $_SESSION['user_details']->username;
$borrow->item = $assets[$_GET['id']]->name;
$borrow->category = $assets[$_GET['id']]->category;

$borrows[] = $borrow;

file_put_contents('../../data/borrow.json', json_encode($borrows, JSON_PRETTY_PRINT));

header('Location: /views/index.php');
?>