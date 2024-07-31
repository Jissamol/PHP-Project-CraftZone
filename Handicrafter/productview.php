<?php
include("header.php");
?>
    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="breadcrumb_iner" >
                        <h2>Product View</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->
    <?php
include("../dboperation.php");
$obj=new dboperation();
$handicrafterid=$_SESSION["handicrafterid"];
$query="select c.*,p.* from tbl_category c inner join tbl_product p on c.categoryid=p.categoryid where p.handicraftid=$handicrafterid";
$res=$obj->executequery($query);
 $s=1;
?>
  <!--================Checkout Area =================-->
  <section class="checkout_area section_padding">
      <div class="returning_customer">   
      <div class="billing_details">
        <div class="row align-items-center justify-content-center">
            <div class="section-top-border" style="width: 1822px;">
				<h3 class="mb-30">Product Details</h3>
				<div class="progress-table-wrap">
					<div class="progress-table">
					<div class="table-head">
							<div class="serial">#</div>
							<div class="country">Category</div>
							<div class="visit">Product</div>
							<div class="country">Description</div>
							<div class="visit">Amount</div>
              <div class="country">Image</div>
              <div class="visit">Edit</div>
              <div class="visit">Delete</div>
						</div>
                        <?php
                while($display=mysqli_fetch_array($res))
                {
                ?>
                <div class="table-row">
							<div class="serial"><?php echo $s++;?></div>
							<div class="country"><?php echo $display["categoryname"];?></div>
							<div class="visit"><?php echo $display["productname"];?></div>
							<div class="country"><?php echo $display["description"];?></div>
							<div class="visit"><?php echo $display["amount"];?></div>
              <div class="country"><img src="../Admin/uploads/<?php echo $display["productimage"]; ?>"width="80" height="80"></div>
              <div class="visit"><a href="editpro.php?productid=<?php echo $display["productid"];?>" class="genric-btn warning circle">Edit</a></div>
				      <div class="visit"><a href="deletepro.php?productid=<?php echo $display["productid"];?>" class="genric-btn danger circle">Delete</a></div>
              	</div>
                            <?php
                }
                ?>
							</div>
						</div>
                
					</div>
				</div>
			</div> 
          </div>
  </section>
  <!--================End Checkout Area =================-->
  <?php
include("footer.php");
?>
