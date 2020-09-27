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


	//Search Bike & bikeSelection Page
	function searchBike($id)
	{
		$query = "SELECT * FROM bikes WHERE approval = 1 and name LIKE '%$id%'";
		$bikes = getAssocArray($query);
		return $bikes;
	}

	//ManufacturerBikes Page
	function getMenufacturerNameByID($mid)
	{
		$query = "SELECT name FROM manufacturers WHERE approval = 1 AND id = '$mid'";
		$manufacturers = getAssocArray($query);
		return $manufacturers;

		getBikeNameByID($manufacturers);
		
	}
	function getBikeNameByID($nm)
	{
		$query = "SELECT * FROM bikes WHERE approval = 1 and name = $nm";
		$bikes = getAssocArray($query);
		return $bikes;
	}
	
	//manufacturerAddNewBike Page

	if(isset($_POST['addNewBike']))
	{
		$target_dir = "../Resources/Image/";
		$target_file = "../Resources/Image/".basename($_FILES["image"]["name"]);
		move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		insertNewBikeInfo($_POST['bikeID'], $_POST['bikeName'], $_POST['manufacturerName'], $target_file);
	}

	function insertNewBikeInfo($id, $name, $mn, $image){
		$query = "INSERT INTO bikes VALUES ('$id', '$name', '$mn', '0', '$image')";
		execute($query);
		header("Location: manufacturerAddNewBike.php");
	}

?>
