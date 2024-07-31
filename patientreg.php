<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registration Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
<!-- Jquery code -->
<script src="jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("input[name=btnOpnumber]").click(function () 
            {
                if ($(this).val() == "Yes") {
                    $("#divOPnumber").show();
                } else {
                    $("#divOPnumber").hide();
                }
            });
        });
    </script>


<!-- End of jquery -->

<!-- Generate OP Number -->

<script>
		$(document).ready(function() 
        {
          //  alert("a")
			$("#opno").click(function()
             {
               alert("a")
				//var district_id = $(this).val();
               // alert(district_id)
				$.ajax({
					url: "getopno.php",
					//method: "POST",
					//data: { district_id: district_id },
					success: function(response) 
                    {
						$("#divop").html(response);
					},
					error: function() 
                    {
						$("#divop").html("Error occurred while getting location!");
					}
				});
			});
		});
	</script>

<!-- End of OP no Generation -->
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <header class="card-header">
            <h4 class="card-title mt-2">Patient Registration Form</h4>
          </header>
          <article class="card-body">
            <form method="post" action="patientregaction.php">

            <?php
            require_once("../dboperation.php");
            $obj=new dboperation();
            $sql="select * from tbllocation";
            $result=$obj->executequery($sql);
            ?>

              <div class="form-group">
                <label>Name</label>
                <input type="text" name="txtname" class="form-control" 
                placeholder="Name" required pattern="^[A-Z][a-zA-Z]*$"
                title="Must start with capital letter followed by upper or lowercase letters">
              </div> <!-- form-group// -->

              <div class="form-group">
                <label>Gender</label>
                <input type="radio" value="male" name="rblgender" required>Male
                <input type="radio"  value="female" name="rblgender" required>Female
              </div> <!-- form-group// -->

              <div class="form-group">
                <label>Age</label>
                <input type="text" name="txtage" 
                class="form-control" placeholder="Age" required pattern="^[0-9]+$" 
                title="Enter only digits">
              </div> <!-- form-group// -->

              <div class="form-group">
				<label for="bmdc">Mobile Number</label>
				<input type="text"  class="form-control" 
        placeholder="Mobile Number" name="txtphone" required pattern="[0-9]{10}" 
         required  title="Must contain 10 digits">
			  </div>

              <div class="form-group">
				<label for="bmdc">Email</label>
				<input type="email"  class="form-control" placeholder="Email"
         name="txtemail" required>
			  </div>

              <div class="form-group">
				<label for="bmdc">Location</label>
				<select name="ddllocation" required>
                    <option value="0">--Select--</option>

<?php
while($display=mysqli_fetch_array($result))
{
    ?>
    <option value="<?php echo $display["locationid"];?>"><?php echo $display["locationname"];?></option>
    <?php
}
?>

                </select>

			  </div>

			  <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Place</label>
                  <input type="text" name="txtplace" class="form-control" 
                  placeholder="place" required pattern="[A-Za-z]" 
                title="Must start with capital letter followed by upper or lowercase letters">
                </div> <!-- form-group// -->
                <div class="form-group col-md-6">
                  <label>Pincode</label>
                  <input type="text" name="txtpin" class="form-control" 
                  placeholder="pincode" required pattern="[0-9]{6}" title="Must contain 6 digits">
                </div> <!-- form-group// -->
              </div> <!-- form-row// -->

            <div class="form-group">
            <span>Do you have OpNumber?</span>
    <!-- <input type="button" value="Yes" name="btnOpnumber" />
    <input type="button" value="No" name="btnOpnumber" id="opno" /> -->


    <input type="radio" value="Yes" name="btnOpnumber" />Yes
    <input type="radio" value="No" name="btnOpnumber" id="opno" />No
            </div>
          <div id="divop">

              <div class="form-group" id="divOPnumber" style="display: none">
                <label>OPNumber</label>
                <input type="text" name="txtopno" class="form-control" placeholder="opnumber" required>
              </div> <!-- form-group// --> 

              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="txtusername" class="form-control" 
                placeholder="Username" required >
              </div> <!-- form-group// --> 


              <div class="form-group">
                <label>Password</label>
                <input type="text" name="txtpassword" class="form-control" 
                placeholder="*****" required>
              </div> <!-- form-group// --> 
              
              <input type="date" <?php echo 'min="' . date('Y-m-d') . '"'; ?> >
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Register  </button>
                <input type="submit">
                <div class="mt-2">
                  Already have an account? <a href="#">Login</a>
                </div>
              </div> <!-- form-group// -->                                                           
            </form>
          </article> <!-- card-body end .// -->
        </div> <!-- card.// -->
      </div> <!-- col.//-->
    </div> <!-- row.//-->
  </div> 
</body>
</html>