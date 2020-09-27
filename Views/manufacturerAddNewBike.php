<?php 
    include 'manufacturerHeader.php';
    require_once '../Controllers/bikeController.php';

    // if(isset($_POST['addNewBike'])){
    //     $bikeID = $_POST['bikeID'];
    //     $bikeName = $_POST['bikeName'];
    //     $manufacturerName = $_POST['manufacturerName'];
    //     $bikeImg = "../Resource/Image/".$_FILES['bikeImg']['name'];
    //     $pic = $_FILES['bikeImg']['name'];
    //     if(empty($bikeID)|| empty($bikeName)||empty($manufacturerName)||empty($bikeImg))
    //     {
    //         header('location: manufacturerAddNewBike.php?error= nullvalue');
    //     }
    //     else{
    //         $newbike = [
	// 			'bikeID' => $bikeID,
	// 			'bikeName' => $bikeName,
    //             'manufacturerName'  => $manufacturerName,
    //             'bikeImg'  => $bikeImg
    //         ];
            
    //         insertNewbikeinfo($newbike);

    //     }
    // }
?>


<div class="center">
	<form method="post" class="form-horizontal form-material" enctype = "multipart/form-data">
		<div class="form-group">
			<h4 class="text">Bike ID:</h4> 
			<input type="text" name = "bikeID" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Bike Name:</h4> 
            <input type="text" name ="bikeName" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Manufacturer Name:</h4> 
			<input type="text" name = "manufacturerName" class="form-control">
        </div>
        <div class="form-group">
              <img src="" id="Showpic">
		</div>
		<div class="form-group">
			<h4 class="text">Image</h4> 
			<input type="file" name = "image" class="form-control">
		</div>
		<div class="form-group text-center">
			<input type="submit" name="addNewBike" class="btn btn-success" value="Add Bike" class="form-control">
		</div>
	</form>
</div>
<!-- <script type="text/javascript" >
    function ShowImg()
    {
        var file = document.getElementById('bikeImg'); 
        document.getElementById('Showpic').src = window.URL.createObjectURL(file.files[0]);
    }
</script>
onchange="ShowImg() -->
<?php 
    include 'manufacturerFooter.php';
?>