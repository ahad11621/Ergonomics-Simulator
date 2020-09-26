<?php
	require_once '../Models/db_connect.php';

	$userID = "";
	$err_userID = "";
	$hasError = "";
	$password="";
	$err_password="";

	$hasError = false;
	if(isset($_POST['login']))
	{
		if(empty($_POST["userID"]))
		{
			$err_userID = "User ID Required";
			$hasError = true;
		}
		else
		{
			$userID = $_POST['userID'];
		}
		if(empty($_POST["password"]))
		{
			$err_password = "Password Required";
			$hasError = true;
		}
		else
		{
			$password = $_POST['password'];
		}
		if(!$hasError)
		{
			$password = md5($password);
			authenticate($userID, $password);
			
		}
	}

	function authenticate($userID, $password)
	{
		$query = "SELECT types from user where username = '$userID' and password = '$password'";
		$result = getAssocArray($query);
		if($result)
		{
			if($result == '1')
			{
				header("Location: manufacturerDashbord.php");
			}
			elseif($result == '0')
			{
				header("Location: adminDashbord.php");
			}
		}
		return $result;
		
		
	}
	
?>