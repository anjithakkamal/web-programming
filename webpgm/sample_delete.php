
<?php
$con=mysqli_connect("localhost","20mca014","2387","20mca014");
$id=$_GET["id"];
if($con)
{

$qry1="delete from student_name where id='$id'";
if(mysqli_query($con, $qry1))
{
echo "Data Removed<br>";
} 
}
?>
