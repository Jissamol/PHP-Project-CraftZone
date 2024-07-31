<?php
require_once("../dboperation.php");
$obj=new dboperation();
$productid=$_POST["productid"];
$categoryid=$_POST["categoryid"];
$productname=$_POST["productname"];
$desc=$_POST["desc"];
$amount=$_POST["amount"];
$productimage=$_FILES['productimage']['name'];
if($productimage!="")
{
move_uploaded_file($_FILES['productimage']['tmp_name'],"uploads/".$productimage);
$query="update tbl_product set categoryid='$categoryid',productname='$productname',description='$desc',productimage='$productimage',amount='$amount' where productid=$productid";
$res=$obj->executequery($query);
}
else
{
$query="update tbl_product set categoryid='$categoryid',productname='$productname',description='$desc',amount='$amount' where productid=$productid";
$res=$obj->executequery($query);
}
if($res==1)
{
 echo "<script>alert('Successfully Edited');window.location='productview.php' </script>";

}
  else
{
    echo "<script>alert('Not successfully edited');window.location='productview.php' </script>";
}
?>