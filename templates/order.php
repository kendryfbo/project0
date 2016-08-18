<div class="container">
  <div class="row">
    <div class="well col-lg-7">
      <h1 ><span class="label label-default">menu</span></h1>
      <br>

      <?php if ($_SESSION['error']) : ?>

        <div class="alert alert-danger" role="alert">
          <p><?= $_SESSION["errorMsg"] ?></p>
        </div>

      <?php endif; ?>

      <!-- Load the menu to the page -->
      <?php require("../templates/menu.php") ?>

    </div>
    <div class="col-lg-5">
      <!-- Load the Aside of pre-order -->
      <?php require("../templates/pre_order.php") ?>
    </div>
  </div>
</div>
