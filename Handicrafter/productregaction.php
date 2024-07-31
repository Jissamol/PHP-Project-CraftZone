<?php
session_start();
$handicrafterid=$_SESSION["handicrafterid"];
$proname=$_POST["proname"];
$amount=$_POST["amount"];
$desc=$_POST["desc"];
$categoryid=$_POST["categoryid"];
$proimage=$_FILES["proimage"]["name"];
move_uploaded_file($_FILES["proimage"]["tmp_name"],"../Admin/uploads/".$proimage);
$status="Available";
require_once("../dboperation.php");
$obj=new dboperation();
   $sql= "INSERT INTO tbl_product(categoryid,productname,description,amount,productimage,status,handicraftid) VALUES ('$categoryid','$proname','$desc','$amount','$proimage','$status','$handicrafterid')";
   $res=$obj->executequery($sql);
echo "Product Successfully Registered";
?>