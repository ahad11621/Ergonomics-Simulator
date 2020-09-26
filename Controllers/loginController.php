<?php
	require_once '../Models/db_connect.php';
	session_start();


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
			
			if($userID[0] == 'A')
			{
				$userID = $_POST['userID'];
				if(authenticate($userID,$password))
				{
					$_SESSION['id'] = $userID;
					header("Location: adminDashbord.php");
				}
			}
			else if($userID[0] == 'M')
			{
				$_SESSION['id'] = $userID;
				setcookie('id', $userID, time()+3600, '/');
				header("Location: manufacturerDashbord.php");
			}
			else
			{
				echo "404!!! user not found!!";
			}

		}
	}

	function authenticate($userID, $password)
	{
		$query = "SELECT * from user where id = '$userID' and password = '$password'";
		$result = getAssocArray($query);


		if($result){
			$result = $result[0];
		}
		return $result;

		// if($result)
		// {
		// 	if($result['types'] == '1')
		// 	{
		// 		header("Location: manufacturerDashbord.php");
		// 	}
		// 	elseif($result['types'] == '0')
		// 	{
		// 		header("Location: adminDashbord.php");
		// 	}
		// }
		// return $result;
		
		
	}

?>

	


	<!-- //	require_once('../services/managerService.php');

	if(isset($_POST['login'])){

		$userID = $_POST['userID'];
		$password1 = $_POST['password'];
		

		if(empty($userID) || empty($password)){
			header('location: ../Views/login.php?error=null_value');
		}else{
			$password = md5($password1);
			$query = "SELECT * FROM user WHERE id = '$userID' AND password = '$password'"; 
			$status = execute($query);

			$id = $status['id'] ;
			
			if($status){
				$status['id'] = $id;
				
				if($status['types'] == "1"){
				
					$_SESSION['id'] = $id;
					setcookie('status', "OK", time()+3600, '/');

					header('location: ../Views/manufacturerDashbord.php');
				} 
				else if($status['types'] == "0"){

					$_SESSION['id'] = $id;

					setcookie('status', "OK", time()+3600, '/');
					
					header('location: ../Views/adminDashbord.php');
				}
				else{
					echo "sorry!!!";
				}
			}else{
				header('location: ../Views/login.php?error=invalid_user');
			}
		}
	} -->