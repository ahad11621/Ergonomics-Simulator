<?php
	require_once '../Models/db_connect.php';

	if(isse($_POST["register"]))
	{
		insertManufacturer($_POST["manufacturerName"], $_POST["manufacturerID"], $_POST["ownerName"], $_POST["email"], $_POST["phone"], $_POST["address"], $_POST["tradeNumber"], $_POST["password"]);
	}
	insertManufacturer($manufacturerName, $manufacturerID, $ownerName, $email, $phone, $address, $tradeNumber, $password)
	{
		$query="INSERT INTO manufacturers VALUES('$manufacturerName', '$manufacturerID', '$ownerName', '$email', '$phone', '$address', '$tradeNumber', '$password', '0')";
		execute($query);
		header("Location: register.php");
	}
	
?>