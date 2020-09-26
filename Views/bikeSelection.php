<?php
    include '../Views/mainHeader.php';
    require_once '../Controllers/bikeController.php';
?>

    <div class="manufacturer">
        <h3>Manufacturer:</h3>
            <div class="Selection">
                <select name="" id="">
                    <option value="volvo">Select a manufacturer</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
    </div>
    <div class="bike">
        <h3>Bike:</h3>
            <div class="Selection">
                <select name="" id="">
                    <option value="volvo">Select a Bike</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
    </div>
    <div class="select">
        <a href="../Views/simulation.php">Select</a>
    </div>


<?php 
    include '../Views/mainFooter.php';
?>