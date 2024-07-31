<?php
include("header.php");
?>
    <?php
               include("../dboperation.php");
               $obj=new dboperation();
              $query="select l.*,h.*  from tbl_handicraft h inner join tbl_login l on h.loginid=l.loginid where l.status='Not confirmed'";
               $result=$obj->executequery($query);
               $s=1;
            ?>
    <div class="content">
      <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Handicrafter View</h6>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Si.No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Address</th>
                                <th scope="col">Email</th>
                                
                                <th scope="col">Gender</th>
                                <th scope="col">View More</th>
                               
                            </tr>
                        </thead>
                        <?php
                while($display=mysqli_fetch_array($result))
                {
                ?>
                <tr>
                    <td><?php echo $s++;?></td>
                    <td><?php echo $display["handicraftername"];?></td>
                    <td><?php echo $display["contact"];?></td>
                    <td><?php echo $display["address"];?></td>
                    <td><?php echo $display["email"];?></td>
                    <td><?php echo $display["gender"];?></td>
                    <td><button type="button" class="btn btn-icon btn-info">
                    <i class="feather icon-edit"><a href="handicraftviewmore.php?handicraftid=<?php echo $display["handicraftid"];?>">View More</a></td>
                    
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