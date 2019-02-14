<?php
require_once("header.php");
if (!isset($_GET['s']) || $_GET['s'] != 1)
{
?>
<form method="get">
      <?php include ('errors.php') ?>
      <h2>Advanced Filtering (optional):</h2>
	  <?php
	  generateSelect("Company", $companies);
	  generateSelect("Role", $roles);
		  generateSelect("Field", $fields); generateSelect("City", $cities);
generateSelect("Period", $periods); generateSelect("Type", $types);
generateSelect("Academic Year", $academic_years);?>
<input type="submit" class="btn btn-primary" value="Search"/>
<p></br></p>
<input type="hidden" name="s" value="1" /> 
    </form>
 <?php
}
else
{
	?>
	
	<div class="row">
          <div class="col-12 col-xl-12">
            
            <!-- Goals -->
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                    <!-- Title -->
                    <h4 class="card-header-title">
                      Search Results
                    </h4>
                  </div>
				  <div class="col-auto">

                    <!-- Button -->
                    <a href="search.php" class="btn btn-sm btn-white">
                      Advanced Options
                    </a>
                    
                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="table-responsive mb-0" data-toggle="lists" data-lists-values="[&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]">
                <?php  showSearch($stmt); ?>
              </div>
            </div>

          </div>
</div>
<?php
}
 require_once("footer.php");
?>
