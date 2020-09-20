<?php
    include '../Views/mainHeader.php';
    require_once '../Controllers/bikeController.php';
?>

        <div class="registerbox">
            <img src="../Resources/Image/avatar.png" class="avatar">
            <h3>Registration</h3>
            <form>
                <input type="text" name="" placeholder="Company Name">
                <input type="text" name="" placeholder="Company ID">
                <input type="text" name="" placeholder="Owner Name">
                <input type="text" name="" placeholder="E-mail">
                <input type="text" name="" placeholder="Phone">
                <input type="text" name="" placeholder="Address">
                <input type="text" name="" placeholder="Trade Number">
                <input type="password" name="" placeholder="Password">
                <input type="password" name="" placeholder="Confirm Password">
                <input type="submit" name="" value="Resister">
                <!-- <a href="#">Forgot Password</a> -->
            </form>
        </div>

<?php 
    include '../Views/mainFooter.php';
?>