<?php
include 'excel_controller.php';
$craftzone = new DBController();
$productResult = $craftzone->runQuery("SELECT count(*) as productcount,categoryname FROM tbl_category c INNER JOIN tbl_product p on p.categoryid=c.categoryid GROUP by c.categoryid");

  
    $filename = "CraftzoneCategory.xls";
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



 
  
      
