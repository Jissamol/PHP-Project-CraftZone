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
					<form action="confirmaccept.php" method="post">
						
                        <div class="mt-10">
							<textarea name="remark" class="single-textarea" placeholder="Remark" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Remark'" required></textarea>
                                <input type="hidden" name="requestid" value="<?php echo $requestid ?>">
						</div><br><br>
                        <input type="submit" value="Accept" class="genric-btn info-border circle arrow">
</form>
                        </div>
                        </div>
                        
                        