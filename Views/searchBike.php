<?php
    require_once '../Controllers/bikeController.php';

    $id = $_REQUEST["id"];
    $bikes = searchBike($id);

    foreach($bikes as $bike)
    {
        echo "<tr>".
            "<td>".
                "<a href='bikeInfo.php?id={$bike['id']}'>{$bike['name']}</a> ".
            "</td>".
    "</tr>";
    }
?>