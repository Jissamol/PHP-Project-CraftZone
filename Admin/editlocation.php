<?php
include("header.php");
?>
 <form method="POST" action="editlocationaction.php" name="f1">
    <?php
       include("../dboperation.php");
       $obj=new dboperation();
       if(isset($_GET["locationid"]))
       {
          $locationid=$_GET["locationid"];
          $query="select * from tbl_location where locationid=$locationid";
          $result=$obj->executequery($query);
          $display=mysqli_fetch_array($result);
          $s=1;
    ?>
    <div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Location Details</h6>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Location Name</th>
                            </tr>
                        </thead>
                <td>Location Name</td>
                <td>
                    <input type="name" name="locationname" id="locationname"  required pattern="^[A-Z][a-zA-Z]*$"
                title="Must start with capital letter followed by upper or lowercase letters" value="<?php echo $display["locationname"];?>"/></td>
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
    <input type="hidden" name="locationid" value="<?php echo $display["locationid"];?>">
</form>
<?php
       }
?>
<?php
include("footer.php");
?>