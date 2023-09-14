
<!--  shopping cart items   -->

<section id="cart" class="py-3">
  <div class="container-fluid w-75">
    <h5 class="font-baloo font-size-20">Shoping Cart</h5>

     <!--  shopping cart items   -->
     <div class="row">
            <div class="col-sm-9">
                <!-- Empty Cart -->
                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-12 text-center py-2">
                            <img src="./assets/blog/empty_cart.png" alt="Empty Cart" class="img-fluid" style="height: 200px;">
                            <p class="font-baloo font-size-16 text-black-50">Empty Cart</p>
                        </div>
                    </div>
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