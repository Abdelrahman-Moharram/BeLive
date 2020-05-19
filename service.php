<?php

    session_start();
    require 'db_conn.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Services</title>
<style>
	body {
            margin: 0;
            padding: 0;
            background-image: url(images/449916.jpg);
             background-repeat: no-repeat;
              background-attachment: fixed;
            background-size: cover;
            background-position: center;
            font-family: sans-serif;
            height: 100%;
        }



        .service {
        	align-content: center;
            width: 950px;
            height: 700px;
            background: #333333;
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            top: 1px;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            margin-top: 320px;
            text-align: center;

        }
.service td {
width: 100%;
	 border: none;
 
	border-bottom: 1px solid #fff;
	background: #cccccc;
	outline: none;
	height: 40px;
	color: black;
	font-size: 16px;
}
.image {
	width: 100px;
	height: 100px;
    border-radius: 50%;
    top:-50px;
    left: calc(50%-50%);
*
}
.service{
	opacity: 1;
}
.tdd{
	width: 50%;
	margin-bottom: 30px;
	padding: 5px;
}
.tdd
{
    border: 1px solid powderblue;
    padding: 10px;
	border-bottom: 1px solid #fff;
	background-color: white;
	outline: none;
	height: 30px;
	color: #fff;
	font-size: 16px;

}
	</style>
</head>
<body style="background-image: url(images/449916.jpg);">

	<div class="service">
		<br>
		<a href="index.php" style="width:100%; height:30px;margin:20px;"><img src="uploads/logo.png" width="150px" style="margin-top:10px;margin-bottom:30px;"></a>



<?php
			$result = mysqli_query($connect,"SELECT * FROM service");

			echo "<table cellpadding='20' border='2' align='center'>
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
			echo "<td class='tdd'>" . $id = $row['id'] . "</td>";
			echo "<td class='tdd'>" . $row['name'] . "</td>";
			echo "<td class='tdd'>" . $row['capacity'] . "</td>";
			echo "<td class='tdd'>" . $row['type'] . "</td>";
			echo "<td class='tdd'>" . $row['description'] . "</td>";
			echo "<td class='tdd'><a href='edit.php?id=".$row['id']."'>EDIT</a></td>";
			echo "<td class='tdd'><a href='delete.php?id=".$row['id']."'>DELETE</a></td>";
			echo "</tr>";
			}
			
			echo "</table>";
                echo "  <a href='insertService.html'>INSERT NEW SERVICE</a>";
			mysqli_close($connect);
		?>

</div>
</body>
</html>