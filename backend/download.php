<?php 
requiresAuthentication();
require_once("functions.php");
if (isset($_GET['id']) && $_GET['id'])
{
	$application = getApplication($_GET['id']);
	print_r($application);
	if ($application)
	{
		if (hasAccess($application['internship_id'], $_SESSION['user']['id']) || $application['user_id'] == $_SESSION['user']['id'])
		{
			echo $application['cv'];
			exit();
		}			
	}
	else
	{
		header("Location: index.php");
	}
}
?>