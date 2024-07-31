<?php
include("header.php");
?>
    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="breadcrumb_iner" >
                        <h2>Order View</h2>
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
$query="select * from tbl_request r inner join tbl_product p on r.productid=p.productid inner join tbl_customer c on c.loginid=r.customerid where r.handicrafterid=$handicrafterid and r.requeststatus='Accepted' or r.requeststatus='Completed'";
$res=$obj->executequery($query);
 $s=1;
?>
  <!--================Checkout Area =================-->
  <section class="checkout_area section_padding">
      <div class="returning_customer">   
      <div class="billing_details">
        <div class="row align-items-center justify-content-center">
            <div class="section-top-border" style="width: 1416px;">
				<h3 class="mb-30">Request Details</h3>
				<div class="progress-table-wrap">
					<div class="progress-table">
					<div class="table-head">
							<div class="serial">#</div>
							<div class="country">Customer Name</div>
							<div class="visit">Product Name</div>
							<div class="country">Quantity</div>
							<div class="visit">Total Amount</div>
              <div class="country">Payment Status</div>
              <!-- <div class="visit">Accept</div>
              <div class="visit">Reject</div> -->
						</div>
                        <?php
                while($display=mysqli_fetch_array($res))
                {
                ?>
                <div class="table-row">
							<div class="serial"><?php echo $s++;?></div>
							<div class="country"><?php echo $display["name"];?></div>
							<div class="visit"><?php echo $display["productname"];?></div>
							<div class="country"><?php echo $display["req_item"];?></div>
							<div class="visit"><?php echo $display["totalamount"];?></div>
                            <?php
                              if($display["requeststatus"]=='Completed')
                              {
                                ?>
                            <div class="country"><div class="genric-btn info circle"><?php echo $display["requeststatus"];?></div></div>
                            <?php
                            }
                            else
                            {
                            ?>
                            <div class="country"><div class="genric-btn warning circle"><?php echo $display["requeststatus"];?></div></div>
                            <?php
                          }?>
             
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
