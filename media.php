<?php 
$module = $_GET['module'];
switch ($module) {
  case 'home':
    include 'home.php';
    break;
  case 'sigin':
    include 'sigin.php';
    break;
  
  default:
    # code...
    break;
}
?>