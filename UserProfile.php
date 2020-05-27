
<?php 
    session_start();
    require 'db_conn.php';
   // if(isset($_POST['save-user']))
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
        
        <title>Profile</title>
        
        
    </head>
    
    <style>
        .form-div{
            margin-top: 100px;
            border: 1px solid #e0e0e0;
            padding-top: 15px;
        }
        #profiledisplay{
            display: block;
            width: 60%;
            margin: 10px auto auto;
            border-radius: 50%;
        }
 .Container .row .info{
    color: #4b4fe2;
    padding: 10px;
    margin-right: 16px;
}

.main_contain{
    padding: 20px ;
}
.main_contain .btn-block .a{
    color: white;
    width: 30%;
    
}

    </style>
    <body>
        
        
        
        <div class="Container">
            <div class="row">
                <div class="col-4 offset-md-4 form-div">
                    <form action="UserProfile.php" method="post"enctype="multipart/form-data">
                    <?php echo '<h3 class="text-center">' .$_SESSION['firstname']." ".$_SESSION['lastname'].'</h3>'; ?>
                        
                        <div class="form-group text-center">
                            <img src="images/placeholder.png" onclick="triggerClick() "id="profileDisplay"/>
                            <label for="ProfileIamge" > </label>
                            <input type="file" name="profileImage" onchange="displayImage(this)"  id="profileImage" style="display: none">
                            
                        </div>
                    
                        <div class="form-group">
                            <button type="submit" name="save-user" class="btn btn-primary btn-block">Save Image</button>
                        </div>
                    </form>
                 
                <div class="main_contain">
                    <hr>
                  <!--   <i class="fa fa-briefcase info"></i> -->
                    <?php echo'<i class="fa fa-envelope info">'." ".$_SESSION['email'].'</i>'; ?>
                     <br>
                    <?php echo '<i class="fa fa-phone info">'." ".$_SESSION['phonenumber'].'</i>'; ?>
                     <br>
                    <?php echo '<i class="fa fa-shield fa-rotate-270 info">'." ".$_SESSION['callService'].'</i>'; ?>
                     <br>
                    <?php echo '<i class="fa fa-shield fa-rotate-270 info">'." ".$_SESSION['internetService'].'</i>'; ?>
                     <br>  
                    <?php echo '<i class="fa fa-shield fa-rotate-270 info">'." ".$_SESSION['balance'].'</i>'; ?>
                     <hr>  
                     <button type="submit" name="Home" class="btn btn-primary btn-block"> <a class="a" href="index.php">Home</a></button>
                   
                   
                </div>
            
                </div>
            </div>
        </div>
        <script src="js/scripts.js"></script>
    </body>

</html>