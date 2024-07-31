<?php
$name=$_POST["name"];
$house=$_POST["house"];
$pin=$_POST["pin"];
$districtid=$_POST["ddldistrict"];
$idproof=$_FILES["idproof"]["name"];
move_uploaded_file($_FILES["idproof"]["tmp_name"],"../Admin/uploads/".$idproof);
$gender=$_POST["gender"];
$email=$_POST["email"];
$phn=$_POST["phn"];
$place=$_POST["place"];
$locationid=$_POST["ddllocation"];
$username=$_POST["username"];
$password=$_POST["password"];
$date=date('y/m/d');
require_once("../dboperation.php");

$obj=new dboperation();

$sql="SELECT * FROM tbl_login WHERE username='$username'";
$res=$obj->executequery($sql);
$rows=mysqli_num_rows($res);
if($rows>0) // changed condition from >1 to >0 since username should be unique
{
echo "<script>alert('Username already exists')</script>";
}
else
{
   $sql="INSERT INTO tbl_login(username,password,role,status) VALUES ('$username','$password', 'Customer', 'Confirm')";
   $res=$obj->executequery($sql);
   $loginid=mysqli_insert_id($obj->con);
 $sql= "INSERT INTO tbl_customer(name,email,contactno,housename,locationid,place,gender,pincode,idproof,loginid,register_date) VALUES ('$name','$email','$phn','$house','$locationid','$place','$gender','$pin','$idproof','$loginid','$date')";
   $res=$obj->executequery($sql);

   $bodyContent="Dear $name, Your account has been successfully created, Please login to the site";
$mailtoaddress=$email;

// $bodyContent="Dear $name, Your account has been successfully created, Please login using the username $opno";
// $mailtoaddress=$email;
require('phpmailer.php');

   if($res==1)
   {
      echo "Success";
   }
   else
   {
      echo "Failure";
   }
}
?>