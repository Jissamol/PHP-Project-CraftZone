<html>
    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Craftzone</title>
    <link rel="icon" href="img/ic.jpg">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
</html>
<?php
session_start();
?>
<link rel="stylesheet" href="css/invoice.css">
<?php
              include("../dboperation.php");
              $obj=new dboperation();
              $requestid=$_GET["requestid"];
              $customerid=$_SESSION["customerid"];
              $query="select * from tbl_request r inner join tbl_product p on r.productid=p.productid inner join tbl_customer c on c.loginid=r.customerid where r.customerid=$customerid and r.requestid=$requestid";
              $res=$obj->executequery($query);
              $display=mysqli_fetch_array($res);
              ?>
<div class="card">
            <center><div class="title">Purchase Reciept</div></center>
            <div class="info">
                <div class="row">
                    <div class="col-7">
                    <span id="heading">Request Date</span><br>
                        <span id="details"><?php echo $display["request_date"];?></span>
                    </div>
                    <div class="col-5 pull-right">
                    <span id="heading">Delivery Date</span><br>
                        <span id="details"><?php echo $display["required_date"];?></span>
                    </div>
                </div>  
                <div class="row">
                   
</div>  
            </div>      
            <div class="pricing">
                <div class="row">
                <div class="col-7">
                        <span id="name">Product Name</span>  
                    </div>
                    <div class="col">
                        <span id="count">Count</span>
                    </div>
                    <div class="col-3">
                        <span id="price">Price</span>
                    </div>  
                    <div class="col-7">
                        <span id="name"><?php echo $display["productname"];?></span>  
                    </div>
                    <div class="col">
                        <span id="count">×<?php echo $display["req_item"];?></span>
                    </div>
                    <div class="col-3">
                        <span id="price">₹<?php echo $display["amount"];?></span>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-9">
                        <span id="name"></span>
                    </div>
                    <div class="col-3">
                        <span id="price"></span>
                    </div>
                </div> -->
            </div>
            <div class="total">
                <div class="row">
                    <div class="col-9"></div>
                    <div class="col-3"><big>₹<?php echo $display["totalamount"];?></big></div>
                </div>
            </div>
            <div class="tracking">
                <div class="title">Tracking Order</div>
            </div>
            <div class="progress-track">
                <ul id="progressbar">
                    <li class="step0 active " id="step1">Ordered</li>
                    <li class="step0 active text-center" id="step2">Shipped</li>
                    <li class="step0 active text-right" id="step3">On the way</li>
                    <li class="step0 active text-right" id="step4">Delivered</li>
                </ul>
            </div>
            

            <div class="footer">
                <div class="row">
                    
                    <div class="col-10"><b>CraftZone</b></a></div>
                </div>
                </div> 
               
            </div>
        </div>