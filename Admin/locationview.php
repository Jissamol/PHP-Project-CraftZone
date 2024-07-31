<?php
include("Header.php")
?>
<div class="content">
    <div class="container-fluid pt-4 px-4">
<section class="pcoded-main-container">
<div class="pcoded-content">
<div class="row">
<div class="col-xl-12">
<div class="card">
<div class="card-body">
<form action="" method="POST" enctype="multipart/form-data">
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4">Choose District</label>
<select class="form-control" name="districtid" id="districtid" onchange="this.form.submit()">
<option>--------Select District-----------</option>
<?php
include_once("../dboperation.php");
$obj=new dboperation();
$sql="select * from tbl_district";
$res = $obj->executequery($sql);
while($display= mysqli_fetch_array($res))
{
?>
<option value="<?php echo $display["districtid"]?>"> 
<?php
echo $display["districtname"]?> </option> 
<?php
}
?>
</select>
</div>
</div>
</form>
</div>
<div class="card-header">
<h5>Location View</h5> <?php
if(isset($_POST["districtid"]))
{
$districtid=$_POST["districtid"];
?>
<script>document.getElementById("districtid").value = <?php echo $districtid; ?></script>
<a href="locationreg.php?districtid=<?php echo $districtid?>"
class="btn btn-outline-primary" style="margin-left: 717px;">Add Location </a>
<?php
}
?>
</div>
<div class="card-body table-border-style">
<div class="table-responsive">
<table class="table table-striped">
<thead>
<tr>
<th>#</th>
<th>Location Name</th>
<th colspan="2">Actions</th>
</tr>
</thead>
<?php
if(isset($_POST["districtid"]))
{ 
$districtid=$_POST["districtid"];
include_once("../dboperation.php");
$obj=new dboperation();
$sql="SELECT * FROM `tbl_location` where districtid='$districtid'";
$res=$obj->executequery($sql);
$s=1;
?>
<tbody>
<?php
while($display=mysqli_fetch_array($res))
{
?>
<tr>
<td> <?php echo $s++ ?> </td>
<td> <?php echo $display["locationname"] ; ?> </td>
<td>
<button type="button" class="btn btn-icon btn-primary">
<i class="feather icon-edit"><a href="editlocation.php?locationid=<?php echo $display["locationid"];?>">Edit</i>
</button>
<button type="button" class="btn btn-icon btn-danger">
<i class="feather icon-delete"><a href="deletelocation.php?locationid=<?php echo $display["locationid"];?>">Delete</i>
</button>
</td>
</tr>
<?php
}
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<?php
include("Footer.php")
?>