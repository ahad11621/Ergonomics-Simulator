<?php
	require_once '../Models/db_connect.php';

	// $manufacturerName = $_POST["manufacturerName"];
	// $manufacturerID = $_POST["manufacturerID"];
	// $ownerName = $_POST["ownerName"]; 
	// $email = $_POST["email"];
	// $phone = $_POST["phone"];
	// $password = $_POST["password"];

	if(isset($_POST["register"]))
	{
		insertManufacturer($manufacturerName, $manufacturerID, $ownerName, $email, $phone, $password);
	}
	function insertManufacturer($manufacturerName, $manufacturerID, $ownerName, $email, $phone, $password)
		{
			$query="INSERT INTO manufacturers VALUES('$manufacturerName', '$manufacturerID', '$ownerName', '$email', '$phone', '$password', '0')";
			execute($query);
			header("Location: register.php");
		}
	
?>
<!-- function insertManufacturer($_POST["manufacturerName"], $_POST["manufacturerID"], $_POST["ownerName"], $_POST["email"], $_POST["phone"], $_POST["password"])
		{
			$query="INSERT INTO manufacturers VALUES('$manufacturerName', '$manufacturerID', '$ownerName', '$email', '$phone', '$password', '0')";
			execute($query);
			header("Location: register.php");
		} -->