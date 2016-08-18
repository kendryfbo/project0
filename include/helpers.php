<?php

/* Render a Simple Page */
function render($title, $values = array()){
  if (isset($title)) {
    $path = "../templates/" . $title .".php";
    require($path);
  }
}


function renderMenu () {
  $menuPath = "../model/menu.xml";

  if (file_exists($menuPath)) {

    $menu = simplexml_load_file($menuPath);
    require("../templates/order.php");
  }
}

function orderTotal($order) {
  $total = 0;
  foreach ($order as $item) {
    $total = $total + $item['total'];
  }
  return $total;
}
 ?>
