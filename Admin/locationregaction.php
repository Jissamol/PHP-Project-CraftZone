<?php
include_once("../dboperation.php");
$obj=new dboperation();
if(isset($_POST["Submit"]))
{
$districtid=$_POST["districtid"];
$locationname=$_POST["locationname"];
$sql="select * from tbl_location where locationname='$locationname'";
$res=$obj->executequery($sql);
$rows=mysqli_num_rows($res);
if($rows==1)
{
echo "<script>alert('Already Exist');window.location='locationview.php'</script>";
}
else
{
$sql="INSERT INTO `tbl_location`(`locationname`,`districtid`) VALUES ('$locationname','$districtid')";
$obj->executequery($sql);
echo "<script>alert('Saved Successfully');window.location='locationview.php'</script>";
}
}
?>
