<?php
require_once("../dboperation.php");
$obj=new dboperation();
$handicrafterid=$_POST["handicrafterid"];
$name=$_POST["name"];
$contact=$_POST["contact"];
$address=$_POST["address"];
$place=$_POST["place"];
$pincode=$_POST["pincode"];
$email=$_POST["mail"];
$gender=$_POST["gender"];
$districtid=$_POST["ddldistrict"];
$locationid=$_POST["ddllocation"];
$photo=$_FILES["photo"]["name"];
$idproof=$_FILES["idproof"]["name"];
if($photo!="" && $idproof!="")
{
   move_uploaded_file($_FILES["photo"]["tmp_name"],"../Admin/uploads/".$photo);
   move_uploaded_file($_FILES["idproof"]["tmp_name"],"../Admin/uploads/".$idproof);
   echo $sql= "update tbl_handicraft set handicraftername='$name',contact='$contact',address='$address',email='$email',place='$place',gender='$gender',pincode='$pincode',idproof='$idproof',photo='$photo',districtid='$districtid',locationid='$locationid' where loginid=$handicrafterid";
   $res=$obj->executequery($sql);
}
else
{
   echo $sql= "update tbl_handicraft set handicraftername='$name',contact='$contact',address='$address',email='$email',place='$place',gender='$gender',pincode='$pincode',districtid='$districtid',locationid='$locationid' where loginid=$handicrafterid";
   $res=$obj->executequery($sql);
}

?>
<script>alert('Profile Successfully Updated');window.location='myprofile.php' </script>";