<?php
    include '../Views/mainHeader.php';
    require_once '../Controllers/registerController.php';
?>



        <div class="registerbox">
            <img src="../Resources/Image/avatar.png" class="avatar">
            <h3>Manufacturer Registration</h3>
            <form name="registerform" method="post" action="registerController.php" onsubmit="return val()">
                <input type="text" id="manufacturerName" name="manufacturerName" onkeyup="removermanufacturerName()" placeholder="Manufacturer Name">
                <label id= "manufacturerNameMSG"></label>
                <input type="text" id="manufacturerID" name="manufacturerID" onkeyup="removermanufacturerID()" placeholder="Manufacturer ID">
                <label id= "manufacturerIDMSG"></label>
                <input type="text" id="ownerName" name="ownerName" onkeyup="removerOwnerName()" placeholder="Owner Name">
                <label id= "ownerNameMSG"></label>
                <input type="text" id="email" name="email" onkeyup="removerEmail()" placeholder="E-mail">
                <label id= "emailMSG"></label>
                <input type="text" id="phone" name="phone" onkeyup="removerPhone()" placeholder="Phone">
                <label id= "phoneMSG"></label>
                <input type="text" id="address" name="address" onkeyup="removerAddress()" placeholder="Address">
                <label id= "addressMSG"></label>
                <input type="text" id="tradeNember" name="tradeNumber" onkeyup="removerTradeNumber()" placeholder="Trade Number">
                <label id= "tradeNumberMSG"></label>
                <input type="password" id="password" name="password" onkeyup="removerPassword()" placeholder="Password">
                <label id= "passwordMSG"></label>
                <input type="password" id="confirmPassword" name="confirmPassword" onkeyup="removerConfirmPassword()" placeholder="Confirm Password">
                <label id= "passwordMSG"></label>
                <input type="submit" name="register" value="Register">
            </form>
        </div>

<?php 
    include '../Views/mainFooter.php';
?>