<?php

    session_start();
    require 'db_conn.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="shortcut icon" href="uploads/logo.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="uploads/logo.ico">

    </head>


    <body>

    	<?php
			$result = mysqli_query($connect,"SELECT * FROM service");

			echo "<table border='1'>
			<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Capacity</th>
			<th>Type</th>
			<th>Description</th>
			<th>EDIT</th>
			<th>DELETION</th>
			</tr>";

			while($row = mysqli_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>" . $id = $row['id'] . "</td>";
			echo "<td>" . $row['name'] . "</td>";
			echo "<td>" . $row['capacity'] . "</td>";
			echo "<td>" . $row['type'] . "</td>";
			echo "<td>" . $row['description'] . "</td>";
			echo "<td><a href='editService.php?id=".$row['id']."'>EDIT</a></td>";
			echo "<td><a href='delete.php?id=".$row['id']."'>DELETE</a></td>";
			echo "</tr>";
			}
			echo "</table>";

			mysqli_close($connect);
		?>
		
		

    </body>
</html>