<?php

include "db_conn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($connect,"delete from service where id = '$id'"); // delete query
if($del)
{
    mysqli_close($connect); // Close connection
    header("location:service.php"); // redirects to all records page
        
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>