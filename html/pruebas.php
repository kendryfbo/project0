<?php
session_start();

require_once("../include/helpers.php");

$order = array();
if  (!isset($_SESSION['test'])) {

  $_SESSION['order'] = $order;

}

$order[] = "naranja";
$_SESSION['order'] = $order;


foreach ($order as $key => $value) {
  print($key . " " . $value);
}
?>
