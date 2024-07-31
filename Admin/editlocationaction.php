<?php
   include("../dboperation.php");
   $obj=new dboperation();
   $locationname=$_POST['locationname'];
   $locationid=$_POST["locationid"];
   $query="update tbl_location set locationname='$locationname' where locationid=$locationid";
   $result=$obj->executequery($query);
?>
<script>window.location='locationview.php'</script>