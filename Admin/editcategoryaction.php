<?php
   include("../dboperation.php");
   $obj=new dboperation();
   $categoryname=$_POST['categoryname'];
   $categoryid=$_POST["categoryid"];
   $query="update tbl_category set categoryname='$categoryname' where categoryid=$categoryid";
   $result=$obj->executequery($query);
?>
<script>window.location='categoryview.php'</script>