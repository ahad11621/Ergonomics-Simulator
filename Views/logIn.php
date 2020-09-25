<?php
    include '../Views/mainHeader.php';
    require_once '../Controllers/loginController.php';
?>


        <div class="loginbox">
            <img src="../Resources/Image/avatar.png" class="avatar">
            <h1>Login Here</h1>
            <form>
                <input type="text" name="userID" placeholder="Enter UserID">
                <input type="password" name="password" placeholder="Enter password">
                <input type="submit" name="login" value="Login">
                <a href="#">Forgot Password</a>
            </form>
        </div>

        
<?php 
    include '../Views/mainFooter.php';
?>