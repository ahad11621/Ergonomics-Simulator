<?php include 'manufacturerHeader.php';?>


<input type="text" value="<?php
session_start();
echo $_COOKIE['id']."    ".
 $_SESSION['id'];
?>">

<?php include 'manufacturerFooter.php';?>