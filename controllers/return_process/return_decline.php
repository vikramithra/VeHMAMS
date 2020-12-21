<?php
session_start();
require_once '../helpers.php';
$returns = get_return('../../data/return.json');

$returnID = $_GET['id'];

array_splice($returns, $returnID, 1);

file_put_contents('../../data/return.json', json_encode($returns, JSON_PRETTY_PRINT));


header('Location: ' . $_SERVER['HTTP_REFERER']);
?>