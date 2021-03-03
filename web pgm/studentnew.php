<?php
$servername = "localhost";
$username = "20mca014";
$password = "2387";
$dbname = "20mca014";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "INSERT INTO student1(name,branch,mark)
VALUES ('anu', 'mca', '80')";
$sql = "INSERT INTO student1(name,branch,mark)
VALUES ('ananthu', 'mca', '70')";
$sql = "INSERT INTO student1(name,branch,mark)
VALUES ('devu', 'mca', '90')";
$sql = "INSERT INTO student1(name,branch,mark)
VALUES ('anju', 'mca', '90')";
if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
