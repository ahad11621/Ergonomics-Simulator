<?php 
    include 'adminHeader.php';
    require_once '../Controllers/manufacturerController.php';
    
    $manufacturers = getAllApprovedManufacturers();

    if(!empty($_REQUEST["mid"]))
    {
        $dmid = $_REQUEST["mid"];
        deleteThisManufacturer($dmid);  
    }
   
?>

<div class="center">
	<h3 class="text">All Manufacturer</h3>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Owner Name</th>
			<th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Trade Number</th>
            <th></th>
		</thead>
		<tbody>
            <?php
                if(count($manufacturers)>0)
                {
                    foreach($manufacturers as $manufacturer)
                    {
                        echo "<tr>";
							echo "<td>".$manufacturer["id"]."</td>";
                            echo "<td>".$manufacturer["name"]."</td>";
                            echo "<td>".$manufacturer["owner_name"]."</td>";
                            echo "<td>".$manufacturer["email"]."</td>";
                            echo "<td>".$manufacturer["phone"]."</td>";
                            echo "<td>".$manufacturer["address"]."</td>";
                            echo "<td>".$manufacturer["trade_number"]."</td>";
							echo '<td><a href="adminManufacturer.php?mid='.$manufacturer["id"].'" class="btn btn-danger">Delete</td>';
						echo "<tr>";
					}
				}
			?>
		</tbody>
	</table>
</div>

<?php 
    include 'adminFooter.php';
?>