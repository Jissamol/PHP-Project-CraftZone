<?php
include("header.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>>Sales Management</title>
</head>

<body>
  
<!-- <form action="" method="post"> -->
<div class="logo">
              <a href="./index.php">
                <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                 <img src="img/logo.png" alt="">&nbsp; &nbsp;</a>
                 </div>
  <div class="container" style="width:100%;margin-left:15%;margin-bottom: 5%;" >
  <div class="row">
    
  <div class="col-md-12" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:15px; top: 106px;    margin-bottom: 59px;">
  <div class="row" style="margin-left: -173%;margin-top: 2%;margin-bottom: -5%;">
    </div>
    <div id="info">
    <form action="" method="POST">
  <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">DATEWISE SALES REPORT</h2>
  From:<input type="date" name="fromdate" id="start" class="form-control" required> 
  To:<input type="date" name="todate" id="end" class="form-control" min="2023-01" value="2030-12" required>
  <div class="row">
    <input type="submit" name="btnsubmit" value="Submit"  class="btn btn-primary" style="margin-left:90%;margin-bottom:2%">
  </div>
  </div>
</form>

<div id="table">
<form action="Excel/excel_monthlyreport.php" method="POST">
    <?php
if(isset($_POST["btnsubmit"]))
{
	$fromdate=$_POST["fromdate"];
	$todate=$_POST["todate"]; 
	$_SESSION['fromdate']=$fromdate;
	$_SESSION['todate']=$todate;
	$s=1;
	?>
  <input type="hidden" name="fdate" value="<?php echo $fromdate;?>">
  <input type="hidden" name="tdate" value="<?php echo $todate;?>">
  <!-- <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">MONTHWISE SALES REPORT</h2> -->
  <div class="form-horizontal" style="margin-left:0px;">
  <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
  <!-- <div class="col-md-12" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:50px;margin-top:-15px;background-color:white"> -->
 
           <!-- <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">SALES BETWEEN THESE MONTHS</h2> -->
           
       
      <!-- <div class="row">
          <div class="col-md-3" style="text-align:right">
          <label>From date:</label>
        </div>
    <div class="col-md-6">
          <input type="text" class="form-control" name="fromdate" readonly value="<?php  ?>" style="width:500px;">
          </td>
        </div>
  </div>
  <br>
    <div class="row">
    <div class="col-md-3" style="text-align:right">
          <label>To date:</label>
        </div>
    <div class="col-md-6">
          <input type="text" class="form-control" name="todate" readonly value="<?php  ?>" style="width:500px;">
          </td>
        </div> -->
  <!-- </div> -->
  <!-- <br> -->
<tr>
     <td>From:<?php echo $fromdate ?></td>
     <td>To:<?php echo $todate ?></td>
      </tr>
  <tr>
                          <th> Sl.No </th>

                          <th> Product Name </th> 
                          <!-- <th> Category Name </th> -->
                          <th> Count </th>
                          
                        </tr>
   
    <?php
include("../dboperation.php");
$obj=new dboperation();
$s=1;
//SELECT count(*) as count,doctor_name,department_name FROM tbl_department de inner join tbl_doctor d on de.department_id=d.department_id inner join tbl_booking b on d.doctor_id=b.doctorid where b.bookingdate >='$fromdate' and b.bookingdate <='$todate' group by b.doctorid
// echo $sql="SELECT count(*) as Sellcount,Productname,Categoryname FROM tbl_product p INNER JOIN tbl_request r on p.productid=r.productid inner join tbl_category c on c.categoryid=r.categoryid  where r.requeststatus='Accepted' or r.requeststatus='Completed' and r.request_date >='$fromdate' and r.required_date <='$todate' GROUP by p.productid";
// $sql="SELECT count(*) as Sellcount,Productname FROM tbl_product p INNER JOIN tbl_request r on p.productid=r.productid where r.requeststatus='Accepted' or r.requeststatus='Completed' and r.request_date >='$fromdate' and r.required_date <='$todate' GROUP by p.productid";
$sql="SELECT count(*) as Sellcount,Productname FROM tbl_product p INNER JOIN tbl_request r on p.productid=r.productid where r.requeststatus='Completed' and r.required_date >='$fromdate' and r.required_date <='$todate' GROUP by p.productid";
$result=$obj->executequery($sql);
   while($display=mysqli_fetch_array($result))
   {
    ?>
	<tr>
                          <td class="py-1"><?php echo $s++;?></td>
                          <td> <?php echo $display["Productname"];?></td>
                          <!-- <td> <?php ;?></td> -->
                          <td> <?php echo $display["Sellcount"];?></td>
                      </tr>
                      <?php  
   }
   ?>
   </table>
   <input type="submit" name="addnew" value="Export" class="btn btn-primary" style="margin-left:90%;">
  <?php
  }
//  }
  ?>
  

</form>
</div>
</div>
  </div>
  </div>
  <div> </div>
  </div>
  </div>
<!-- </form> -->
</body>
</html>
<?php
include("footer.php");
?>