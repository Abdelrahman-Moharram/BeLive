<?php

include "db_conn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($connect,"select * from service where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $name = $_POST['name'];
    $type = $_POST['type'];
    $capacity = $_POST['capacity'];
    $description = $_POST['description'];
	
    $edit = mysqli_query($connect,"update service set name='$name', type='$type',  capacity='$capacity' ,  description='$description' where id='$id'");
	
    if($edit)
    {
        mysqli_close($connect); // Close connection
        header("services.php");
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST" action="services.php">
  <input type="text" name="name" value="<?php echo $data['name'] ?>" placeholder="Enter Name" Required>
  <input type="text" name="type" value="<?php echo $data['type'] ?>" placeholder="Enter type" Required>
  <input type="text" name="capacity" value="<?php echo $data['capacity'] ?>" placeholder="Enter capacity" Required>
  <input type="text" name="description" value="<?php echo $data['description'] ?>" placeholder="Enter description" Required>
  <input type="submit" name="update" value="Update">
</form>