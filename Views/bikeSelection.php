<?php
    include '../Views/mainHeader.php';
    require_once '../Controllers/bikeController.php';
    
?>

    <div class = "bikeSearch">
        <input type = "text" class="" onkeyup = "searchBike(this)" placeholder="Search a Bike">
        <br>
        <div class = "result">
        <table cellspacing="0" cellpadding="8" width="">
           <!-- <tr>
            <td>ID</td>
            <td>Action</td>
           </tr> -->
           <tbody id="result">
             
           </tbody>
        </table> 
    </div>
    </div>
    

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

<?php 
    include '../Views/mainFooter.php';
?>