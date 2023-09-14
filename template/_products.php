<?php
   // Request  method post 
   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
     if(isset($_POST['product'])){
         // Call method add to cart
         $Cart->addtocart($_POST['user_id'],$_POST['item_id']);
     }

   }
?>
<!-- product  -->
       <?php
       $item_id = $_GET['item_id'] ?? 1;
       foreach($product->getData() as $item):
        if($item['item_id'] == $item_id):

       ?>
       <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                   <div class="col-sm-6">
                    <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"?>" alt="product" class="img-fluid">
                    <div class="row pt-4 font-size-16 font-baloo">
                        <div class="col"><button type="submit"class="btn btn-danger form-control">Proceed To Buy</button></div>

                        <div class="col">
                        <form method="post">
                      <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                      <input type="hidden" name="user_id" value="<?php echo 1;?>">
                      <?php
                        if (in_array($item['item_id'], $Cart->getcartid($product->getData('cart')) ?? [])){
                            echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">In the Cart</button>';
                        }else{
                            echo '<button type="submit" name="product" class="btn btn-warning font-size-16 form-control">Add to Cart</button>';
                        }
                        ?>
                    </form>
                        </div>
                    </div>
                   </div>
                   <div class="col-sm-6 py-5">
                    <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown";?></h5>
                    <small><?php echo $item['item_brand'] ?? "Brand";?></small>
                    <div class="d-flex">
                        <div class="rating text-warning font-size-12">
                            <span><i class="fa-solid fa-star "></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                          </div>
                          <a href="#" class="px-2 text-decoration-none font-rale font-size-16">20,534 rating |1000+ answered questions.</a>
                    </div>
                    <hr class="m-0">

                    <!-- price section  -->
                    <table class="my-3">
                        <tr class="font-rale font-size-14">
                            <td>M.R.P&nbsp;:</td>
                            <td><strike>$162.00</strike></td>
                        </tr>
                        
                        <tr class="font-rale font-size-14">
                            <td>Deals Price</td>
                            <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?? "0";?></span><small class="text-dark font-size-12">&nbsp;Include of all taxes</small></td>
                        </tr>

                        <tr class="font-rale font-size-14">
                            <td>You Save</td>
                            <td>$<span class="font-size-16 text-danger">10.00</span></td>
                        </tr>
                    </table>

                    <!-- Policy -->
                    <div id="policy">
                        <div class="d-flex">
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fa-solid fa-retweet border p-3 rounded-pill m-3"></span>
                                </div>
                                <a href="#" class="font-rale font-size-14 text-decoration-none">10 Days <br>Replacement</a>
                            </div>

                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fa-solid fa-truck border p-3 rounded-pill m-3"></span>
                                </div>
                                <a href="#" class="font-rale font-size-14 text-decoration-none">Daily Tution <br>Delivery</a>
                            </div>

                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fa-solid fa-check border p-3 rounded-pill m-3"></span>
                                </div>
                                <a href="#" class="font-rale font-size-14 text-decoration-none">1 Year <br>Waranty</a>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <!-- orders Details  -->
                    <div id="order-Details" class="font-rale d-flex flex-column text-dark">
                        <small>Delivery By: March 29 - April 1</small>
                        <small>Sold by <a href="#" class="text-decoration-none">Daily Electronics</a>(4.5 out of 5| 18.198 ratings)</small>
                        <small><i class="fa-solid fa-location-dot color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424207</small>
                    </div>

                    <!-- order details  -->
                    <div class="row">
                      <div class="col-6">
                        <div class="color my-3">
                         <div class="d-flex justify-content-between">
                           <h6 class="font-baloo">Color:</h6>
                          <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                          <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                          <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                         </div>
                        </div>
                    </div>

                    <!-- product Qty section  -->

                      <div class="col-6">
                        <div class="qty d-flex">
                          <h6 class="font-baloo">Qty</h6>
                            <div class="px-4 d-flex font-rale">
                              <button class="qty-up border bg-light" data-id="<?php echo $item['item_id']??'1';?>"><i class="fa-solid fa-angle-up"></i></button>
                              <input type="text" data-id="<?php echo $item['item_id']??'1';?>" class="qty_input border px-2 w-50 bg-light disabled" value="1" placeholder="1">
                              <button class="qty-down border bg-light" data-id="<?php echo $item['item_id']??'1';?>"><i class="fa-solid fa-angle-down"></i></button>
                            </div>
                        </div>
                      </div>
                    </div>

                    <!-- size  -->
                    <div class="size my-3">
                      <h6 class="font-baloo">Size:</h6>
                      <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                          <button class="btn p-0 font-size-14">4 Gb Ram</button>
                        </div>

                        <div class="font-rubik border p-2">
                          <button class="btn p-0 font-size-14">6 Gb Ram</button>
                        </div>

                        <div class="font-rubik border p-2">
                          <button class="btn p-0 font-size-14">8 Gb Ram</button>
                        </div>
                      </div>
                    </div>
                   </div>

                   <div class="col-12">
                    <br>
                    <br>
                    <h6 class="font-rubik">Product Description</h6>
                    <hr>
                    <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ipsam quia esse impedit quas ex deserunt. Nesciunt omnis in possimus culpa voluptatem velit, error magni nulla, eligendi, accusamus reprehenderit. Minus, maxime. Animi ut eum magnam sit placeat consectetur maiores saepe nihil nam, voluptate voluptatum, dolore quisquam fuga perspiciatis doloremque molestiae sint quo iure esse provident dolorum natus? Eos, corrupti minus.
                      <br>
                      <br>

                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptas eos optio temporibus fugit voluptatum voluptates suscipit accusantium dolorum molestiae impedit sequi iure, vel tempora porro, pariatur itaque odio quia incidunt? Atque delectus, optio illo provident harum blanditiis quas quia tempore excepturi corporis! Quam, perferendis illum laudantium distinctio magni harum recusandae corporis, nesciunt itaque quod aliquam labore neque repudiandae iure temporibus enim saepe in asperiores obcaecati facere dolorum aliquid libero incidunt velit! Quos sint quisquam explicabo numquam natus esse nobis?
                    </p>
                   </div>
                </div>
            </div>
        </section>
        <?php
        endif;
      endforeach;
        ?>