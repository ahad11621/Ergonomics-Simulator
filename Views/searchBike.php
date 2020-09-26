<?php
    require_once '../Controllers/bikeController.php';

    $id = $_REQUEST["id"];
    $bikes = searchBike($id);

    foreach($bikes as $bike)
    {
        echo $bike["name"]."<br>";
    }
?>