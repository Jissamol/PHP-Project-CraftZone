<?php
include("header.php");
include("../dboperation.php");
$obj=new dboperation();
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Clinic Management</title>
    </head>
   <body style="background-image:url(../Guest/images/account-bg.jpg)">
<form action="" method="POST">
<div class="logo">
              <a href="./index.php">
                <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                 <img src="img/logo.png" alt="">&nbsp; &nbsp;</a>
                 </div>
      <div class="container" style="width:100%;margin-bottom: 5%;padding-top:0%" >
      <div class="col-md-12" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 14px; margin-left:37px;background-color:white">
      <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;padding-top:2%">MONTHWISE BOOKING REPORT</h2>
      <br>
       <div class="row">
    <div class="col-md-3" style="text-align:right">
    <label for="start">Start month:</label>
        </div>
    <div class="col-md-6">
    <input type="month" id="start" name="start"
       min="2018-01" value="2018-12">          
        </div>
  </div>
      <br>
      <div class="row">
    <div class="col-md-3" style="text-align:right">
    <label for="end">End month:</label>
        </div>
    <div class="col-md-6">
    <input type="month" id="end" name="end" min="2019-01" value="2030-12">      
        </div>
  </div>
      <br>
      <div class="row">
    <input type="submit" name="btnsubmit" value="Submit"  class="btn btn-primary" style="margin-left:63%;margin-bottom:2%">
  </div>

  <br>
  </form> 
  <form action="" method="POST">
    <?php

if(isset($_POST["btnsubmit"]))
{
	$fromdate=$_POST["start"];
	$todate=$_POST["end"]; 
	$_SESSION['start']=$fromdate;
	$_SESSION['end']=$todate;
	
	
	$s=1;
	?>

	 <div class="col-md-12" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:50px;margin-top:-15px;background-color:white">
 <br>
           <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">SALES BETWEEN THESE MONTHS</h2>
           <br>
       
      <div class="row">
          <div class="col-md-3" style="text-align:right">
          <label>From date:</label>
        </div>
    <div class="col-md-6">
          <input type="text" class="form-control" name="fromdate" readonly value="<?php echo $fromdate ?>" style="width:500px;">
          </td>
        </div>
  </div>
  <br>
    <div class="row">
    <div class="col-md-3" style="text-align:right">
          <label>To date:</label>
        </div>
    <div class="col-md-6">
          <input type="text" class="form-control" name="todate" readonly value="<?php echo $todate ?>" style="width:500px;">
          </td>
        </div>
  </div>
  <br>
  <div style="padding-bottom:4%">
      <table class="table table-hover" style="border: 2px solid #adaaaa;margin-left:4px; box-shadow: 3px 3px 11px #777777; padding-bottom:content;background-color:white">
      
      <th> No.</th>
    <th>Department</th>    
    <th>Doctor</th>  
    <th>No of Booking</th>
    
    
    <?php

$sql="SELECT count(*) as count,doctor_name,department_name FROM tbl_department de inner join tbl_doctor d on de.department_id=d.department_id inner join tbl_booking b on d.doctor_id=b.doctorid where
b.bookingdate >='$fromdate' and b.bookingdate <='$todate' group by b.doctorid ";
$result=$obj->executequery($sql);

   while($display=mysqli_fetch_array($result))
	{
        echo "<tr>";
        echo"<td>".$s++."</td>";
        echo "<td>".$display["department_name"]."</td>";
        echo "<td>".$display["doctor_name"]."</td>";
        echo "<td>".$display["count"]."</td>";
        echo "</tr>";
	
  }
echo "</table>";;
}


?>
    </form>
</div>
  </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>



</body>
    </html>
    <?php
include("footer.php");
?>
