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
            width: 400px;
            height: 250px;
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
	color: #fff;
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
.service td{
	width: 50%;
	margin-bottom: 30px;
	padding: 5px;
}
.service td[type="text"]
{
    border: 1px solid powderblue;
    padding: 10px;
	border-bottom: 1px solid #fff;
	background-color: white;
	outline: none;
	height: 30px;
	color: #fff;
	font-size: 16px;

}u
	</style>
</head>
<body style="background-image: url(images/449916.jpg);">

	<div class="service">
		<br>
		<a href="index.php" style="width:100%; height:30px;margin:20px;"><img src="uploads/logo.png" width="150px" style="margin-top:10px;margin-bottom:30px;"></a>
	<?php
	$name ="phone and net";
	$capacity="500";
	$type="value4";
	$description="null";
	?>
<table cellpadding="20" border="2" align="center">

<tr>
	<td>id</td>
	<td>name</td>
	<td>capacity</td>
	<td>type</td>
	<td>description</td>

</tr>
<tr>
	<td>1</td>
<td>
	<?php  echo$name;?>
</td>
<td>
	<?php  echo$capacity;?>
</td>
<td>
	<?php  echo$type;?>
</td>
<td>
	<?php  echo$description;?>
</td>
</tr>
</table>
</div>
</body>
</html>