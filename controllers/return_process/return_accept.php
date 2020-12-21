<?php
session_start();
require_once '../helpers.php';
$returns = get_return('../../data/return.json');
$assets = get_assets('../../data/assets.json');

$returnID = $_GET['id'];

// var_dump($borrowID);

$assets[$returns[$returnID]->id]->isLended = false;
$assets[$returns[$returnID]->id]->lendedTo = "";

array_splice($returns, $returnID, 1);

file_put_contents('../../data/assets.json', json_encode($assets, JSON_PRETTY_PRINT));
file_put_contents('../../data/return.json', json_encode($returns, JSON_PRETTY_PRINT));


header('Location: ' . $_SERVER['HTTP_REFERER']);
