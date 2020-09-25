<?php
	require_once '../Models/db_connect.php';


    // adminManufacturer Page
	function getAllApprovedManufacturers()
	{
		$query = "SELECT * FROM manufacturers where approval = 1";
		$manufacturers = getAssocArray($query);
		return $manufacturers;
	}
	function deleteThisManufacturer($dmid)
	{
		$query = "DELETE FROM manufacturers WHERE id = '$dmid'";
		execute($query);
		header("Location: adminManufacturer.php");
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
		$query="UPDATE manufacturers SET approval = 1 WHERE id = '$mid'";
		execute($query);
		header("Location: adminNewManufacturer.php");
	}
	function deleteThisManufacturer1($dmid1)
	{
		$query = "DELETE FROM manufacturers WHERE id = '$dmid1'";
		execute($query);
		header("Location: adminNewManufacturer.php");
	}


?>