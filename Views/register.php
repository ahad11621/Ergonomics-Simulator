<?php
    include '../Views/mainHeader.php';
    require_once '../Controllers/registerController.php';
?>



        <div class="registerbox">
            <img src="../Resources/Image/avatar.png" class="avatar">
            <h3>Manufacturer Registration</h3>
            <form name="registerform" method="post" action="registerController.php" onsubmit="return val()">
                <input type="text" id="manufacturerName" name="manufacturerName" onkeyup="removermanufacturerName()" placeholder="Manufacturer Name">
                <span id= "manufacturerNammMSG"></span>
                <input type="text" id="manufacturerID" name="manufacturerID" onfocusout="checkUser()" onkeyup="removermanufacturerID()" placeholder="Manufacturer ID">
                <span id= "manufacturerIDMSG"></span>
                <span id = "errorUserID"></span> 
                <input type="text" id="ownerName" name="ownerName" onkeyup="removerOwnerName()" placeholder="Owner Name">
                <span id= "ownermanufacturerNammMSG"></span>
                <input type="email" id="email" name="email" onkeyup="removerEmail()" placeholder="E-mail">
                <span id= "emailMSG"></span>
                <input type="text" id="phone" name="phone" onkeyup="removerPhone()" placeholder="Phone">
                <span id= "phoneMSG"></span>
                <input type="password" id="password" name="password" onkeyup="removerPassword()" placeholder="Password">
                <span id= "passwordMSG"></span>
                <input type="password" id="confirmPassword" name="confirmPassword" onkeyup="removerConfirmPassword()" placeholder="Confirm Password">
                <span id= "cpasswordMSG"></span>
                <input type="submit" name="register" value="Register">
            </form>
            <script type="text/javascript" src="../Scripts/register.js"></script>
        </div>

        <script>
            function checkUser(input)
            {
                var Key = input.value;
                // if(searchKey == "")
                // {
                //     document.getElementById("result").innerHTML = "";
                //     return;
                // }
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function()
                {
                    if(this.readyState == 4 && this.status == 200)
                    {
                        document.getElementById("errorUserID").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET","checkUser.php?key="+Key,true);
                xhttp.send();
            }
        </script>

<?php 
    include '../Views/mainFooter.php';
?>