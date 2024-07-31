<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>pillloMart</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/logo.jpg" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="myprofile.php">My Profile</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        product
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="http://localhost/Craftzone/Handicrafter/productreg.php"> Product Registration</a>
                                        <a class="dropdown-item" href="http://localhost/Craftzone/Handicrafter/productview.php">Product View</a>
                                        <a class="dropdown-item" href="http://localhost/Craftzone/Handicrafter/requestview.php">Request View</a>
                                        <a class="dropdown-item" href="http://localhost/Craftzone/Handicrafter/orderinfo.php">Order View</a>
                                        
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Report
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="http://localhost/Craftzone/Handicrafter/categoryproduct.php">Category</a>
                                        <a class="dropdown-item" href="http://localhost/Craftzone/Handicrafter/datewisereport.php">Sales</a>
                                    </div>
                                </li>
                                
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="blog.html"> blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                    </div>
                                </li> -->
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Log Out</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <a href="cart.html">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>Product Registration</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

  <!--================Checkout Area =================-->
  <section class="checkout_area section_padding">
    <div class="container">
      <div class="returning_customer">
        
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-8">
            <h3>Product Details</h3>
            <form class="row contact_form" action="productregaction.php" method="post" novalidate="novalidate" enctype="multipart/form-data">
            <div class="col-md-6 form-group p_star">
            <div class="input-group-icon mt-10">
							<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
							<div class="form-select" >
								<select class="form-control" id="categoryid" name="categoryid" required>
                                <option>--------Select Category-----------</option>
                                                <?php
                                                include_once("../dboperation.php");
                                                $obj=new dboperation();
                                                $sql="select * from tbl_category";
                                                $res = $obj->executequery($sql);
                                                while($display= mysqli_fetch_array($res))
                                               {
                                             ?>
                                             <option value="<?php echo $display["categoryid"]?>"> 
                                             <?php echo $display["categoryname"]?> </option> 
                                             <?php
                                             }
                                             ?>
								</select>
							</div>
						</div>
            </div><br>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" name="proname" placeholder="Product Name*" required pattern="[A-Za-z]" 
                title="Must start with capital letter followed by upper or lowercase letters"/>
                <!-- <span class="placeholder" data-placeholder="Product Name"></span> -->
              </div>
              
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" name="amount" placeholder="Amount*" required/>
                <!-- <span class="placeholder" data-placeholder="Amount"></span> -->
              </div>
             
              <div class="col-md-6 form-group p_star">
              Product Image<input type="file" class="form-control" id="proimage" name="proimage" required/>
              </div>
              <div class="col-md-9 form-group">
                <input type="text" class="form-control" id="desc" name="desc" placeholder="Description*" required/>
              </div> 
             <div><button type="submit" class="tp_btn">Register</button></div>
            </form> 
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->

  <!--::footer_part start::-->
  <footer class="footer_part">
      <div class="footer_iner section_bg">
          <div class="container">
              <div class="row justify-content-between align-items-center">
                  <div class="col-lg-8">
                      <div class="footer_menu">
                          <div class="footer_logo">
                              <a href="index.html"><img src="img/logo.png" alt="#"></a>
                          </div>
                          <div class="footer_menu_item">
                              <a href="index.html">Home</a>
                              <a href="about.html">About</a>
                              <a href="product_list.html">Products</a>
                              <a href="#">Pages</a>
                              <a href="blog.html">Blog</a>
                              <a href="contact.html">Contact</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="social_icon">
                          <a href="#"><i class="fab fa-facebook-f"></i></a>
                          <a href="#"><i class="fab fa-instagram"></i></a>
                          <a href="#"><i class="fab fa-google-plus-g"></i></a>
                          <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="copyright_part">
          <div class="container">
              <div class="row ">
                  <div class="col-lg-12">
                      <div class="copyright_text">
                          <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                          <div class="copyright_link">
                              <a href="#">Terms & Conditions</a>
                              <a href="#">FAQ</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!--::footer_part end::-->

  <!-- jquery plugins here-->
  <script src="js/jquery-1.12.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- easing js -->
  <script src="js/jquery.magnific-popup.js"></script>
  <!-- swiper js -->
  <script src="js/swiper.min.js"></script>
  <!-- swiper js -->
  <script src="js/mixitup.min.js"></script>
  <!-- particles js -->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <!-- slick js -->
  <script src="js/slick.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>

</html>