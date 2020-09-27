<?php
require_once '../Controllers/loginController.php';

$userID = $_REQUEST['key'];
$user = checkUser($userID);

if($user)
{
   echo "User alredy exist." 
}
else
{
    echo "User Valid."
}

?>