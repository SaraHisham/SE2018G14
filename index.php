<?php $page_title = "Dashboard";
$pre_title = "Overview";
require_once('header.php'); ?>
<!--
<style>
 body {font-family: Arial, Helvetica, sans-serif; background-image: url(slide_one.jpg); font-size: 20px ;background-repeat:no-repeat;background-position: 50% 22% ; background-size: 100%; }
 </style>-->
<h4>Featured</h4>
<div class="row">
<div class="col-md-3">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Explore</h5>
    <p class="card-text">Search through <?php echo $internships_count; ?> available internships.</p>
    <a href="search.php?s=1" class="btn btn-primary">Show All</a>
  </div>
</div>
</div>
<div class="col-md-4">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Post Internship</h5>
    <p class="card-text">Post an internship opportunity for interns to apply online.</p>
    <a href="post_internship.php" class="btn btn-primary">Go There</a>
  </div>
</div>
</div>
</div>
<?php require_once('common.php');
requiresAuthentication();
$css = array("css/main.css");
require_once('footer.php');
require_once("view_functions.php");
