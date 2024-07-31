<?php
   include("../dboperation.php");
   $obj=new dboperation();
   if(isset($_GET["categoryid"]))
   {
      $categoryid=$_GET["categoryid"];
      $query="delete from tbl_category where categoryid=$categoryid";
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
<script>window.location='categoryview.php'</script>