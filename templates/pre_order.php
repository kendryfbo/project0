<?php if (isset($_SESSION['order'])) : ?>

  <div class="panel panel-primary">
    <div class="panel-heading text-center">
      <h3 class="panel-title">Order</h3>
    </div>
    <table class="table">
      <thead >
        <tr>
          <th class="text-center">#</th>
          <th class="text-center">description</th>
          <th class="text-center">price</th>
          <th class="text-center">cantidad</th>
          <th class="text-center">total</th>
        </tr>
      </thead>
      <tbody class="text-center">

          <?php foreach ($_SESSION['order'] as $key => $value) : ?>

            <tr>
              <td><?= htmlspecialchars($key+1) ?></td>
              <td><?= htmlspecialchars($value['name']) ?></td>
              <td><?= htmlspecialchars($value['price']) ?></td>
              <td><?= htmlspecialchars($value['cantidad']) ?></td>
              <td><?= htmlspecialchars($value['total']) ?></td>

              <td>
                <form class="form-group" action="order.php" method="post">
                  <input type="hidden" name="item" value="<?= htmlspecialchars($key) ?>">
                  <button class="btn btn-xs btn-danger" type="submit" name="remove">Remove</button>
                </form>
              </td>
            </tr>

          <?php endforeach; ?>

      </tbody>
    </table>
    <div class="panel-footer text-right">
      <table class="table table-condensed">
        <tbody class="text-right">
          <tr>
            <td>
              <h3><strong>TOTAL:</strong></h3>
            </td>
            <td>
              <h3><strong><?= htmlspecialchars($_SESSION['total']) ?></strong></h3>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="container-fluid text-right">
        <hr>
        <button class="btn btn-checkout" type="button" name="button">checkout</button>
        <hr>
    </div>
  </div>

<?php endif; ?>
