<?php
$district=$_POST["district"];
require_once("../dboperation.php");

$obj=new dboperation();

$sql="select * from tbl_district where districtname='$district'";
$res=$obj->executequery($sql);
$row=mysqli_num_rows($res);
if($row==0)
  {
    $query="insert into tbl_district(districtname)values('$district')";
    // echo $sql;
    $res=$obj->executequery($query);
    if($res==1)
    {
      // echo "<script>alert(' registered successfully!!')';window.location='districtreg.php'</script>";
      echo "<script>alert('District registered successfully!!');window.location='districtreg.php'</script>";
    }
    else
    {
      echo "<script>alert('Failed!!');window.location='districtreg.php'</script>";
    }
  }
else
  {
    echo "<script>alert('Duplicate exists...!!');window.location='districtreg.php'</script>";
  }
?>