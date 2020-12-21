<?php

function get_assets($url) {
    $data = file_get_contents($url);
    $assets = json_decode($data);
    return $assets;
}

function get_users($url) {
    $data = file_get_contents($url);
    $users = json_decode($data);
    return $users;
}

function get_borrow($url) {
    $data = file_get_contents($url);
    $borrow = json_decode($data);
    return $borrow;
}

function get_return($url) {
    $data = file_get_contents($url);
    $return = json_decode($data);
    return $return;
}

?>