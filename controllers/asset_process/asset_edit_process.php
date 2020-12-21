<?php
session_start();
require_once '../helpers.php';
$assets = get_assets('../../data/assets.json');

$id = $_POST['id'];

$asset_name = htmlspecialchars($_POST['asset_name']);
$asset_category = htmlspecialchars($_POST['asset_category']);

$has_details = false;

$updated_asset = $assets[$id];
$updated_asset->name = $asset_name;
$updated_asset->category = $asset_category;

if(strlen($asset_name) > 0 && strlen($asset_category) > 0) {
    $has_details = true;
}

if($has_details) {
    $assets[$id] = $updated_asset;

    file_put_contents('../../data/assets.json', json_encode($assets, JSON_PRETTY_PRINT));

    header('Location: /views/index.php');

}




?>