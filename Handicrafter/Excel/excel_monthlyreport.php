<?php
include 'excel_controller.php';
$craftzone = new DBController();
$fromdate=$_POST['fdate'];
$todate=$_POST['tdate'];
$productResult = $craftzone->runQuery("SELECT count(*) as Sellcount,Productname FROM tbl_product p INNER JOIN tbl_request r on p.productid=r.productid where r.requeststatus='Completed' and r.required_date >='$fromdate' and r.required_date <='$todate' GROUP by p.productid");

  
    $filename = "CraftzoneReport.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $isPrintHeader = false;
    if (! empty($productResult)) {
        foreach ($productResult as $row) {
            if (! $isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    }
    exit();

?>



 
  
      
