<?php 
$conn=mysqli_connect("localhost","root","","result") or die(mysqli_error($con));

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, rollno, cgpa FROM result";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "name:".$row["name"]."<br>"."rollno:".$row["rollno"]."<br>"."cgpa:".$row["cgpa"]."<br>". "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

