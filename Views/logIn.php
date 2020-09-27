<?php
    include '../Views/mainHeader.php';
    require_once '../Controllers/loginController.php';
    
    function userIdTest(){
        if(isset($_POST['login']))
        {
            $userId = $_POST['userID'];
            $pass = $_POST['password'];
            if($userId == "" || $pass== "")
            {
                echo "<div align='center' style='color: red;'>Invalid!!</div>";
            }
        }
    }

?>


       <div class="loginbox">
            <img src="../Resources/Image/avatar.png" class="avatar">
            <h1>Login Here</h1>
            <form  method = "post">
                <input type="text" name="userID" placeholder="Enter UserID">
                <input type="password" name="password" placeholder="Enter password">
                <input type="submit" name="login" value="Login"><?=userIdTest();?>
                <a href="#">Forgot Password</a>
            </form>
        </div>
          
<?php 
    include '../Views/mainFooter.php';
?>
