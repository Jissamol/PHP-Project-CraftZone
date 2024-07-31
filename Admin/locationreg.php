<?php
include("Header.php")
?>
<div class="content">
    <div class="container-fluid pt-4 px-4">
<section class="pcoded-main-container">
<div class="pcoded-content">
<div class="row">
<div class="col-sm-12">
<br>
<br>
<div class="card">
<div class="card-header">
<h5>Location Registration</h5>
</div>
<div class="card-body">
<form action="locationregaction.php" method="POST" enctype="multipart/form-data">
<div class="form-row">
<div class="form-group col-md-6">
 <label for="inputEmail4">District</label>
 <?php
include_once("../dboperation.php");
$obj=new dboperation();
$districtid=$_GET["districtid"];
$sql="select * from tbl_district where districtid='$districtid'";
$res=$obj->executequery($sql);
$display=mysqli_fetch_array($res); 
?>
<input type="hidden" name="districtid" value="<?php echo $districtid;?>">
<input type="text" class="form-control" placeholder="Enter Location Name " required pattern="[A-Za-z]" 
                title="Must start with capital letter followed by upper or lowercase letters" name="districtname" value="<?php echo $display["districtname"] ?>" readonly>
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">Location Name</label>
<input type="text" class="form-control" placeholder="Enter Location Name " required pattern="^[A-Z][a-zA-Z]*$"
                title="Must start with capital letter followed by upper or lowercase letters" name="locationname">
</div>
</div>
<button type="submit" class="btn btn-primary" name="Submit">Save</button>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<?php
include("Footer.php")
?>