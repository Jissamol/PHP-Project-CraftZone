<?php
include("header.php");
?>
    <?php
               include("../dboperation.php");
               $obj=new dboperation();
               $query="select * from tbl_category";
               $result=$obj->executequery($query);
               $s=1;
            ?>
    <div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Category View</h6>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <?php
                while($display=mysqli_fetch_array($result))
                {
                ?>
                <tr>
                    <td><?php echo $s++;?></td>
                    <td><?php echo $display["categoryname"];?></td>
                    <td><button type="button" class="btn btn-icon btn-info">
                    <i class="feather icon-edit"><a href="editcategory.php?categoryid=<?php echo $display["categoryid"];?>">Edit</a></td>
                    <td><button type="button" class="btn btn-icon btn-danger">
                    <i class="feather icon-delete"><a href="categorydelete.php?categoryid=<?php echo $display["categoryid"];?>">Delete</a></td>
                </tr>
                <?php
                }
                ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php
include("footer.php");
?>