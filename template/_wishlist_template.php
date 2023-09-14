<!-- shopping cart -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['delete-wishlist-submit'])) {
    $deletedrecord = $Cart->deletecart($_POST['item_id'],'wishlist');
  }
  if(isset($_POST['cart-submit']))
  {
    $Cart->saveForLater($_POST['item_id'] , 'cart','wishlist');
  }
}
?>
<section id="cart" class="py-3">
  <div class="container-fluid w-75">
    <h5 class="font-baloo font-size-20">Wishlist</h5>


    <!-- shopping Cart Items -->

    <div class="row">
      <div class="col-sm-9">
        <?php
        foreach ($product->getData('wishlist') as $item) :
          $cart = $product->getproduct($item['item_id']);
          $subtotal[] = array_map(function ($item) {
        ?>
            <!-- cart-items  -->
            <div class="row border-top py-3 mt-3">
              <div class="col-sm-2">
                <img src="<?php echo $item['item_image'] ?? "assets/products/1.png"; ?>" style="height: 120px;" alt="cart" class="img-fluid">
              </div>
              <div class="col sm-8">
                <h6 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown";?></h6>
                <small><?php echo $item['item_brand'] ?? "Brand"; ?></small>
                <div class="d-flex">
                  <div class="rating text-warning font-size-12">
                    <span><i class="fa-solid fa-star "></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-regular fa-star"></i></span>
                  </div>
                  <a href="#" class="px-2 font-rale font-size-14 text-decoration-none">20.534 ratings</a>
                </div>

                <!-- product qty  -->
                <div class="qty d-flex pt-2">
                
                <form method="post">
                  <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                    <button type="submit" name="delete-wishlist-submit" class="btn font-baloo text-danger pl-0 pr-3 border-right">Delete</button>
                </form>

                <form method="post">
                    <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                      <button type="submit" name="cart-submit" class="btn font-baloo text-danger">Add to Cart</button>
                </form>

                </div>
              </div>

              <div class="col-sm-2 text-end">
                <div class="font-size-20 text-danger font-baloo">
                  $ <span class="product-price" data-id="<?php echo $item['item_id']??'0';?>"><?php echo $item['item_price'] ?? "0";?></span>
                </div>
              </div>
            </div>
            <?php
            return $item['item_price'];
          }, $cart);  // closing array_map function
        endforeach;
        ?>
      </div>
  
    </div>
  </div>
</section>