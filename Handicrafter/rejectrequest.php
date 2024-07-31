<?php
include("header.php");
?>
<div class="container">
<div class="section-top-border">
                        <?php 
                        $requestid=$_GET["requestid"];
                        ?>
			<div class="row">
				<div class="col-lg-8 col-md-8">
					<h3 class="mb-30">Remark</h3>
					<form action="confirmreject.php?requestid=<?php echo $requestid ?>" method="post">
						
                        <div class="mt-10">
							<textarea name="remark" class="single-textarea" placeholder="Remark" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Remark'" required></textarea>
                                
						</div><br><br>
                        <input type="submit" value="Reject" class="genric-btn warning-border circle arrow">
</form>
                        </div>
                        </div>
                        
                        