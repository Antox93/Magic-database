<?php


function check_login($con)
{

	if(!isset($_SESSION['user_id']))
	{

		//redirect to login
		header("Location: login.php");
		die;
		
	}
}