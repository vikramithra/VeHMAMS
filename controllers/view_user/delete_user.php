<?php
  require_once '../helpers.php';
  session_start();
  $id = $_GET['id'];
  $users = get_users('../../data/user.json');
  array_splice($users, $id, 1);
  file_put_contents('../../data/user.json', json_encode($users, JSON_PRETTY_PRINT));
  $_SESSION['class'] = "danger";
 
 header ('Location: /views/partials/view.php')
?>