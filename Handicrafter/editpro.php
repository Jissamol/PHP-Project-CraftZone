<?php
include("header.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>Product Details</h2>
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
        <div class="row" >
          <div class="col-lg-8" >
            <h3>Product Details</h3>
            <form class="row contact_form" action="editproaction.php" method="post" novalidate="novalidate" enctype="multipart/form-data">
                            <?php
                            include("../dboperation.php");
                            $obj=new dboperation();
                            if(isset($_GET["productid"]))
                            {
                            $productid=$_GET["productid"];
                            $handicrafterid=$_SESSION["handicrafterid"];
                            $query="select c.*,p.* from tbl_category c inner join tbl_product p on c.categoryid=p.categoryid where p.handicraftid=$handicrafterid and p.productid=$productid";
                            $res=$obj->executequery($query);
                            $display=mysqli_fetch_array($res);

                            ?>
                            <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" name="productname" value="<?php echo $display["productname"]?>" required pattern="[A-Za-z]" 
                title="Must start with capital letter followed by upper or lowercase letters"/>
              </div>
              
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" name="amount" placeholder="Amount*" value="<?php echo $display["amount"]?>" required/>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" name="desc" placeholder="Description*" value="<?php echo $display["description"]?>" required/>
              </div> 
              <div class="col-md-6 form-group p_star">
              Product Image<div><input type="file" name="productimage" value="<?php echo $display["productimage"];?>" required>
              <img src="uploads/<?php echo $display["productimage"]?>"width="80" height="80"></div>     
              </div>
                            <div class="col-md-6 form-group p_star">
            <div class="input-group-icon mt-10">
							<!-- <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div> -->
							<div class="form-select" >
								<select class="form-control" id="categoryid" name="categoryid" required>
                                <option value="<?php echo $display["categoryid"]?>"><?php echo $display["categoryname"]?></option>
                                                <?php
                                                
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
            <input type="hidden" name="productid" value="<?php echo $productid; ?>">
            
              <div class="single-element-widget mt-30">
              <div class="col-md-4">
                <button type="submit" class="genric-btn success-border medium">Update</button></div></div>
             <?php
                            }
                            ?>
                            
            </form> 
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->

  <?php
  include("footer.php");
  ?>