<?php
include("header.php");
?>
 <form method="POST" action="editcategoryaction.php" name="f1">
    <?php
       include("../dboperation.php");
       $obj=new dboperation();
       if(isset($_GET["categoryid"]))
       {
          $categoryid=$_GET["categoryid"];
          $query="select * from tbl_category where categoryid=$categoryid";
          $result=$obj->executequery($query);
          $display=mysqli_fetch_array($result);
          $s=1;
    ?>
    <div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Category Details</h6>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category Name</th>
                            </tr>
                        </thead>
                <td>Category Name</td>
                <td>
                    <input type="name" name="categoryname"  required pattern="^[A-Z][a-zA-Z]*$"
                title="Must start with capital letter followed by upper or lowercase letters" id="categoryname" value="<?php echo $display["categoryname"];?>"/></td>
                    </table>
                    <tr>
<td colspan="2">
    <input type="submit" class="btn btn-primary m-2" name="button" id="button" value="Update"/></td>
</tr>
                </div>
            </div>
        </div>
    </div>
    </div>
    <input type="hidden" name="categoryid" value="<?php echo $display["categoryid"];?>">
</form>
<?php
       }
?>
<?php
include("footer.php");
?>