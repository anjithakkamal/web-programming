html>
<head>
<title>general form</title>
</head>
<body >
<form action = "regconnect.php" method = "POST">
Name:
<input type = "text" name = "txtname">
<br><br>
Roll no.:
<input type = "text" name = "txtr_no">
<br><br>
Gender:
<input type = "text" name = "txtgen">
<br><br>

Address:
<textarea name = "add" type = "textarea"></textarea>
<br><br>
<b><input type = "submit" name = "btnInsert" value = "Save">
<input name="btnselect" type="submit" id="select" value="View">
</form>
</body>
</html>

<?php
$servername = "localhost";
$username = "20mca014";
$password = "2387";
$dbname = "20mca014";

$con = mysqli_connect($servername, $username, $password, $dbname);


if(isset($_POST["btnInsert"]))
{

$name =$_POST["txtname"];
$rollno = $_POST["txtr_no"];
$gender =$_POST["txtgen"];
$address = $_POST["add"];
$insert = "INSERT INTO studinfo (name,rollno,gender,address) values('$name','$rollno','$gender','$address');";

if (mysqli_query($con, $insert))
{
 echo "New record created successfully";
}
else
{
 echo "Error: " . $insert . "<br>" . mysqli_error($con);
}
}

if(isset($_POST["btnselect"]))
{

$sql = "SELECT * from studinfo";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0)
{
echo "<table>
<tr>
<th>Name</th>
<th>Roll No</th>
<th>Gender</th>
<th>Address</th>

</tr>";
while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td><input type=text name=txtName".$row["rollno"] ." value=".$row['name']."</td>";
echo "<td><input type=text name=txt1Name value=".$row['rollno']."</td>";
echo "<td><input type=text name=txt2Name value=".$row['gender']."</td>";
echo "<td><input type=text name=txt3Name value=".$row['address']."</td>";

echo "<td><input type=hidden name=hdnRollNo[] value=".$row["rollno"]."</td>";
echo "<td><input type=submit name=btnUpdate value=Update ></td>";

echo "</tr>";

}
echo "</table>";
 
} else
{
 echo "0 results";
}


}
if(isset($_POST["btnUpdate"]))
{

$name =$_POST["txtname"];
$rollno = $_POST["txtr_no"];
$gender =$_POST["txtgen"];
$address = $_POST["add"];
$update = "UPDATE studinfo SET rollno='9' WHERE rollno='3'";

if (mysqli_query($con, $update))