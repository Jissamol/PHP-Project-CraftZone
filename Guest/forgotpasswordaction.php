<?php
function generateRandomString($length = 10) 
{
   $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $randomString = substr(str_shuffle($characters), 0, $length);
   return $randomString;
}
?>
<?php
include_once("../dboperation.php");
$obj=new dboperation();
$uname=$_POST["txtusername"];
echo $sql="select * from tbl_login where username='$uname'";
$result=$obj->executequery($sql);
$display=mysqli_fetch_array($result);
$row=mysqli_num_rows($result);
$loginid=$display['loginid'];
if($row==0)
{
     echo "<script>alert('Entered username is wrong....');window.location='forgotpassword.php' </script>"; 
}
else if($display['role']=="Customer")
{
echo $query="select * from tbl_customer where loginid='$loginid'";
$res=$obj->executequery($query);
$display1=mysqli_fetch_array($res);
$randomString = generateRandomString();
$sql2="update tbl_login set password='$randomString' where username='$uname'";
$result=$obj->executequery($sql2);
$bodyContent="Dear $uname, Your New Password is:$randomString";
$mailtoaddress=$display1["email"];
echo $mailtoaddress;
require('phpmailer1.php');
// echo "<script>window.location='login.php'</script>";

}
else 
{
echo $query1="select * from tbl_handicraft where loginid='$loginid'";
$res1=$obj->executequery($query1);
$display2=mysqli_fetch_array($res1);
$randomString = generateRandomString();
$sql2="update tbl_login set password='$randomString' where username='$uname'";
$result=$obj->executequery($sql2);
$bodyContent="Dear $uname, Your New Password is:$randomString";
$mailtoaddress=$display2["email"];
echo $mailtoaddress;
require('phpmailer1.php');
// echo "<script>window.location='login.php'</script>";
}
?>