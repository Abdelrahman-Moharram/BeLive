<?php
   
    session_start();

    require'db_conn.php';
   
    
   // the connecthion 

 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
    
    <link rel="shortcut icon" href="uploads/logo.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="uploads/logo.ico">
    
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <style>
            
            .the-big-one
            {
                background-color:#fff3cd;
                margin-left: 33.33%;
                margin-top: 50px;
                width: 33.33%;
                border-radius:10px;

                
                
            }
            .form-control
            {
                
                margin-left: 5px;
                width: 490px;
            }
            .ahmed
            {
                
               
                background-image: url(uploads/com.jpg);
                background-size: cover;
                
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
    margin-left: 33%;
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
    margin-left: 32.5%;
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
    margin-left: 36%;
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
    margin-left: 36%;
    padding: 3px;
    margin-top:390px;
    
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
    .warning{
    border-radius: 10px 10px 0px 0px;
    width: 29.333%;
    position: absolute;
    text-align: center;
    font-weight: 500;
    font-size: 18px;
    color: red;
    display: block;
    margin-left: 35.333%;
    padding: 3px;
    margin-top: 5%;
    
}
            
        </style>
</head>
<body class="ahmed">

<div>	<?php
    
    
	if(isset($_POST['create'])){
        
        if(!preg_match("/^([a-zA-Z' ]+)$/",$_POST['firstname']))
        {
           echo'<div class="firstname">The First name is invalid</div>';
        }
        else if(!preg_match("/^([a-zA-Z' ]+)$/",$_POST['lastname']))
        {
           echo'<div class="lastname">The last name is invalid</div>';
        }
        else if(!preg_match("/^([0][1][4][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])$/",$_POST['phonenumber']))
        {
           echo'<div class="phonenumber">The phone number incorrect</div>';
        }
        else if(!preg_match("/^([a-z]|[A-Z]|[0-9])+$/",$_POST['password']))
        {
           echo'<div class="password">The password has to include just nubermer or character </div>';
        }
        else {
                
               
                        ////////////////////////// login /////////////////

                $query2 ='select * from user where (phonenumber="'.$_POST['phonenumber'].'" OR email = "'.$_POST['email'].'") AND password = "'.$_POST['password'].'"';
            



                $getphone = mysqli_query($connect,'select * from user where phonenumber="'.$_POST['phonenumber'].'"');
                $getemail = mysqli_query($connect,'select * from user where email="'.$_POST['email'].'"');

                if($row = mysqli_fetch_assoc($getphone))
                {
                    echo'<div class="warning">this phone number already registerd</div>';
                }
                elseif ($row = mysqli_fetch_assoc($getemail)) {
                
                    echo'<div class="warning">this email already registerd</div>';
                    
                }
                else
                {
                  $query="insert into user (firstname,lastname,email, phonenumber, password )values('".$_POST['firstname']."','".$_POST['lastname']."','".$_OST['email'] . "','". $_POST['phonenumber']  . "','". $_POST['password'] . "')"; 
                  


                    $result = mysqli_query($connect, $query);
                    
                    $result2 = mysqli_query($connect, $query2);
                    if($row = mysqli_fetch_assoc($result2))
                    {
                    
                        //var_dump(mysqli_fetch_assoc($result2));                    
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['firstname'] = $row['firstname'];
                        $_SESSION['lastname'] = $row['lastname'];
                        $_SESSION['phonenumber'] = $row['phonenumber'];
                        $role = $row['role'];
                        if($role == 0)
                        {
                            header("Location: index.php");
                        }
                        else
                        {
                            header("Location: admin.php");
                        }
            
                    }
                    else
                    {
                     //  var_dump(mysqli_fetch_assoc($result2)); 
                       echo'<div class="warning">some thing wrong call admin</div>'; 
                    }
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
