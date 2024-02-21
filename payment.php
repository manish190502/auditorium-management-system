<?php
  // Connect to the database
  //$host = "localhost";
  //$username = "root";
  //$password = "";
  //$dbname = "auditorium";
  $conn = mysqli_connect("Localhost","root","", "auditorium");

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Get the submitted username and password
  $username1 = $_POST['username1'];
  $password1 = $_POST['password1'];

  // Query the database for a matching username and hashed password
  $sql = "SELECT * FROM new_regs WHERE user_name='$username1' AND password='$password1'";
  $result = mysqli_query($conn, $sql);

  // If a match is found, login is successful
  if (mysqli_num_rows($result) > 0) {
    // Redirect to dashboard or home page
    $abc="SELECT ticket_prices,e.hid from tickets t ,event_happening e where e.hid=t.hid and user_name='$username1'";
    $resp = mysqli_query($conn,$abc);

    $sum="SELECT sum(ticket_prices),e.hid from tickets t ,event_happening e where e.hid=t.hid and user_name='$username1'";
    $tot =mysqli_query($conn,$sum);
    while($row = $resp->fetch_assoc()) {
        echo "Please pay Rs  " . $row["ticket_prices"]. "<br>"."hall_id booked " . $row["hid"]."<br>"."<br>";
        }
  while($row = $tot->fetch_assoc()) {
    echo "total amount is Rs  ".$row["sum(ticket_prices)"]."<br>";
}
  } else {
    // Display error message
    echo "Invalid username or password";
  }

  // Close the database connection
  mysqli_close($conn);
?>
