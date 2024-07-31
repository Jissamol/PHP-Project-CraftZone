<?php
$requestid=$_GET["requestid"];
$remark=$_POST["remark"];
$status="Rejected";
require_once("../dboperation.php");
$obj=new dboperation();
$sql="update tbl_request set requeststatus='$status',remark='$remark' where requestid=$requestid";
$res=$obj->executequery($sql);
?>
<script>alert("Successfully Rejected");window.location='requestview.php'</script>