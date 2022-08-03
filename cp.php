<!DOCTYPE HTML>
<html>  
<body>
<head>
    <style>

.f {padding: 15px 32px;
    position: absolute;
  left: 290px;
  top: 100px;
  font-size: 12px;
}

.l {padding: 15px 32px;
    position: absolute;
  left: 110px;
  top: 200px;
  font-size: 12px;
}

.s {padding: 15px 32px;
    position: absolute;
  left: 300px;
  top: 200px;
  right: 500;
  font-size: 12px;
}

.r {padding: 15px 32px;
    position: absolute;
  left: 500px;
  top: 200px;
  right: 150px;
  font-size: 12px;
}
 
.b {padding: 15px 32px;
    position: absolute;
  left: 290px;
  top: 300px;
  font-size: 12px;
}

</style>
</head>
<h2  style=" padding: 2px 250px  250px; ">Control Panel</h2>
<form style=" padding: 100px 100px  250px; "  action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" >

<button class= "f",class="button"   name='f' value='f' >forward</button>
<button class= "l", class="button" name='l' value='l'>left</button>
<button class= "s", class="button" name='s' value='s'>stop</button>
<button class= "r", class="button" name='r' value='r'>right</button>
<button class= "b",class="button" name='b' value='b'>backward </button>

</body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cp";
$val='';
// Create connection// Check connection
$conn =mysqli_connect("localhost", "root","","cp")or die ("Error in  Connection");

if(isset($_POST['f'])) { 
  $val=$_POST["f"];
$sql = "INSERT INTO db (f)
VALUES ('$val')";
} 

if(isset($_POST['l'])) { 
  $val=$_POST["l"];
$sql = "INSERT INTO db (l)
VALUES ('$val')";
} 

if(isset($_POST['s'])) { 
  $val=$_POST["s"];
$sql = "INSERT INTO db (s)
VALUES ('$val')";
}

if(isset($_POST['r'])) { 
  $val=$_POST["r"];
$sql = "INSERT INTO db (r)
VALUES ('$val')";
} 

if(isset($_POST['b'])) { 
  $val=$_POST["b"];
$sql = "INSERT INTO db (b)
VALUES ('$val')";
}  


 if ($conn->query($sql) === TRUE) {
  echo "The table has been successfully created and the value added"."<br>";
} else {
  echo "Error " . $conn->error ."<br>";
}
echo "<br>"."Dispaly Values From DB "."<br>";
//..................
$sql = "SELECT f FROM db";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "  " . $row['f'] ;

  }
  echo"<br>";
} else {
  echo "0 results";
}

//...............
$sql = "SELECT l FROM db";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "  " . $row['l'] ;

  }
  echo"<br>";
} else {
  echo "0 results";
}
//...............
$sql = "SELECT s FROM db";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "  " . $row['s'] ;

  }
  echo"<br>";
} else {
  echo "0 results";
}
//...............
$sql = "SELECT r FROM db";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "  " . $row['r'] ;

  }
  echo"<br>";
} else {
  echo "0 results";
}
//...............
$sql = "SELECT b FROM db";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "  " . $row['b'] ;

  }
  echo"<br>";
} else {
  echo "0 results";
}
//...............
$conn->close();
?>

</html>


