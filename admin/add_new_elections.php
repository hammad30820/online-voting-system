<html>
<head>
<title>Online voting system</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<script src="js/bootstrap.js"></script>
<script src="js/javascript.js"></script>
</head>
<body>
	<div class="container">
		<div class="col-sm-6">
		<h3>Add New Elections</h3>
		<form method="POST">
			<div class="form-group">
				<label>Add Election Name</label>
				<input type="text" name="elections_name" class="form-control">
			</div>	
			<div class="form-group">
				<label>Add Election Start Date</label>
				<input type="date" name="elections_start_date" class="form-control">
			</div>	
			<div class="form-group">
				<label>Add Election End Date</label>
				<input type="date" name="elections_end_date" class="form-control">
			</div>	
		    <input type="submit" name="add_elections" class="btn btn-success">
		
			
		</form>
	    </div>
	</div>
	
</body>
</html>
<?php
$conn=new mysqli("localhost","root","","votingsystem_db");
if(isset($_POST['add_elections'])){
    $elections_name=$_POST['elections_name'];
    $elections_start_date=$_POST['elections_start_date'];
    $elections_end_date=$_POST['elections_end_date'];
    $insert="INSERT INTO elections(elections_name,elections_start_date,elections_end_date) 
    values('$elections_name','$elections_start_date','$elections_end_date')";
    $run=$conn->query($insert);
    if($run){
        echo"success";
        ?>
         <a href="add_candidates.php">next</a>
         <?php
     }
     else{
        echo"error";
     }
}
?>