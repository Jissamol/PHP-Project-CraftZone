<?php 
include("header.php");
?>
<!-- trending item start-->
<section class="trending_items">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Trending Items</h2>
                    </div>
                </div>
            </div>
            <?php
              include("../dboperation.php");
              $obj=new dboperation();
              $query="select * from tbl_product";
              $res=$obj->executequery($query);
?>

            <div class="row">
            <?php
                while($display=mysqli_fetch_array($res))
                {
                ?>
                <div class="col-lg-4 col-sm-6">
                
                    <div class="single_product_item">
                        <div class="single_product_item_thumb">
                            <img src="../Admin/uploads/<?php echo $display["productimage"]; ?>"width="500" height="500" alt="#" class="img-fluid">
                        </div>
                        <h3> <?php echo $display["productname"];?> </h3>
                        <!-- <p>₹<?php echo  $display["amount"]; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                             <!-- <a href="proviewmore.php?productid=<?php ;?>" class="genric-btn success-border medium">View</a></p> -->
                    </div>
                    
                </div>
                <?php
                }
                ?>
            </div>
            
        </div>
    </section>
    <!-- trending item end-->
    <?php 
include("footer.php");
?>