<?php
   include("../dboperation.php");
   $obj=new dboperation();
   if(isset($_GET["locationid"]))
   {
      $locationid=$_GET["locationid"];
      $query="delete from tbl_location where locationid=$locationid";
      $result=$obj->executequery($query);
      if($result==1)
      {
         echo "Successfully deleted";
      }
      else
      {
         echo "Delete Unsuccessfull";
      }
   }
?>
<script>window.location='locationview.php'</script>