<?php
$category=$_POST["category"];
require_once("../dboperation.php");

$obj=new dboperation(); 

$sql="select * from tbl_category where categoryname='$category'";
$res=$obj->executequery($sql);
$row=mysqli_num_rows($res);
if($row==0)
  {
    $query="insert into tbl_category(categoryname)values('$category')";
    // echo $sql;
    $res=$obj->executequery($query);
   // echo $res;
    if($res==1)
    {
     // header("location:category.php");
      echo "<script>alert('Category registered successfully!!');window.location='category.php'</script>";
      
    }
    else
    {
      echo "<script>alert('Failed!!');window.location='category.php'</script>";
    }
  }
else
  {
    echo "<script>alert('Duplicate exists...!!');window.location='category.php'</script>";
  }
?>