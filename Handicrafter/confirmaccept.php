<?php
require_once("../dboperation.php");
$obj=new dboperation();

function generateRandomString($length = 16) 
{
   $characters = '01234567890123456';
   $randomString = substr(str_shuffle($characters), 0, $length);
   return $randomString;
}



$requestid=$_POST["requestid"];

echo $sql1="select * from tbl_request r inner join tbl_customer c on c.loginid=r.customerid where r.requestid='$requestid'";
$res1=$obj->executequery($sql1);
$display=mysqli_fetch_array($res1);
$email=$display['email'];
echo $email;

$uname=$display['name'];
$randomString=generateRandomString();

$remark=$_POST["remark"];
$status="Accepted";

$sql="update tbl_request set requeststatus='$status',remark='$remark' where requestid=$requestid";
$res=$obj->executequery($sql);

$bodyContent="Dear $uname, Your order has been confirmed , you can make payment now <br> <u>Payment details</u> Account No:$randomString";
$mailtoaddress=$email;
include("phpmailer.php");
?>

<!-- <script>alert("Successfully Accepted");window.location='requestview.php'</script> -->