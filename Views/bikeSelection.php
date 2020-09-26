<?php
    include '../Views/mainHeader.php';
    require_once '../Controllers/bikeController.php';
    require_once '../Controllers/manufacturerController.php';
    $manufacturers = loadManufacturers();
    //$bikes = loadBikes();
?>

    <script>
        $document.ready(function()
        {
            $("#manufacturers").change(function()
            {
                var mfid = $("#manufacturers").val();
                $.ajax
                ({
                    url: '../Controllers/bikeController.php',
                    method: 'post',
                    data: 'mfid =' + mfid
                })
            })
        })
    </script>

    <div class="manufacturer">
        <h3>Manufacturer:</h3>
            <div class="Selection">
                <select name="manufacturers-control" id="manufacturers" class = "select">
                <option selected = "">Select a manufacturer</option>
                    <?php
                        foreach($manufacturers as $manufacturer)
                        {
                            echo "<option id = '".$manufacturer["id"]."' value = '".$manufacturer["id"]."'>".$manufacturer["manufacturer"]."</option>";
                        }
                    ?>
                </select>
            </div>
    </div>
    <div class="bike">
        <h3>Bike:</h3>
            <div class="Selection">
                <select name="" id="" class = "select">
                    
                </select>
            </div>
    </div>
    <div class="btnselect">
        <a href="../Views/simulation.php">Select</a>
    </div>


<?php 
    include '../Views/mainFooter.php';
?>
<!-- Manufacturer -->
                    <!-- <option value="">Select a manufacturer</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option> -->

<!-- bike -->
                    <!-- <option value="">Select a Bike</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option> -->