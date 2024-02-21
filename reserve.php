
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap");
body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-image:url("images/back.jpeg");
  background-size: cover;
  background-repeat: no-repeat;
  font-family: "Sansita Swashed", cursive;
}
.center {
  position: relative;
  padding: 50px 50px;
  background: #fff;
  border-radius: 10px;
}
.center h1 {
  font-size: 2em;
  border-left: 5px blue;
  padding: 10px;
  color: #00ffda;
  letter-spacing: 5px;
  margin-bottom: 60px;
  font-weight: bold;
  padding-left: 10px;
}
.center .inputbox {
  position: relative;
  width: 300px;
  height: 50px;
  margin-bottom: 50px;
}
.center .inputbox input {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  border: 2px solid #000;
  outline: none;
  background: none;
  padding: 10px;
  border-radius: 10px;
  font-size: 1.2em;
}
.center .inputbox:last-child {
  margin-bottom: 0;
}
.center .inputbox span {
  position: absolute;
  top: 14px;
  left: 20px;
  font-size: 1em;
  transition: 0.6s;
  font-family: sans-serif;
}
.center .inputbox input:focus ~ span,
.center .inputbox input:valid ~ span {
  transform: translateX(-13px) translateY(-35px);
  font-size: 1em;
}
.center .inputbox [type="submit"] {
  width: 50%;
  background: dodgerblue;
  color: #fff;
  border: #fff;
}
.center .inputbox:hover [type="submit"] {
    background-image: linear-gradient(to right,#d4145a, #fbb03b);
}

    </style>
</head>
<body>
    <div class="center">
    <h1>reservations</h1>
        <form action="con_reserv.php" method="post">
            
        <div class="inputbox">
            <input type="text" placeholder="enter your username" name="username">
            <span>Username</span>
          </div>
          <div class="inputbox">
            <input type="text" placeholder="enter your hallid" name="hallid">
            <span>enter your hall id </span>
          </div>

          <div class="inputbox">
            <input type="text" placeholder="enter the event" name="event_name">
            <span>enter your event </span>
          </div>

          <div class="inputbox">
            <input type="date" placeholder="enter the date" name="date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
            <span>Enter the date  </span>
          </div>

          <div class="inputbox">
            <input type="time" placeholder="enter the start time" name="start_time" >
            <span>Enter the start time  </span>
          </div>

          <div class="inputbox">
            <input type="time" placeholder="enter the end time" name="end_time" >
            <span>Enter the end time  </span>
          </div>

          <div class="inputbox">
            <input type="submit" value="submit">
          </div>
        </form>
      </div>
</body>
</html>