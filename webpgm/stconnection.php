<?php
  $servername = "localhost";
  $username = "20mca014";
  $password = "2387";
  $dbname = "20mca014";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
   if(!$conn)
       {
         die('Could not Connect MySql Server:' .mysql_error());
       }
?>
eth connection nta code
<?php

include 'db.php';
//echo $_GET['userid'];


$sql = "SELECT * FROM users WHERE id='" . $_GET['userid'] . "'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

 while($row = mysqli_fetch_array($result))
 {
 ?>






