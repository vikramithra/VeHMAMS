<?php
session_start();
require_once '../helpers.php';
$borrows = get_borrow('../../data/borrow.json');

$borrowID = $_GET['id'];

array_splice($borrows, $borrowID, 1);

file_put_contents('../../data/borrow.json', json_encode($borrows, JSON_PRETTY_PRINT));


header('Location: ' . $_SERVER['HTTP_REFERER']);
?>