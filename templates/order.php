<div class="container">
  <div class="row">
    <div class="well col-lg-7">
      <h1 ><span class="label label-default">menu</span></h1>
      <br>
      <?php if ($error) {
        print ('<div class="alert alert-danger" role="alert"><p>Debe seleccionar la cantidad</p></div>');
        }
      ?>
      <!-- Load the menu to the page -->
      <?= require("../templates/menu.php") ?>
    </div>
    <div class="col-lg-5">
      <!-- Load the Aside of pre-order -->
      <?= require("../templates/pre_order.php") ?>
    </div>
  </div>
</div>
