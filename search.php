<?php
require_once("header.php");
?>
<form action="search_result.php" method="get">
      <?php include ('errors.php') ?>
      <input type="text" name="q" placeholder="Search..." class="form-control" value="" maxlength="25" autocomplete="off" onmousedown="" onblur=""/></br>
	  <h2>Advanced Filtering (optional):</h2>
	  <?php
		  generateSelect("Field", $fields); generateSelect("City", $cities);
generateSelect("Period", $periods); generateSelect("Type", $types);
generateSelect("Academic Year", $academic_years);?>
<input type="submit" class="btn btn-primary" value="Search"/>
    </form>
 <?php
 require_once("footer.php");
?>