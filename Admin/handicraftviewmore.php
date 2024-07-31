<?php
//include("header.php");
?>
<link rel="stylesheet" href="view.css">
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Dual Design Registration Form - torqueprogramming.co.in</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        
                    </div>
                     
                    
<div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Handicrafter Details</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        
                                    <?php
       include("../dboperation.php");
       $obj=new dboperation();
       if(isset($_GET["handicraftid"]))
       {
          $handicraftid=$_GET["handicraftid"];
          $query="select d.*,l.*,h.*,lo.* from tbl_district d inner join tbl_location l on d.districtid=l.districtid inner join tbl_handicraft h on h.locationid=l.locationid inner join tbl_login lo on h.loginid=lo.loginid where h.handicraftid=$handicraftid";
          $result=$obj->executequery($query);
          $display=mysqli_fetch_array($result);       
    ?>
                                                 
                        <div class="form-group">
                             Name<input type="name" class="form-control"  name="name" id="handicraftername" value="<?php echo $display["handicraftername"];?>">
                        </div>
                        <div class="form-group">
                            Address<input type="text" class="form-control" name="address" value="<?php echo $display["address"];?>">
                        </div>
                        <div class="form-group">
                          Place<input type="text" class="form-control" name="place" value="<?php echo $display["place"];?>">
                        </div>
                        <div class="form-group">
                          District<input type="text" class="form-control" name="district" value="<?php echo $display["districtname"];?>">
                        </div>
                        <div class="form-group">
                          ID Proof<br>
                             <img src="uploads/<?php echo $display["idproof"]; ?>"width="80" height="80">
                        </div>
                        
                        <div class="form-group">
                            Gender<input type="text" class="form-control" name="gender" value="<?php echo $display["gender"];?>">
                        </div>
       </div>
                        <div class="col-md-6">
                        <div class="form-group">
                             Email<input type="text" class="form-control" name="email" value="<?php echo $display["email"];?>">
                        </div>
                      
                        <div class="form-group">
                            Phone<input type="text" class="form-control" name="phn" value="<?php echo $display["contact"];?>">
                            </div>
                        <div class="form-group">
                            Pincode<input type="text" class="form-control" name="pin" value="<?php echo $display["pincode"];?>">
                            </div>
                            
                      
                        <div class="form-group">
                          Location<input type="text" class="form-control" name="location" value="<?php echo $display["locationname"];?>">
                        </div>
                        
                             
                        <div class="form-group">
                          Photo<br><img src="uploads/<?php echo $display["photo"];?>"width="80" height="80">
                        </div>
                        
                    
                        <a href="rejecthandi.php?loginid=<?php echo $display["loginid"];?>">
                        <input type="submit" class="btnRegisterr"  value="Reject"/></a>
                        <a href="accepthandi.php?loginid=<?php echo $display["loginid"];?>">
                        <input type="submit" class="btnRegistera"  value="Accept"/></a>
                                          <?php
       }
                                         ?>                                 
                                    </div>
                                </div>
                            </div>
            </body>
            </html>
            <?php
//include("footer.php");
?>