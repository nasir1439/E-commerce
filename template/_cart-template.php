<!-- shopping cart -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['delete-cart-submit'])) {
    $deletedrecord = $Cart->deletecart($_POST['item_id']);
  }

  // save for later
  if(isset($_POST['whishlist-submit']))
  {
    $Cart->saveForLater($_POST['item_id']);
  }
}
?>
<section id="cart" class="py-3">
  <div class="container-fluid w-75">
    <h5 class="font-baloo font-size-20">Shoping Cart</h5>


    <!-- shopping Cart Items -->

    <div class="row">
      <div class="col-sm-9">
        <?php
        foreach ($product->getData('cart') as $item) :
          $cart = $product->getproduct($item['item_id']);
          $subtotal[] = array_map(function ($item) {
        ?>
            <!-- cart-items  -->
            <div class="row border-top py-3 mt-3">
              <div class="col-sm-2">
              <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "assets/products/1.png"; ?>" style="height: 120px;" alt="cart" class="img-fluid"></a>
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
                  <div class="d-flex font-rale w-25">
                    <button class="qty-up border bg-light" data-id="<?php echo $item['item_id']??'0';?>"><i class="fa-solid fa-angle-up"></i></button>
                    <input type="text" data-id="<?php echo $item['item_id']??'0';?>" class="qty_input border px-2 w-100 bg-light disabled" value="1" placeholder="1">
                    <button data-id="<?php echo $item['item_id']??'0';?>" class="qty-down border bg-light"><i class="fa-solid fa-angle-down"></i></button>
                  </div>
                  <form method="post">
                    <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                    <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-end">Delete</button>
                  </form>

                  <form method="post">
                    <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                    <button type="submit" name="whishlist-submit" class="btn font-baloo text-danger px-3 ">Save for Later</button>
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
      <!-- subtotal section  -->
      <div class="col-sm-3">
        <div class="sub-total text-center mt-2 border">
          <h6 class="font-size-16 font-rale text-success py-3"><i class="fas fa-check"></i> Your Order is Eligible for FREE Delivery</h6>
          <div class="border-top py-4">
            <h5 class="font-baloo font-size-20">subtotal(<?php echo isset($subtotal)?count($subtotal): 0;?>items):&nbsp;<span class="text-danger">$</span><span class="text-danger" id="deal-price"><?php echo isset($subtotal) ? $Cart->getsum($subtotal) : 0;?></span></h5>
            <button type="submit" class="btn btn-warning mt-3">Proceed To Buy</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>