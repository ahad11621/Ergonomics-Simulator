<?php
	require_once '../Models/db_connect.php';

	if(isset($_POST['login']))
	{
		$userID = $_POST['userID'];
		$password = $_POST['password'];
	}
	
?>