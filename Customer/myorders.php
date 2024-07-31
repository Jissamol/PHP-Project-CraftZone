<?php 
include("header.php");
?>
<!-- breadcrumb part start-->
<section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>My Orders</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->
    <?php
              include("../dboperation.php");
              $obj=new dboperation();
              //$productid=$_GET["productid"];
              $customerid=$_SESSION["customerid"];
              $query="select * from tbl_request r inner join tbl_product p on r.productid=p.productid inner join tbl_customer c on c.loginid=r.customerid where r.customerid=$customerid";
              $res=$obj->executequery($query);
              ?>

    <!--================Cart Area =================-->
  <section class="cart_area section_padding">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Payment</th>
              </tr>
            </thead>
            <?php
                while($display=mysqli_fetch_array($res))
                {
                ?>
            <tbody>
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                    <img src="../Admin/uploads/<?php echo $display["productimage"]; ?>"/>
                    </div>
                    <div class="media-body">
                      <p><?php echo $display["productname"];?></p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5><?php echo $display["amount"];?></h5>
                </td>
                <td>
                  <h5><?php echo $display["requeststatus"];?></h5>
                </td>
                <!-- <td>
                  <div class="product_count"> -->
                    <!-- <input type="text" value="1" min="0" max="10" title="Quantity:"
                      class="input-text qty input-number" />
                    <button
                      class="increase input-number-increment items-count" type="button">
                      <i class="ti-angle-up"></i>
                    </button>
                    <button
                      class="reduced input-number-decrement items-count" type="button">
                      <i class="ti-angle-down"></i>
                    </button> -->
                    <!-- <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                    <input class="input-number" type="text" value="1" min="0" max="10">
                    <span class="input-number-increment"> <i class="ti-plus"></i></span>
                  </div>
                </td> -->
                <?php
                if($display["requeststatus"]=="Accepted")
                {
                    ?>
                <td>
                  <h5><a href="makepayment.php?requestid=<?php echo $display["requestid"];?>" class="genric-btn info-border circle arrow">Pay Now</a></h5>
                </td>
                <?php
                }
                ?>
              </tr>
              <?php
              }
              ?>
              <!-- <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/arrivel/arrivel_2.png" alt="" />
                    </div>
                    <div class="media-body">
                      <p>Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>$360.00</h5>
                </td>
                <td>
                  <div class="product_count">
                      <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                      <input class="input-number" type="text" value="1" min="0" max="10">
                      <span class="input-number-increment"> <i class="ti-plus"></i></span>
                  </div>
                </td>
                <td>
                  <h5>$720.00</h5>
                </td>
              </tr> -->
              <!-- <tr class="bottom_button">
                <td>
                  <a class="btn_1" href="#">Update Cart</a>
                </td>
                <td></td>
                <td></td>
                <td>
                  <div class="cupon_text float-right">
                    <a class="btn_1" href="#">Close Coupon</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td> -->
                <!-- <td>
                  <h5>Subtotal</h5>
                </td>
                <td>
                  <h5>$2160.00</h5>
                </td>
              </tr>
              <tr class="shipping_area">
                <td></td>
                <td></td>
                <td> -->
                  <!-- <h5>Shipping</h5>
                </td>
                <td>
                  <div class="shipping_box">
                    <ul class="list">
                      <li>
                        Flat Rate: $5.00
                        <input type="radio" aria-label="Radio button for following text input">
                      </li>
                      <li>
                        Free Shipping
                        <input type="radio" aria-label="Radio button for following text input">
                      </li>
                      <li>
                        Flat Rate: $10.00
                        <input type="radio" aria-label="Radio button for following text input">
                      </li>
                      <li class="active">
                        Local Delivery: $2.00
                        <input type="radio" aria-label="Radio button for following text input">
                      </li>
                    </ul>
                    <h6>
                      Calculate Shipping
                      <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </h6>
                    <select class="shipping_select">
                      <option value="1">Bangladesh</option>
                      <option value="2">India</option>
                      <option value="4">Pakistan</option>
                    </select>
                    <select class="shipping_select section_bg">
                      <option value="1">Select a State</option>
                      <option value="2">Select a State</option>
                      <option value="4">Select a State</option>
                    </select>
                    <input class="post_code" type="text" placeholder="Postcode/Zipcode" />
                    <a class="btn_1" href="#">Update Details</a>
                  </div>
                </td> -->
              </tr>
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="proview.php">Continue Shopping</a>
            <!-- <a class="btn_1 checkout_btn_1" href="#">Proceed to checkout</a> -->
          </div>
        </div>
      </div>
  </section>
  <!--================End Cart Area =================-->
<?php 
include("footer.php");
?>