<html>
<head>
<title>Update a Record in MySQL Database</title>
</head>
<body>

<?php
if(isset($_POST['update']))
{
$conn = mysqli_connect("localhost","20mca014","2387","20mca014");
if(! $conn )
{
  die('Could not connect: ' . mysqli_error());
}
$id = $_POST['id'];
$mark= $_POST['mark'];

$sql = "UPDATE student SET mark = $mark  WHERE id = $id";     

$retval = mysqli_query( $conn,$sql );
if(! $retval )
{
  die('Could not update data: ' . mysqli_error());
}
echo "Updated data successfully\n";
mysqli_close($conn);
}
else
{
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">Student_id</td>
<td><input name="id" type="text" id="id"></td>
</tr>
<tr>
<td width="100">Mark</td>
<td><input name="mark" type="text" id="mark"></td>
</tr>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="update" type="submit" id="update" value="Update">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>