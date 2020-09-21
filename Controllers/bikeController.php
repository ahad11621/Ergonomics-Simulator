<?php
	require_once '../Models/db_connect.php';

	// adminBikes Page
	function getAllApprovedBikes()
	{
		$query = "SELECT * FROM bikes where approval = 1";
		$bikes = getAssocArray($query);
		return $bikes;
	}

	// adminNewBikes Page
	function getAllNewBikes()
	{
		$query = "SELECT * FROM bikes where approval = 0";
		$bikes = getAssocArray($query);
		return $bikes;
	}

	// if(isset($_POST["addBike"]))
	// {
	// 	addThisBike($_POST["id"]);
	// }
	function addThisBike($bid)
	{
		$query="UPDATE bikes SET approval = 1 WHERE id = $bid";
		execute($query);
		header("Location: adminNewBikes.php");
	}
	
?>