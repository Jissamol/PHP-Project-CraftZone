<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>user profile bio graph and total sales - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body {
    color: #797979;
    background: #f1f2f7;
    font-family: 'Open Sans', sans-serif;
    padding: 0px !important;
    margin: 0px !important;
    font-size: 13px;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
}

.profile-nav, .profile-info{
    margin-top:30px;   
}

.profile-nav .user-heading {
    background: #fbc02d;
    color: #fff;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
}

.profile-nav .user-heading.round a  {
    border-radius: 50%;
    -webkit-border-radius: 50%;
    border: 10px solid rgba(255,255,255,0.3);
    display: inline-block;
}

.profile-nav .user-heading a img {
    width: 112px;
    height: 112px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
}

.profile-nav .user-heading h1 {
    font-size: 22px;
    font-weight: 300;
    margin-bottom: 5px;
}

.profile-nav .user-heading p {
    font-size: 12px;
}

.profile-nav ul {
    margin-top: 1px;
}

.profile-nav ul > li {
    border-bottom: 1px solid #ebeae6;
    margin-top: 0;
    line-height: 30px;
}

.profile-nav ul > li:last-child {
    border-bottom: none;
}

.profile-nav ul > li > a {
    border-radius: 0;
    -webkit-border-radius: 0;
    color: #89817f;
    border-left: 5px solid #fff;
}

.profile-nav ul > li > a:hover, .profile-nav ul > li > a:focus, .profile-nav ul li.active  a {
    background: #f8f7f5 !important;
    border-left: 5px solid #fbc02d;
    color: #89817f !important;
}

.profile-nav ul > li:last-child > a:last-child {
    border-radius: 0 0 4px 4px;
    -webkit-border-radius: 0 0 4px 4px;
}

.profile-nav ul > li > a > i{
    font-size: 16px;
    padding-right: 10px;
    color: #bcb3aa;
}

.r-activity {
    margin: 6px 0 0;
    font-size: 12px;
}


.p-text-area, .p-text-area:focus {
    border: none;
    font-weight: 300;
    box-shadow: none;
    color: #c3c3c3;
    font-size: 16px;
}

.profile-info .panel-footer {
    background-color:#f8f7f5 ;
    border-top: 1px solid #e7ebee;
}

.profile-info .panel-footer ul li a {
    color: #7a7a7a;
}

.bio-graph-heading {
    background: #fbc02d;
    color: #fff;
    text-align: center;
    font-style: italic;
    padding: 40px 110px;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    font-size: 16px;
    font-weight: 300;
}

.bio-graph-info {
    color: #89817e;
}

.bio-graph-info h1 {
    font-size: 22px;
    font-weight: 300;
    margin: 0 0 20px;
}

.bio-row {
    width: 50%;
    float: left;
    margin-bottom: 10px;
    padding:0 15px;
}

.bio-row p span {
    width: 100px;
    display: inline-block;
}

.bio-chart, .bio-desk {
    float: left;
}

.bio-chart {
    width: 40%;
}

.bio-desk {
    width: 60%;
}

.bio-desk h4 {
    font-size: 15px;
    font-weight:400;
}

.bio-desk h4.terques {
    color: #4CC5CD;
}

.bio-desk h4.red {
    color: #e26b7f;
}

.bio-desk h4.green {
    color: #97be4b;
}

.bio-desk h4.purple {
    color: #caa3da;
}

.file-pos {
    margin: 6px 0 10px 0;
}

.profile-activity h5 {
    font-weight: 300;
    margin-top: 0;
    color: #c3c3c3;
}

.summary-head {
    background: #ee7272;
    color: #fff;
    text-align: center;
    border-bottom: 1px solid #ee7272;
}

.summary-head h4 {
    font-weight: 300;
    text-transform: uppercase;
    margin-bottom: 5px;
}

.summary-head p {
    color: rgba(255,255,255,0.6);
}

ul.summary-list {
    display: inline-block;
    padding-left:0 ;
    width: 100%;
    margin-bottom: 0;
}

ul.summary-list > li {
    display: inline-block;
    width: 19.5%;
    text-align: center;
}

ul.summary-list > li > a > i {
    display:block;
    font-size: 18px;
    padding-bottom: 5px;
}

ul.summary-list > li > a {
    padding: 10px 0;
    display: inline-block;
    color: #818181;
}

ul.summary-list > li  {
    border-right: 1px solid #eaeaea;
}

ul.summary-list > li:last-child  {
    border-right: none;
}

.activity {
    width: 100%;
    float: left;
    margin-bottom: 10px;
}

.activity.alt {
    width: 100%;
    float: right;
    margin-bottom: 10px;
}

.activity span {
    float: left;
}

.activity.alt span {
    float: right;
}
.activity span, .activity.alt span {
    width: 45px;
    height: 45px;
    line-height: 45px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    background: #eee;
    text-align: center;
    color: #fff;
    font-size: 16px;
}

.activity.terques span {
    background: #8dd7d6;
}

.activity.terques h4 {
    color: #8dd7d6;
}
.activity.purple span {
    background: #b984dc;
}

.activity.purple h4 {
    color: #b984dc;
}
.activity.blue span {
    background: #90b4e6;
}

.activity.blue h4 {
    color: #90b4e6;
}
.activity.green span {
    background: #aec785;
}

.activity.green h4 {
    color: #aec785;
}

.activity h4 {
    margin-top:0 ;
    font-size: 16px;
}

.activity p {
    margin-bottom: 0;
    font-size: 13px;
}

.activity .activity-desk i, .activity.alt .activity-desk i {
    float: left;
    font-size: 18px;
    margin-right: 10px;
    color: #bebebe;
}

.activity .activity-desk {
    margin-left: 70px;
    position: relative;
}

.activity.alt .activity-desk {
    margin-right: 70px;
    position: relative;
}

.activity.alt .activity-desk .panel {
    float: right;
    position: relative;
}

.activity-desk .panel {
    background: #F4F4F4 ;
    display: inline-block;
}


.activity .activity-desk .arrow {
    border-right: 8px solid #F4F4F4 !important;
}
.activity .activity-desk .arrow {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    left: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .arrow-alt {
    border-left: 8px solid #F4F4F4 !important;
}

.activity-desk .arrow-alt {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    right: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .album {
    display: inline-block;
    margin-top: 10px;
}

.activity-desk .album a{
    margin-right: 10px;
}

.activity-desk .album a:last-child{
    margin-right: 0px;
}
    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- <div class="container bootstrap snippets bootdey"> -->
<div class="row">
<div class="profile-nav col-md-3">
<div class="panel">
<div class="user-heading round">
<?php
include("../dboperation.php");
$obj=new dboperation();
$customerid=$_SESSION["customerid"];
$sql="select * from tbl_district d inner join tbl_location l on d.districtid=l.districtid inner join tbl_customer c on c.locationid=l.locationid where loginid=$customerid";
$res=$obj->executequery($sql);
?>
<?php
      while($display=mysqli_fetch_array($res))
     {
?>
<!-- <a href="#"> -->


<!-- </a> -->

<h1><?php echo $display["name"];?></h1>
<!-- <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1175746875746851657974547c70787d3f727e7c">[email&#160;protected]</a></p> -->
</div>
<ul class="nav nav-pills nav-stacked">
<li class="active"><a href="#"> <i class="fa fa-user"></i> Profile</a></li>&nbsp;
<li class=""><a href="changepassword.php"> <i class="fa fa-user"></i> Change Password</a></li>&nbsp;
<!-- <li><a href="#"> <i class="fa fa-calendar"></i> Recent Activity <span class="label label-warning pull-right r-activity">9</span></a></li> -->
<li><a href="editprofile.php?customerid=<?php echo $customerid;?>"> <i class="fa fa-edit"></i> Edit profile</a></li>
</ul>
</div>
</div>
<div class="profile-info col-md-9">
<div class="panel">
<!-- <form>
<textarea placeholder="Whats in your mind today?" rows="2" class="form-control input-lg p-text-area"></textarea>
</form> -->

<ul class="nav nav-pills">
<!-- <li>
<a href="#"><i class="fa fa-map-marker"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-camera"></i></a>
</li>
<li>
<a href="#"><i class=" fa fa-film"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-microphone"></i></a>
</li> -->
</ul>
</footer>
</div>
<div class="panel">
<div class="bio-graph-heading">
MY PROFILE
</div>

<div class="panel-body bio-graph-info">
<h1>Bio Graph</h1>

<div class="row">
<div class="bio-row">
<p><span>Name </span>:<?php echo $display["name"];?></p>
</div>
<div class="bio-row">
<p><span>Email </span>: <?php echo $display["email"];?></p>
</div>
<div class="bio-row">
<p><span>Address </span>: <?php echo $display["housename"];?></p>
</div>
<div class="bio-row">
<p><span>Place</span>: <?php echo $display["place"];?></p>
</div>
<div class="bio-row">
<p><span>Gender </span>: <?php echo $display["gender"];?></p>
</div>
<div class="bio-row">
<p><span>Pincode </span>: <?php echo $display["pincode"];?></p>
</div>
<div class="bio-row">
<p><span>Contact </span>: <?php echo $display["contactno"];?></p>
</div>
<div class="bio-row">
<p><span>District </span>: <?php echo $display["districtname"];?></p>
</div>
<div class="bio-row">
<p><span>Location </span>: <?php echo $display["locationname"];?></p>
</div>
<div class="bio-row">
<p><span>ID Proof </span>: <img src="../Admin/uploads/<?php echo $display["idproof"]; ?>"width="180" height="180" alt/></p>
</div>

</div>
<?php
                }
                ?>
<!-- <button class="btn btn-warning pull-right">Edit</button> -->

</div>

</div>
<div>
<!-- <footer class="panel-footer"> -->
<div class="row">
<div class="col-md-6">
<!-- <div class="panel"> -->
<!-- <div class="panel-body"> -->
<!-- <div class="bio-chart">
<div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="35" data-fgcolor="#e06b7d" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(224, 107, 125); padding: 0px; -webkit-appearance: none; background: none;"></div>
</div> -->
<!-- <div class="bio-desk">
<h4 class="red">Envato Website</h4>
<p>Started : 15 July</p>
<p>Deadline : 15 August</p>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="panel">
<div class="panel-body">
<div class="bio-chart">
<div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="63" data-fgcolor="#4CC5CD" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(76, 197, 205); padding: 0px; -webkit-appearance: none; background: none;"></div>
</div>
<div class="bio-desk">
<h4 class="terques">ThemeForest CMS </h4>
<p>Started : 15 July</p>
<p>Deadline : 15 August</p>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="panel">
<div class="panel-body">
<div class="bio-chart">
<div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="75" data-fgcolor="#96be4b" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(150, 190, 75); padding: 0px; -webkit-appearance: none; background: none;"></div>
</div>
<div class="bio-desk">
<h4 class="green">VectorLab Portfolio</h4>
<p>Started : 15 July</p>
<p>Deadline : 15 August</p>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="panel">
<div class="panel-body">
<div class="bio-chart">
<div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="50" data-fgcolor="#cba4db" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(203, 164, 219); padding: 0px; -webkit-appearance: none; background: none;"></div>
</div>
<div class="bio-desk">
<h4 class="purple">Adobe Muse Template</h4>
<p>Started : 15 July</p>
<p>Deadline : 15 August</p>
</div>
</div> -->
</div>
</div>
</div>
</div>
</div>
</div>
<!-- </div> -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body><br><br><br><br><br><br><br><br><br><br>
</html>
<?php
include("footer.php");
?>