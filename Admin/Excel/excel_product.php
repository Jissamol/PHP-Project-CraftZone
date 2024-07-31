<?php
include 'excel_controller.php';
$craftzone = new DBController();
$productResult = $craftzone->runQuery("SELECT count(*) as productcount,productname FROM tbl_product group by productid");

  
    $filename = "CraftzoneProduct.xls";
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



 
  
      
