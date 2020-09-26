<?php
	require_once '../Models/db_connect.php';

	// adminBikes Page
	function getAllApprovedBikes()
	{
		$query = "SELECT * FROM bikes where approval = 1";
		$bikes = getAssocArray($query);
		return $bikes;
	}
	function deleteThisBike1($dbid)
	{
		$query = "DELETE FROM bikes WHERE id = '$dbid'";
		execute($query);
		header("Location: adminBikes.php");
	}

	// adminNewBikes Page
	function getAllNewBikes()
	{
		$query = "SELECT * FROM bikes where approval = 0";
		$bikes = getAssocArray($query);
		return $bikes;
	}
	function addThisBike($bid)
	{
		$query="UPDATE bikes SET approval = 1 WHERE id = '$bid'";
		execute($query);
		header("Location: adminNewBikes.php");
	}
	function deleteThisBike($dbid)
	{
		$query = "DELETE FROM bikes WHERE id = '$dbid'";
		execute($query);
		header("Location: adminNewBikes.php");
	}

	//ManufacturerBikes Page
	// function getAllMyApprovedBikes()
	// {

	// }

	//Search Bike 
	function searchBike($id)
	{
		$query = "SELECT * FROM bikes WHERE approval = 1 and name LIKE '%$id%'";
		$bikes = getAssocArray($query);
		return $bikes;
	}

	//bikeSelection Page
	// function loadBikes()
	// {
		
	// }

	
?>