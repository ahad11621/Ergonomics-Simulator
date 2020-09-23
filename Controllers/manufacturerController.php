<?php
	require_once '../Models/db_connect.php';


    // adminManufacturer Page
	function getAllApprovedManufacturers()
	{
		$query = "SELECT * FROM manufacturers where approval = 1";
		$manufacturers = getAssocArray($query);
		return $manufacturers;
	}

	// adminNewManufacturer Page
	function getAllNewManufacturers()
	{
		$query = "SELECT * FROM manufacturers where approval = 0";
		$manufacturers = getAssocArray($query);
		return $manufacturers;
	}
	function addThisManufacturer($mid)
	{
		$query="UPDATE manufacturers SET approval = 1 WHERE id = $mid";
		execute($query);
		header("Location: adminNewManufacturer.php");
	}


?>