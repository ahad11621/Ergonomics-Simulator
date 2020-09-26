<?php
	$servername="localhost";
	$db_manufacturerName="root";
	$db_password="";
	$db_name="ergonomics_simulator_db";
	
	function execute($query) //this one is for insert, update, delete
	{
		global $servername,$db_manufacturerName,$db_password,$db_name;
		$conn = mysqli_connect($servername,$db_manufacturerName,$db_password,$db_name);
		mysqli_query($conn,$query);
	}
	function getResult($query) //thisone is for select query
	{
		global $servername,$db_manufacturerName,$db_password,$db_name;
		$conn = mysqli_connect($servername,$db_manufacturerName,$db_password,$db_name);
		$result = mysqli_query($conn,$query);
		return $result;
	}
	function getAssocArray($query){
		global $servername,$db_manufacturerName,$db_password,$db_name;
		$conn = mysqli_connect($servername,$db_manufacturerName,$db_password,$db_name);
		$data = array();
		$result = mysqli_query($conn,$query);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){ 												
				$data[] = $row;
			}
		}
		return $data;
	}
?>