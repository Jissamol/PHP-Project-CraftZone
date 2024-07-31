<?php
include("header.php")
?>
<!-- <div class="container-xxl position-relative bg-white d-flex p-0"> -->
<div class="content">
<div class="container-fluid pt-3 px-3">
                <div class="row g-4">
                       <div class="col-sm-10 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">District Registration</h6>
                            <form action="districtregaction.php" method="POST">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">District name</label>
                                    <div class="col-sm-10">
                                        <input type="name" class="form-control" name="district" id="district"  required pattern="^[A-Z][a-zA-Z]*$"
                title="Must start with capital letter followed by upper or lowercase letters">
                                    </div>
                                </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
</div>
</div>
</div>
<!-- </div> -->
<?php
include("footer.php")
?>