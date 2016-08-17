<div class="panel panel-primary">
  <div class="panel-heading text-center">
    <h3 class="panel-title">Order</h3>
  </div>

  <div class="panel-body">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>description</th>
          <th>price</th>
          <th>cantidad</th>
          <th>total</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <?php foreach ($_SESSION['order'] as $key => $value) { ?>
          <tr>
            <td>
              <?= print($key) ?>
            </td>
            <td>
              hola
            </td>
            <td>
              <?= print(htmlspecialchars($value['price'])) ?>
            </td>
            <td>
              <?= print(htmlspecialchars($value['cantidad'])) ?>
            </td>
            <td>
              <?= print(htmlspecialchars($value['total'])) ?>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <div class="panel-footer text-right">
    <table class="table table-condensed">
      <tbody class="text-right">
        <tr>
          <td>
            <strong>sub-total:</strong>
          </td>
          <td>
            <strong>25.50</strong>
          </td>
        </tr>
        <tr>
          <td>
            <strong>I.V.A:</strong>
          </td>
          <td>
            <strong>3.06</strong>
          </td>
        </tr>
        <tr>
          <td>
            <h3><strong>TOTAL:</strong></h3>
          </td>
          <td>
            <h3><strong>28.56</strong></h3>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="container-fluid text-right">
      <button class="btn btn-checkout" type="button" name="button">checkout</button>
    <hr>
  </div>

</div>
