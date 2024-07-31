<?php
session_start();
include_once("../dboperation.php");
$obj=new dboperation();
echo $sql="select * from tbl_login where loginid=".$_SESSION['handicrafterid'];
$result=$obj->executequery($sql);
$display=mysqli_fetch_array($result);

$uname=$_POST["username"];
$pass=$_POST["password"];
$newpwd=$_POST["newpassword"];

if($pass==$display["password"])
{
    echo $sql1="update tbl_login set password='$newpwd' where loginid=".$_SESSION['handicrafterid'];
    $result1=$obj->executequery($sql1);

    if($result1==1)
    {
        echo "<script>alert('Password Changed Successfully....');window.location='index.php' </script>"; 
    }
}

else
{
    echo "<script>alert('Entered password is wrong....');window.location='index.php' </script>"; 
}
?>