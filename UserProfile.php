
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
        body .Container .row .form-div .main_contain .text-center{
            text-align: center;
            color: blue;
            text-size: 20px;

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
        .btn {
            background-color: #0090d9;
            color: white;
            padding: 12px;
            margin: 10px 1;
            border: none;
            width: 31%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }

    </style>
    <body>



        <div class="Container">
            <div class="row">
                <div class="col-4 offset-md-4 form-div">


                    <div class="main_contain">


                        <?php echo '<h3 class=" text-center">' . " " . $_SESSION['firstname'] . " " . $_SESSION['lastname'] . '</h3>'; ?>
                        <hr>
                      <!--   <i class="fa fa-briefcase info"></i> -->
                        <?php echo'<i class="fa fa-envelope info">' . " " . $_SESSION['email'] . '</i>'; ?>
                        <br>
                        <?php echo '<i class="fa fa-phone info">' . " " . $_SESSION['phonenumber'] . '</i>'; ?>
                        <br>
                        <?php echo '<i class="fa fa-podcast info" aria-hidden="true">' . " " . $_SESSION['callService'] . '</i>'; ?>
                        <br>
                        <?php echo '<i class="fa fa-rss  info" aria-hidden="true">' . " " . $_SESSION['internetService'] . '</i>'; ?>
                        <br>  
                        
                        <?php
                        if ($row = mysqli_fetch_array(mysqli_query($connect, "select balance from user where phonenumber='".$_SESSION['phonenumber']."'")))
                            echo'<i class="fa fa-money info">' . " " . $row['balance'] . '</i>';
                        ?> 

                        <hr>  
                        <?php
                      
                        
                        $ret = mysqli_query($connect, "select * from user  where phonenumber='".$_SESSION['phonenumber']."'");   
                        if ($row = mysqli_fetch_array($ret)) {
                                
                            $_SESSION['id'] = $row['id'];
                            ?>


                            <form name="abc" action="" method="post">  
                                <a class="btn btn-primary btn-xs btn-mini" href="index.php">Home</a>
                                <a href="edit-user.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-xs btn-mini">Edit Profile</a> 
                                <a class="btn btn-primary btn-xs btn-mini" href="Edit Service.php">Services</a>
                               
                            </form>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>

    </body>

</html>