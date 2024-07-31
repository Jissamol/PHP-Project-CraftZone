<?php 
include("header.php");
?>
<!-- <script src="quantity.js"></script> -->
<!-- product list start-->
<form action="request.php" method="POST">
<section class="single_product_list">
        <div class="container">
            
        <?php
              include("../dboperation.php");
              $obj=new dboperation();
              $productid=$_GET["productid"];
              $query="select * from tbl_product where productid=$productid";
              $res=$obj->executequery($query);
              ?>
            <div class="row">
            <?php
                while($display=mysqli_fetch_array($res))
                {
                ?>
                <div class="col-lg-12">
                    <div class="single_product_iner">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_img">
                                <img src="../Admin/uploads/<?php echo $display["productimage"]; ?>"width="400" height="100" class="img-fluid" alt="#">
                                    <img src="img/product_overlay.png" alt="#" class="product_overlay img-fluid">
                                </div>
                            </div>
                            
                            <div class="col-lg-5 col-sm-6">
                                <h2><u>Product Details</u></h2>
                                <div class="single_product_content">
                                    <h2><?php echo $display["productname"];?></h2>
                                    <h5> <?php echo $display["description"];?> </h5>
                                    <h5>₹<?php echo $display["amount"];?></h5>
                                    <!-- <form action="request.php" method="POST"> -->

                                  <input type="number" name="quantity" id="quantity" class="form-control" onclick="getTotal()" placeholder="Choose quantity"><br>
                                    <input type="date" name="requireddate" class="form-control"><br><br>
                                    <!-- </form> -->
                                    <!-- <div class="card_area">
                <div class="product_count_area">
                    <p>Quantity</p>
                    <div class="product_count d-inline-block">
                        <span class="product_count_item inumber-decrement"> <i class="ti-minus" onclick="getTotal()"></i></span>
                        <input class="product_count_item input-number" type="text" name="txtquantity" id="txtquantity" value="1" min="1" max="10" >
                        <span class="product_count_item number-increment"> <i class="ti-plus" onclick="getTotal()"></i></span>
                        
                    </div>
                    <p id="total">

                    </p>
                    

                    
                </div> -->
                <div id="total">
                <h5>Display the total amount</h5>
                </div><br><br>
            
               
              <div class="add_to_cart">

              <input type="hidden" name="amount" id="amount" value="<?php echo $display["amount"];?>">
              <input type="hidden" name="handicraftid" value="<?php echo $display["handicraftid"];?>">
              <input type="hidden" name="productid" value="<?php echo $display["productid"];?>">

              <input type="text" name="tid" id="tid" class="form-control"><br><br>
              <button class="btn_3">REQUEST SEND</button>
                </form>
              </div>
            </div>
                                </div>
                            </div>
                 <?php
                        }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list end-->

     <script>
        function getTotal()
        {  
         var a=document.getElementById("quantity").value;
        //  alert(a)
         var b=document.getElementById("amount").value;
        //  alert(b)
         var c=parseInt(a)*parseInt(b);
            // alert(c)
         document.getElementById("total").innerHTML=c;

         document.getElementById("tid").value=c;
         //alert(t)
        //  document.getElementById("total").innerHTML=c;
        }
        </script>
    <!-- <script>
        function getTotal()
        {  
           
           
            var a=document.getElementById("txtquantity").value;
            alert(a)
            var b=document.getElementById("amount").value;
            // document.getElementById("total").innerHTML=b;
            alert(b)
            //document.getElementById("txtquantity").innerHTML=parseInt(a)-1
             var c=parseInt(a)*parseInt(b);
             alert(c)
           
             //document.getElementById("total").innerHTML=c

           
            //f1.getelementById("amount").value=c;
        }
        </script> -->
    <?php 
include("footer.php");
?>
