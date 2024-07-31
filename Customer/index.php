<?php
include("header.php");
?>
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h2>CraftZone</h2>
                            <p>Seamlessly empower fully researched 
                                growth strategies and interoperable internal</p>
                            <a href="proview.php" class="btn_1">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner_img">
            <img src="img/banner.jpg" alt="#" class="img-fluid">
            <img src="img/banner_pattern.png " alt="#" class="pattern_img img-fluid">
        </div>
    </section>
    <!-- banner part start-->


    <?php
              include("../dboperation.php");
              $obj=new dboperation();
              $query="select * from tbl_product";
              $res=$obj->executequery($query);
?>

    <!-- product list start-->
    <section class="single_product_list">
        <div class="container">
            <div class="row">
           
                <div class="col-lg-12">
                <?php
                while($display=mysqli_fetch_array($res))
                {
                ?>
                    <div class="single_product_iner">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_img">
                                <img src="../Admin/uploads/<?php echo $display["productimage"]; ?>"width="500" height="500">
                                    <img src="img/product_overlay.png" alt="#" class="product_overlay img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="single_product_content">
                                    <h5>Started from ₹<?php echo $display["amount"];?></h5>
                                    <h2> <a href="#"><?php echo $display["productname"];?></a> </h2>
                                 <a href="proview.php" class="btn_3">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                    <!-- <div class="single_product_iner">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_img">
                                    <img src="img/single_product_2.png" class="img-fluid" alt="#">
                                    <img src="img/product_overlay.png" alt="#" class="product_overlay img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="single_product_content">
                                    <h5>Started from $10</h5>
                                    <h2> <a href="single-product.html">Printed memory foam 
                                        brief modern throw 
                                        pillow case</a> </h2>
                                    <a href="product_list.html" class="btn_3">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product_iner">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_img">
                                    <img src="img/single_product_3.png" class="img-fluid" alt="#">
                                    <img src="img/product_overlay.png" alt="#" class="product_overlay img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="single_product_content">
                                    <h5>Started from $10</h5>
                                    <h2> <a href="single-product.html">Printed memory foam 
                                            brief modern throw 
                                            pillow case</a> </h2>
                                    <a href="product_list.html" class="btn_3">Explore Now</a>
                                </div>
                            </div>
                        </div> -->
                    <!-- </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- product list end-->
    

    <!-- feature part here -->
    <!-- <section class="feature_part section_padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="feature_part_tittle">
                        <h3>Credibly innovate granular
                        internal or organic sources
                        whereas standards.</h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_content">
                        <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_1.svg" alt="#">
                        <h4>Credit Card Support</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_2.svg" alt="#">
                        <h4>Online Order</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_3.svg" alt="#">
                        <h4>Free Delivery</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_4.svg" alt="#">
                        <h4>Product with Gift</h4>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- feature part end -->

    <!-- subscribe part here -->
    <!-- <section class="subscribe_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_content">
                        <h2>Get promotions & updates!</h2>
                        <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
                        <div class="subscribe_form">
                            <input type="email" placeholder="Enter your mail">
                            <a href="#" class="btn_1">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- subscribe part end -->
    <?php
    include("footer.php");
    ?>
