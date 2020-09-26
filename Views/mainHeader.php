<?php
    require_once '../Controllers/bikeController.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="../Styles/mystyle.css">
        <script type="text/javascript" src="../Scripts/register.js"></script>
    </head>
    <body>
        <div class="heading">
            <div class="logo">
                <img src="../Resources/Image/logo.png">
            </div>
            <div class="buttons">
                <ul>
                    <li class="home">
                        <a href="../Views/index.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Store</a>
                    </li>
                    <li>
                        <a href="../Views/login.php">Log In</a>
                    </li>
                    <li>
                        <a href="../Views/register.php">Register</a>
                    </li>
                    <li>
                        <input type = "text" class="bikeSearch" onkeyup = "searchBike(this)" placeholder="Search a Bike">
                        <br>
                    </li>
                </ul>
            </div>
        </div>
        <div class="result" id = "result"></div>
        <script>
            function searchBike(input)
            {
                var searchKey = input.value;
                if(searchKey == "")
                {
                    document.getElementById("result").innerHTML = "";
                    return;
                }
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function()
                {
                    if(this.readyState == 4 && this.status == 200)
                    {
                        document.getElementById("result").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET","searchBike.php?id="+searchKey,true);
                xhttp.send();
            }
        </script>
    
