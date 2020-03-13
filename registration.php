<?php
$host="127.0.0.1";
$user="root";
$password="";
$database="sw2";
$connect=  mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_errno()){
    die("cannot connect to database field:". mysqli_connect_error());
    
}
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <style>
            
            .the-big-one
            {
                background-color:#80bdff;
                margin-left: 300px;
                margin-top: 50px;
                 width: 50%;
                border-radius:10px;

                
                
            }
            .form-control
            {
                
                margin-left: 5px;
                width: 490px;
            }
            .ahmed
            {
                
               
                background-image: url(new1.jpg);
                
            }
            #register
            {
              margin-left: 200px;  
              margin-top:-20px;
                
            }
            .Registration
            {
               margin-left: 140px; 
                
            }
            .pragraph
            {
                margin-left: 100px;
            }
            .text
            {
              margin-left: 10px;  
                
            }
           .firstname{
    border-radius: 10px 10px 0px 0px;
    width:400px;
    position: absolute;
    text-align: center;
    font-weight: 500;
    
    color: red;
    display: block;
    margin-left: 290px;
    padding: 3px;
    margin-top:110px;
    
}
.lastname{
    border-radius: 10px 10px 0px 0px;
    width:400px;
    position: absolute;
    text-align: center;
    font-weight: 500;
    color: red;
    display: block;
    margin-left: 280px;
    padding: 3px;
    margin-top:182px;
    
}
.phonenumber{
    border-radius: 10px 10px 0px 0px;
    width:400px;
    position: absolute;
    text-align: center;
    font-weight: 500;
    color: red;
    display: block;
    margin-left: 330px;
    padding: 3px;
    margin-top:321px;
    
}
.password{
    border-radius: 10px 10px 0px 0px;
    width:500px;
    position: absolute;
    text-align: center;
    font-weight: 500;
    color: red;
    display: block;
    margin-left: 335px;
    padding: 3px;
    margin-top:393px;
    
}
.handel_error_connection{
    border-radius: 10px 10px 0px 0px;
    width:500px;
    position: absolute;
    text-align: center;
    font-weight: 500;
    color: red;
    display: block;
    margin-left: 305px;
    padding: 3px;
    margin-top:60px;
    background-color: burlywood;
    
}
            
        </style>
</head>
<body class="ahmed">

<div>
	<?php
	if(isset($_POST['create'])){
        
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email 	= $_POST['email'];
	$phonenumber= $_POST['phonenumber'];
	$password =($_POST['password']);
        if(!preg_match("/^([a-zA-Z' ]+)$/",$firstname))
        {
           echo'<div class="firstname">The First name is invalid</div>';
        }
  else if(!preg_match("/^([a-zA-Z' ]+)$/",$lastname))
        {
           echo'<div class="lastname">The last name is invalid</div>';
        }
  else if(!preg_match("/^([0][1][4][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])$/",$phonenumber))
        {
           echo'<div class="phonenumber">The phone number incorrect</div>';
        }
  else if(!preg_match("/^([a-z]|[A-Z]|[0-9])+$/",$password))
        {
           echo'<div class="password">The password has to include just nubermer or character </div>';
        }
 else {
        
        $query="insert into user (firstname,lastname,email, phonenumber, password )values('". $firstname  . "','". $lastname  . "','". $email  . "','". $phonenumber  . "','". $password . "')";
        $result=  mysqli_query($connect, $query);
		if($result){
                   header("Location:login.php");
		}else{
                      echo'<div class="handel_error_connection">The phone number or the email already signed   </div>';
		}
        }
       
        
        }
	?>
    
</div>

    <div class="the-big-one">
        <form  method="post">
            <h1 class="Registration">Registration</h1>
            <p class="pragraph">Create your account it is takes a minute </p>
	<hr class="mb-3">
        <label for="firstname" class="text"><b>First Name</b></label>
	<input class="form-control" id="firstname" type="text" name="firstname" required>

	<label for="lastname"  class="text" ><b>Last Name</b></label>
	<input class="form-control" id="lastname"  type="text" name="lastname" required>

	<label for="email"  class="text" ><b>Email Address</b></label>
        <input class="form-control" id="email"  type="email" name="email" required>

        <label for="phonenumber" class="text" ><b>Phone Number</b></label>
	<input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>

	<label for="password" class="text" ><b>Password</b></label>
	<input class="form-control" id="password"  type="password" name="password" required>
	<hr class="mb-3">
        <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
	</form>
</div>
    
</body>
</html>