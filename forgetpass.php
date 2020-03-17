<?php/**/
?>



<html>
<head>
    <title>forget password</title>
    <link rel="shortcut icon" href="uploads/logo.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="uploads/logo.ico">
	
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



        .forget {
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
.forget label {
width: 100%;
	 border: none;
 
	border-bottom: 1px solid #fff;
	background: transparent;
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
.forget{
	opacity: 1;
}
.forget input{
	width: 80%;
	margin-bottom: 30px;
	padding: 5px;
}
.forget input[type="text"]
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
.forget input{
	border: none;
	outline: none;
	height: 10px;
	background: #a4d9ef;
	color: #fff;
	font-size: 10px;
	border-radius: 10px;

}
.forget input[type="submit"]{
	cursor: pointer;
	font-size: 20px;
	background: #599bb5;
	color: #000;
	border-radius:10px;
	color: white;
	-webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
  width: 100px;

}


	</style>
</head>
<body>
	<div class="forget">
		<br>
		<a href="index.php" style="width:100%; height:30px;margin:20px;"><img src="uploads/logo.png" width="150px" style="margin-top:10px;margin-bottom:30px;"></a>
		<form>
			<label for="e-mail" >Please enter your email :</label>
			<br>
			<input type="text" name="email" placeholder="Email...">
			<br>
			<input type="submit" value="Submit">

		</form>
    </div>
   
</body>
</html>