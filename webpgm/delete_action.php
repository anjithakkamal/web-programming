<html>
<head>
</head>
<body>
<h2>Deleted Record</h2>
<p>Please delete the input values and submit to update the record.</p>
<form action="" method="post">

<label>Name</label>
<input type="text" name="name" class="form-control" value="<?php echo $row["name"]; ?>">


<label>Email</label>
<input type="email" name="email" class="form-control" value="<?php echo $row["email"]; ?>">


<label>Mobile</label>
<input type="mobile" name="mobile" class="form-control" value="<?php echo $row["mobile"]; ?>">

<input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
<input type="submit" class="btn btn-primary" value="Submit" name="btndelete">
<a href="users.php" class="btn btn-default">Cancel</a>
<?php
}
?>

<?php
}
else
{
echo "No result found";
}
?>
</form>
<?php
if(isset($_POST["btndelete"]))
{
mysqli_query($conn,"DELETE FROM users WHERE id='" . $_POST['id'] . "'");

$message = "Record Deleted Successfully";
}

?>

</body>
</html>