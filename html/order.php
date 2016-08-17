<?php
session_start();

require_once("../include/helpers.php");

$error = false;
$errorMsg = "";

if (isset($_POST['submit'])) {

  if (empty($_POST['cantidad']) || ($_POST['cantidad'] < 0)) {

    $error = true;
    $errorMsg = "Cantidad debe ser mayor a 0";

  } else {

    if (!isset($_SESSION['order'])) {

      $_SESSION['order'] = array();
      print("<h1>restart Order</h1>");
    }

    $name = $_POST['name'];
    $cantidad = $_POST['cantidad'];
    $price = $_POST['price'];
    $total = $price * $cantidad;

    $item = array( 'name' => $name, 'price' => $price, 'cantidad' => $cantidad, 'total' => $total);

    $_SESSION['order'][]= $item;
  }
}
?>

<?= render("header") ?>
<?php renderMenu() ?>
<?= render("footer") ?>
