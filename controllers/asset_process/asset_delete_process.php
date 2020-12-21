<?php
require_once '../helpers.php';
$assets = get_assets('../../data/assets.json');
$id = $_GET['id'];

array_splice($assets, $id, 1);

file_put_contents('../../data/assets.json', json_encode($assets, JSON_PRETTY_PRINT));

header('Location: /views/index.php');
?>