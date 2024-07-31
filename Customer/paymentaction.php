
<?php
require_once("../dboperation.php");
$obj = new dboperation();
$requestid = $_POST["requestid"];
$total = $_POST["totalprice"];
$fromaccno=$_POST["fromaccno"];
$adminprice=$total*.1;
$ptotal=$total-$adminprice;
$toaccno=$_POST["toaccno"];
$pstatus= 'Successfull';
$status='Completed';
$date= date('y/m/d');
$adminaccno="234534543234";
$sql="select * from tbl_payment where requestid='$requestid'";
$res = $obj->executequery($sql);
$rows = mysqli_num_rows($res);
if($rows > 0)
{
echo "<script>alert('Already Exist');window.location='payment.php' </script>";
}
else
{
$sql="INSERT INTO tbl_payment (fromaccount, toaccount, requestid, paymentdate, role, amount, status) 
VALUES ('$fromaccno','$adminaccno','$requestid','$date', 'Admin' ,'$adminprice','$pstatus')";
$obj->executequery($sql);
$sql="INSERT INTO tbl_payment (fromaccount, toaccount, requestid, paymentdate, role, amount, status) 
VALUES ('$fromaccno','$toaccno','$requestid','$date', 'Handicrafter' ,'$ptotal','$pstatus')";
$obj->executequery($sql);
$query="update tbl_request set requeststatus='$status' where requestid=$requestid";
$result=$obj->executequery($query);

echo "<script>alert('Payment Successfully Completed'); window.location='myorders.php'</script>";
}
?>