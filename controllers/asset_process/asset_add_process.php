<?php
session_start();
require_once '../helpers.php';
$assets = get_assets('../../data/assets.json');

$asset_name = htmlspecialchars($_POST['asset_name']);
$asset_category = htmlspecialchars($_POST['asset_category']);

$has_details = false;

if(strlen($asset_name) > 0 && strlen($asset_category) > 0) {
    $has_details = true;
}

if($has_details) {
    $asset = new stdClass();
    $asset->name = $asset_name;
    $asset->category = $asset_category;
    $asset->isActive = true;
    $asset->isLended = false;
    $asset->lendedTo = "";

    $assets[] = $asset;

    file_put_contents('../../data/assets.json', json_encode($assets, JSON_PRETTY_PRINT));

    header('Location: /views/index.php');

}




?>