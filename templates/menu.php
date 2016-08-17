<?php foreach ($menu->category as $category) { ?>
  <div class="panel panel-primary" >
    <div class="panel-heading">
      <h4><?php print(htmlspecialchars($category['name'])) ?></h4>
    </div>
    <div class="panel-body">
      <ul class="list-group">
        <?php foreach ($category->dish as $dish): ?>
          <li class="list-group-item">
            <form class="form-group" name="item" action="../html/order.php" method="post">
              <h5><?=htmlspecialchars($dish['name'])?></h5>
              <input type="hidden" name="name" value=<?=$dish['name']?>>
              <p><?=htmlspecialchars($dish->description)?></p>
                <?php foreach ($dish->prices->price as $price): ?>
                  <label for=<?=htmlspecialchars($price['name'])?>>
                    <input type="radio" name="price" value=<?=htmlspecialchars($price)?> checked>
                      <?=htmlspecialchars($price['name'])?> <?=htmlspecialchars($price)?>
                    </label>
                <?php endforeach; ?>
              <div class="container">
                <input type="number" name="cantidad" value="" placeholder="Amount">
                <input class="btn btn-success" type="submit" name="submit" value="order">
              </div>
            </form>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
<?php } ?>
