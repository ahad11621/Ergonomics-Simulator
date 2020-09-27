<?php
    include '../Views/mainHeader.php';
    require_once '../Controllers/registerController.php';
?>



        <div class="registerbox">
            <img src="../Resources/Image/avatar.png" class="avatar">
            <h3>Manufacturer Registration</h3>
            <form name="registerform" method="post" action="registerController.php" onsubmit="return val()">
                <input type="text" id="manufacturerName" name="manufacturerName" onkeyup="removermanufacturerName()" placeholder="Manufacturer Name">
                <div id= "manufacturerNammMSG"></div>
                <input type="text" id="manufacturerID" name="manufacturerID" onkeyup="removermanufacturerID()" placeholder="Manufacturer ID">
                <div id= "manufacturerIDMSG"></div>
                <input type="text" id="ownerName" name="ownerName" onkeyup="removerOwnerName()" placeholder="Owner Name">
                <div id= "ownermanufacturerNammMSG"></div>
                <input type="email" id="email" name="email" onkeyup="removerEmail()" placeholder="E-mail">
                <div id= "emailMSG"></div>
                <input type="text" id="phone" name="phone" onkeyup="removerPhone()" placeholder="Phone">
                <div id= "phoneMSG"></div>
                <input type="password" id="password" name="password" onkeyup="removerPassword()" placeholder="Password">
                <div id= "passwordMSG"></div>
                <input type="password" id="confirmPassword" name="confirmPassword" onkeyup="removerConfirmPassword()" placeholder="Confirm Password">
                <div id= "cpasswordMSG"></div>
                <input type="submit" name="register" value="Register">
            </form>
            <script type="text/javascript" src="../Scripts/register.js"></script>
        </div>

<?php 
    include '../Views/mainFooter.php';
?>