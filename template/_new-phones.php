 <!-- shuffle the products  -->
 <?php
        shuffle($product_shuffle);

          // Request  method post 
          if($_SERVER['REQUEST_METHOD'] == "POST")
          {
            if(isset($_POST['new_phones_submit'])){
                // Call method add to cart
                $Cart->addtocart($_POST['user_id'],$_POST['item_id']);
            }
  
          }
        ?>
 
 <!-- New phones -->
 <section id="new-phone">
          <div class="container">
            <h4 class="font-rubik font-size-20">New Phones</h4>
            <hr>

                   <!-- owl carousel -->
            <div class="owl-carousel owl-theme">
            <?php
              foreach($product_shuffle as $item){?>
              <div class="item py-2 bg-light">
                <div class="product font-rale">
                  <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./asset/product/1.png";?>" alt="product" class="img-fluid"></a>
                  <div class="text-center">
                    <h6><?php echo $item['item_name'] ?? "Unknown";?></h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fa-solid fa-star "></i></span>
                      <span><i class="fa-solid fa-star"></i></span>
                      <span><i class="fa-solid fa-star"></i></span>
                      <span><i class="fa-solid fa-star"></i></span>
                      <span><i class="fa-regular fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$<?php echo $item['item_price'] ?? '0';?></span>
                    </div>
                    <form method="post">
                      <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                      <input type="hidden" name="user_id" value="<?php echo 1;?>">
                      <?php 
                      if(in_array($item['item_id'],$Cart->getcartid($product->getData('cart'))??[]))
                      {
                  echo  '<button type="submit" disabled class="btn btn-success font-size-12 ">In the Cart</button>';
                      }else{
                   echo '<button type="submit" name="new_phones_submit" class="btn btn-warning font-size-12 ">Add To Cart</button>';
                      }
                      ?>
                    </form>
                  </div>
                </div>
              </div>
                <?php
                }?>
            </div>
          </div>
        </section>
          </div>
        </section>