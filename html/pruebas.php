<?php
session_start();
session_destroy();
require_once("../include/helpers.php");

$order = array();
if  (!isset($_SESSION['test'])) {

  $_SESSION['order'] = $order;

}

$order[] = "naranja con mermelada";
$_SESSION['order'] = $order;


foreach ($order as $key => $value) {
  print($key . " " . $value);
}
?>
