<?php
session_start();
$username=$_POST["username"];
$password=$_POST["password"];
require_once("../dboperation.php");

$obj=new dboperation();

$sql="select * from tbl_login where username='$username' and password='$password'";
$res=$obj->executequery($sql);

if(mysqli_num_rows($res)==1)
{
$row=mysqli_fetch_array($res);


    if($row["role"]=="Admin")
    {
        $_SESSION['loginid']=$row['loginid'];
        header("location:..\Admin\index.php");
    }
    else if($row["role"]=="Customer")
    {
        $_SESSION['customerid']=$row["loginid"];
        header("location:..\Customer\index.php");
    }
    else if($row["role"]=="Handicrafter")
    {
        if($row["status"]=="Confirm")
        {
            $_SESSION['handicrafterid']=$row["loginid"];
            header("location:..\Handicrafter\index.php");
        }
        else
        {
            echo "<script>alert('Wait for the confirmation!');window.location='login.php'</script>"; 
        }
    }
}
    else
    {
        echo "<script>alert('Invalid Username/Password!!'); window.location='login.php'</script>";
    }
?>