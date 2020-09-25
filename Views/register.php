<?php
    include '../Views/mainHeader.php';
    require_once '../Controllers/registerController.php';
?>



        <div class="registerbox">
            <img src="../Resources/Image/avatar.png" class="avatar">
            <h3>Manufacturer Registration</h3>
            <form name="registerform" method="post" action="registerController.php" onsubmit="return val()">
                <input type="text" id="manufacturerName" name="manufacturerName" onkeyup="removerManufacturerName()" placeholder="Manufacturer Name">
                <input type="text" id="manufacturerID" name="manufacturerID" onkeyup="removermanufacturerID()" placeholder="Manufacturer ID">
                <input type="text" id="ownerName" name="ownerName" onkeyup="removerOwnerName()" placeholder="Owner Name">
                <input type="text" id="email" name="email" onkeyup="removerEmail()" placeholder="E-mail">
                <input type="text" id="phone" name="phone" onkeyup="removerPhone()" placeholder="Phone">
                <input type="text" id="address" name="address" onkeyup="removerAddress()" placeholder="Address">
                <input type="text" id="tradeNember" name="tradeNumber" onkeyup="removerTradeNumber()" placeholder="Trade Number">
                <input type="password" id="password" name="password" onkeyup="removerPassword()" placeholder="Password">
                <input type="password" id="confirmPassword" name="confirmPassword" onkeyup="removerConfirmPassword()" placeholder="Confirm Password">
                <input type="submit" name="register" value="Register">
            </form>
        </div>

<?php 
    include '../Views/mainFooter.php';
?>