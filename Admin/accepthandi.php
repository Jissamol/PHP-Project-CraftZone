<?php
   include("../dboperation.php");
   $obj=new dboperation();
   $loginid=$_GET["loginid"];
   echo $sql="update `tbl_login` set `status`='Confirm' where loginid='$loginid'";
   $result=$obj->executequery($sql); 
?>
<script>window.location='handicrafterview.php'</script>