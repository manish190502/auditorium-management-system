<?php

// Connect to the database
$conn = new mysqli("localhost", "root", "", "auditorium");

// Check connection
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Get the form data
$username = $_POST['username'];
$hallid = $_POST['hallid'];
$date = $_POST['date'];
$start_time = $_POST['start_time'];
$updated_date = $_POST['updated_date'];
$updated_end_time = $_POST['updated_end_time'];
$updated_start_time = $_POST['updated_start_time'];


// Prepare the update query
$sql = "UPDATE timings SET edate='$updated_date',end_time ='$updated_end_time', start_time='$updated_start_time' WHERE user_name='$username' and hid='$hallid' and edate='$date'";
$abc = "SELECT * FROM timings WHERE hid='$hallid'AND start_time <= '$updated_start_time' AND end_time >= '$updated_start_time'";
$resp=mysqli_query($conn,$abc);
if(mysqli_num_rows($resp)>0){
	echo"<h3>Hall is already booked select another slot </h3>";
}
elseif(mysqli_query($conn, $sql)){
			echo"<h3>data updated successfully</h3><br>";

		}
		else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="new.php"> Click here to see your registration </a>

</body>
</html>
