<?php
include("header.php");
?>
<section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>Change Password</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
    <div class="row ">
    <form name="f1" method="post" action="changepasswordaction.php">
    <div class="section-top-border">
			
                    <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="mt-10">
                         Username:<input type="text"  name="username"  onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Username'" required class="single-input" style="width: 130ex;">
                        </div>
                        <div class="mt-10">
                        Password:<input type="text" name="password" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Password'" required class="single-input" style="width: 130ex;">
                        </div>
                        <div class="mt-10">
                        New Password:<input type="text"  name="newpassword" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'New Password'" required class="single-input" style="width: 130ex;">
                        </div>
                        <div class="mt-10">
                        Confirm Password:<input type="text" name="confirmpwd" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Confirm Password'" required class="single-input" style="width: 130ex;">
                        </div>
                        <div class="mt-10">
                            <input type="submit"  class="genric-btn info-border circle arrow" text="changepassword" value="Change Password">
                        </div>
</form>
</div>
</div>     
                </div>
            </div>
        </div>               
<?php
include("footer.php");
?>
