<?php
session_start();

require_once("../include/helpers.php");

// variables de la sesion
$_SESSION['error'] = false;
$_SESSION['errorMsg'] = "";

if (isset($_POST['remove'])) {

  $item = $_POST['item'];
  unset($_SESSION['order'][$item]);
  $_SESSION['total'] = orderTotal($_SESSION['order']);

}

if (isset($_POST['submit'])) {

  if (empty($_POST['cantidad']) || ($_POST['cantidad'] < 0)) {

    $_SESSION['error'] = true;
    $_SESSION['errorMsg'] = "Cantidad debe ser mayor a 0";

  }

  if (!isset($_SESSION['order'])) {

    $_SESSION['order'] = array();
    $_SESSION['total'] = 0;

  }

  $name = $_POST['name'];
  $cantidad = $_POST['cantidad'];
  $price = $_POST['price'];
  $total = $price * $cantidad;

  $item = array( 'name' => $name, 'price' => $price, 'cantidad' => $cantidad, 'total' => $total);

  $_SESSION['order'][]= $item;

  $_SESSION['total'] = orderTotal($_SESSION['order']);

}
?>

<?= render("header") ?>
<?php renderMenu() ?>
<?= render("footer") ?>
