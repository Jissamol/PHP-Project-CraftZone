<?php
$name=$_POST["name"];
$address=$_POST["address"];
$place=$_POST["place"];
$districtid=$_POST["ddldistrict1"];
$idproof=$_FILES["idproof"]["name"];
move_uploaded_file($_FILES["idproof"]["tmp_name"],"../Admin/uploads/".$idproof);
$photo=$_FILES["photo"]["name"];
move_uploaded_file($_FILES["photo"]["tmp_name"],"../Admin/uploads/".$photo);
$gender=$_POST["gender"];
$email=$_POST["email"];
$phn=$_POST["phn"];
$pin=$_POST["pin"];
$locationid=$_POST["ddllocationh"];
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
   $sql="INSERT INTO tbl_login(username,password,role,status) VALUES ('$username','$password', 'Handicrafter', 'Not confirmed')";
   $res=$obj->executequery($sql);
   $loginid=mysqli_insert_id($obj->con);
 $sql= "INSERT INTO tbl_handicraft(handicraftername,contact,address,email,place,gender,pincode,idproof,photo,districtid,locationid,reg_date,loginid) VALUES ('$name','$phn','$address','$email','$place','$gender','$pin','$idproof','$photo','$districtid','$locationid','$date','$loginid')";
   $res=$obj->executequery($sql);

  $bodyContent="Dear $name, Your account has been successfully created, Please wait for the confirmation!!!";
  $mailtoaddress=$email;
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