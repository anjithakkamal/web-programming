 <?php
$servername = "117.254.186.108";
$username = "20mca014";
$password = "2387";
$dbname = "student1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student1 (id, name, branch,mark)
VALUES ('1', 'john', 'mca','80')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 