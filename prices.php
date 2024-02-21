<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image:url("images/back.jpeg");
            background-size: cover;
            background-repeat: no-repeat;
            
        }
        .cost{
            border-style: solid;
            display: flex;
            justify-content: center;
}
        }
    </style>
</head>
<body>
    <h2>COST OF EACH HALL</h2>
<div class="cost">
 <?php
 $host = "localhost";
 $user = "root";
 $password = "";
 $dbname = "auditorium";
 
 $conn = mysqli_connect($host, $user, $password, $dbname);
 
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 
 
  $sql="SELECT t.hid,t.ticket_prices,h.no_of_seats FROM tickets t ,hall_no h where h.hid=t.hid";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "hall_id: " . $row["hid"]."  &nbsp; &nbsp;  "."  &nbsp; &nbsp;  "."no_of_seats: ".$row["no_of_seats"]. "  &nbsp; &nbsp;  "."price: " . $row["ticket_prices"]. "<br>". "<br>";
    }
} else {
    echo "0 results";
}

?>
</div>
</body>
</html>