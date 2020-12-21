<?php
session_start();
require_once '../helpers.php';
$borrows = get_borrow('../../data/borrow.json');
$assets = get_assets('../../data/assets.json');

$borrowID = $_GET['id'];

// var_dump($borrowID);

$assets[$borrows[$borrowID]->id]->isLended = true;
$assets[$borrows[$borrowID]->id]->lendedTo = $borrows[$borrowID]->username;

array_splice($borrows, $borrowID, 1);

file_put_contents('../../data/assets.json', json_encode($assets, JSON_PRETTY_PRINT));
file_put_contents('../../data/borrow.json', json_encode($borrows, JSON_PRETTY_PRINT));


header('Location: ' . $_SERVER['HTTP_REFERER']);