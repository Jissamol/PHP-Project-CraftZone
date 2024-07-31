<?php
session_start();
$customerid=$_SESSION["customerid"];
$productid=$_POST["productid"];
$handicraftid=$_POST["handicraftid"];
$amount=$_POST["tid"];
$requireddate=$_POST["requireddate"];
$quantity=$_POST["quantity"];
$remark="NULL"; 
$status="Requested";
$requestdate=date('y/m/d');
require_once("../dboperation.php");
$obj=new dboperation();
   $sql="INSERT INTO tbl_request(customerid,handicrafterid,productid,req_item,totalamount,requeststatus,remark,request_date,required_date) VALUES ('$customerid','$handicraftid','$productid','$quantity','$amount','$status','$remark','$requestdate','$requireddate')";
   $res=$obj->executequery($sql);
   
?>
 <script>alert("Successfully Requested!!!"); window.location='proview.php'</script>
