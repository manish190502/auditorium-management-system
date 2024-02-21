<?php

// Connect to the MySQL database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "auditorium";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//$user_name = $_REQUEST['user_name'];
$username = $_POST['username'];
$hallid= $_POST['hallid'];
$date= $_POST['date'];
$start_time= $_POST['start_time'];
$end_time= $_POST['end_time'];
$event_name= $_POST['event_name'];


// Escape user inputs for security
//$user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
//$hallid = mysqli_real_escape_string($conn, $_POST['hallid']);
//$date = mysqli_real_escape_string($conn, $_POST['date']);
//$start_time = mysqli_real_escape_string($conn, $_POST['start_time']);
//$end_time = mysqli_real_escape_string($conn, $_POST['end_time']);
//$event_name = mysqli_real_escape_string($conn, $_POST['event_name']);
//$abc = "SELECT * FROM timings WHERE hid='$hallid'AND start_time <= '$start_time' AND end_time >= '$start_time'";

// Attempt insert query execution
$abc = "INSERT INTO timings (user_name, hid, edate, start_time,end_time) VALUES ('$username', '$hallid', '$date', '$start_time','$end_time')";
$sql = "INSERT INTO event_happening (user_name, hid, event_name) VALUES ('$username', '$hallid', '$event_name')";
$dupl = "SELECT * FROM timings WHERE hid='$hallid'AND start_time <= '$start_time' AND end_time >= '$start_time'";
$resp=mysqli_query($conn,$dupl);

if(mysqli_num_rows($resp)>0){
  echo"please book another slot ";
  }

elseif(mysqli_query($conn, $abc)){
if(mysqli_query($conn, $sql)){
    echo "Records added successfully."."<br>";
}}

 else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
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
    <style>
       body{
            background-image:url("images/back.jpeg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .button {
  display: inline-block;
  border-radius: 4px;
  background-color: black;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

    </style>
    <title>Document</title>
</head>
<body>
<html>
  <body>
    <a href="new.php" class="button">See Registration</a><br>
  </body>
</html>

</body>
</html>