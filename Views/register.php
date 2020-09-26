<?php
    include '../Views/mainHeader.php';
    require_once '../Controllers/registerController.php';
?>



        <div class="registerbox">
            <img src="../Resources/Image/avatar.png" class="avatar">
            <h3>Manufacturer Registration</h3>
            <form name="registerform" method="post" action="registerController.php" onsubmit="return val()">
                <input type="text" id="manufacturerName" name="manufacturerName" onkeyup="removermanufacturerName()" placeholder="Manufacturer Name">
                <label id= "manufacturerNammMSG"></label>
                <input type="text" id="manufacturerID" name="manufacturerID" onkeyup="removermanufacturerID()" placeholder="Manufacturer ID">
                <label id= "manufacturerIDMSG"></label>
                <input type="text" id="ownerName" name="ownerName" onkeyup="removerOwnerName()" placeholder="Owner Name">
                <label id= "ownermanufacturerNammMSG"></label>
                <input type="email" id="email" name="email" onkeyup="removerEmail()" placeholder="E-mail">
                <label id= "emailMSG"></label>
                <input type="text" id="phone" name="phone" onkeyup="removerPhone()" placeholder="Phone">
                <label id= "phoneMSG"></label>
                <input type="password" id="password" name="password" onkeyup="removerPassword()" placeholder="Password">
                <label id= "passwordMSG"></label>
                <input type="password" id="confirmPassword" name="confirmPassword" onkeyup="removerConfirmPassword()" placeholder="Confirm Password">
                <label id= "cpasswordMSG"></label>
                <input type="submit" name="register" value="Register">
            </form>
            <script type="text/javascript" src="../Scripts/register.js"></script>
        </div>

<?php 
    include '../Views/mainFooter.php';
?>