<?php
$conn = mysqli_connect("localhost", "root", "", "auditorium");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$user_name = $_REQUEST['user_name'];
		//$last_name = $_REQUEST['last_name'];
		//$gender = $_REQUEST['gender'];
		//$address = $_REQUEST['address'];
		//$email = $_REQUEST['email'];
        //$password=$_REQUEST['password'];
		$hid=$_REQUEST['hid'];
        $edate=$_REQUEST['date'];
		// Performing insert query execution
		// here our table name is college
		$sql = "DELETE FROM  event_happening where user_name='$user_name' and hid='$hid' ";
		$abc= "DELETE FROM timings where user_name='$user_name' and hid='$hid' and edate='$edate'";
        if(mysqli_query($conn,$abc)){
		if(mysqli_query($conn, $sql)){
			echo "<h3>Data deleted from database successfully.</h3>";
                      
			//echo nl2br("\n$user_name\n "
			//	. "$gender\n $address\n $email \n$password \n");
			
		} }
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
<a href="new.php">
            <div class="button">Click here to see  reservations</div>
          </a>
</body>
</html>