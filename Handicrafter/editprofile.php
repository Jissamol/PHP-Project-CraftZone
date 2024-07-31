<?php
include("header.php");
?>
<div class="container">
<?php
include("../dboperation.php");
$obj=new dboperation();
$handicrafterid=$_GET["handicrafterid"];
$sql="select * from tbl_handicraft where loginid=$handicrafterid";
$res=$obj->executequery($sql);
?>

<div class="section-top-border">
<?php
      $display=mysqli_fetch_array($res);
?> 
			<div class="row">
				<div class="col-lg-8 col-md-8">
					<h3 class="mb-30">Edit Profile</h3>
					<form action="editprofileaction.php" method="post" enctype="multipart/form-data">
						<div class="mt-10">
							<input type="text" name="name" value="<?php echo $display["handicraftername"];?>" onfocus="this.placeholder = ''"
								onblur="this.placeholder = " required class="single-input">
						</div>
						<div class="mt-10">
							<input type="text" name="mail" value="<?php echo $display["email"];?>" onfocus="this.placeholder = ''"
								onblur="this.placeholder = ''" required class="single-input">
						</div>
						<div class="mt-10">
							<input type="text" name="address" value="<?php echo $display["address"];?>" onfocus="this.placeholder = ''"
								onblur="this.placeholder = ''" required class="single-input">
						</div>
						<div class="mt-10">
							<input type="place" name="place" value="<?php echo $display["place"];?>" onfocus="this.placeholder = ''"
								onblur="this.placeholder = ''" required class="single-input">
						</div>
						<div class="mt-10">
							<input type="gender" name="gender" value="<?php echo $display["gender"];?>" onfocus="this.placeholder = ''"
								onblur="this.placeholder = ''" required class="single-input">
						</div>
                        <div class="mt-10">
							<input type="pincode" name="pincode" value="<?php echo $display["pincode"];?>" onfocus="this.placeholder = ''"
								onblur="this.placeholder = ''" required class="single-input">
						</div>
                        <div class="mt-10">
							<input type="contact" name="contact" value="<?php echo $display["contact"];?>" onfocus="this.placeholder = ''"
								onblur="this.placeholder = ''" required class="single-input">
						</div>
                        <div class="mt-10">
                        Photo<div><input type="file" name="photo" value="<?php echo $display["photo"];?>">
                        <img src="../Admin/uploads/<?php echo $display["photo"]; ?>"width="80" height="80">
						</div>
                        <div class="mt-10">
                        ID Proof<div><input type="file" name="idproof" value="<?php echo $display["idproof"];?>">
                        <img src="../Admin/uploads/<?php echo $display["idproof"]; ?>"width="80" height="80">
						</div>
                        <div class="input-group-icon mt-10">
							<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
							<div class="form-select" >
								<select class="form-control" id="ddldistrict" name="ddldistrict" required>
                                <option value="<?php echo $display["districtid"]?>"><?php echo $display["districtname"]?></option>
                                                <?php
                                                include_once("../dboperation.php");
                                                $obj=new dboperation();
                                                $sql="select * from tbl_district";
                                                $res = $obj->executequery($sql);
                                                while($display1= mysqli_fetch_array($res))
                                               {
                                             ?>
                                             <option value="<?php echo $display1["districtid"]?>" <?php echo ($display1["districtid"]==$display['districtid'])?"selected==selected":""?>> 
                                             <?php echo $display1["districtname"]?> </option> 
                                             <?php
                                             }
                                             ?>
								</select>
							</div>
						</div>
                        <div class="input-group-icon mt-10">
							<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
							<div class="form-select" >
                        <?php
                                        $sql1="select * from tbl_location";

                                        $result1=$obj->executequery($sql1);
                                        ?>

                                      <div id="divlocation">
                                        <select name="ddllocation" id="ddllocation" class="form-control" required>
                                            <option value="0">--select--</option>
                                            <?php
                                            while($r1=mysqli_fetch_array($result1))
                                            {
                                            ?>

                                            <option value="<?php echo $r1["locationid"];?>" <?php echo ($r1["locationid"]==$display['locationid'])?"selected==selected":""?>><?php echo $r1["locationname"];?></option>
                                            <?php
                                            }
                                                
                                            ?>
                                            </select>
                                        </div>
                                            </div>
						</div>
                                        </div>
            </div><br>
                        
                       
                        <?php echo str_repeat("&nbsp;",180);?><button class="genric-btn info-border circle arrow" type="submit">Update</button>
                        <input type="hidden" name="handicrafterid" value="<?php echo $handicrafterid; ?>">
					</form>
                    
				</div>
				
			</div>
		
	</div>
    </div>
	<br><br><br><br><br><br><br>

                    <?php
include("footer.php");
?>
<script>
		$(document).ready(function() 
        {
            // alert("a")
			$("#ddldistrict").change(function() 
            {
            //  alert("a")
				var district_id = $(this).val();
                //  alert(district_id)
				$.ajax({
					url: "getlocation.php",
					method: "POST",
					data: { district_id: district_id },
					success: function(response) 
                    {
						$("#divlocation").html(response);
					},
					error: function() 
                    {
						$("#divlocation").html("Error occurred while getting location!");
					}
				});
			});
		});
	</script>
				
                