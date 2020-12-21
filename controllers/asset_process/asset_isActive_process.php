<?php
require_once '../helpers.php';
$assets = get_assets('../../data/assets.json');
$id = $_GET['id'];

if($assets[$id]->isActive) {
    $assets[$id]->isActive = false;
} else {
    $assets[$id]->isActive = true;
}

file_put_contents('../../data/assets.json', json_encode($assets, JSON_PRETTY_PRINT));

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>