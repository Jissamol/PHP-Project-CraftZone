<?php
require_once("../dboperation.php");
$obj=new dboperation();
$customerid=$_POST["customerid"];
$name=$_POST["name"];
$contact=$_POST["contact"];
$house=$_POST["house"];
$place=$_POST["place"];
$pincode=$_POST["pincode"];
$email=$_POST["mail"];
$gender=$_POST["gender"];
$districtid=$_POST["ddldistrict"];
$locationid=$_POST["ddllocation"];
$idproof=$_FILES["idproof"]["name"];
if($idproof=="")
{
   echo $sql= "update tbl_customer set name='$name',contactno='$contact',housename='$house',email='$email',place='$place',gender='$gender',pincode='$pincode',locationid='$locationid' where loginid=$customerid";
   $res=$obj->executequery($sql);
}
else
{
   move_uploaded_file($_FILES["idproof"]["tmp_name"],"../Admin/uploads/".$idproof);
   echo $sql= "update tbl_customer set name='$name',contactno='$contact',housename='$house',email='$email',place='$place',gender='$gender',pincode='$pincode',idproof='$idproof',locationid='$locationid' where loginid=$customerid";
   $res=$obj->executequery($sql);
   
}

?>
 <script>alert('Profile Successfully Updated');window.location='myprofile.php' </script>";