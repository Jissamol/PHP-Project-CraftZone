<?php
   include("../dboperation.php");
   $obj=new dboperation();
   if(isset($_GET["productid"]))
   {
      $productid=$_GET["productid"];
      $query="delete from tbl_product where productid=$productid";
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
<script>window.location='productview.php'</script>