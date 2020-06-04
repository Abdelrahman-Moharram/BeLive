<?php
session_start();
require 'db_conn.php';
if (isset($_POST['submit'])) {


    $query = 'select * from user where (phonenumber="' . $_POST['email'] . '" OR email = "' . $_POST['email'] . '") AND password = "' . $_POST['password'] . '"';
    $result = mysqli_query($connect, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['phonenumber'] = $row['phonenumber'];
        $_SESSION['bal'] = $row['balance'];
        $_SESSION['internetService'] = $row['internetService'];
        $_SESSION['callService'] = $row['callService'];
        
        $_SESSION['role'] = $row['role'];



        if ($_SESSION['role'] == 0) {
            header("Location: index.php");
            if ($_SESSION['role'] == 1) {
                header("Location: UserProfile.php");
            }
        } else if ($_SESSION['role'] == 1) {
            header("Location: admin.php");
        } else if ($gmail == "admin.belive@gmail.com") {
            header("Location: admin.php");
        }
    } else {
        echo'<div class="warning">Email or Password Not Correct Please try again</div>';
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="shortcut icon" href="uploads/logo.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="uploads/logo.ico">


        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="js/login_effect.js" rel="script" id="bootstrap-js">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/login_effect.js">
            function openForm() {
                document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
                document.getElementById("myForm").style.display = "none";
            }
        </script>
        <!------ Include the above in your HEAD tag ---------->

        <style type="text/css">

            /* BASIC */



            body {
                font-family: "Poppins", sans-serif;
                height: 100vh;
            }

            a {
                color: #92badd;
                display:inline-block;
                text-decoration: none;
                font-weight: 400;
            }

            h2 {
                text-align: center;
                font-size: 16px;
                font-weight: 600;
                text-transform: uppercase;
                display:inline-block;
                margin: 40px 8px 10px 8px; 
                color: #cccccc;
            }



            /* STRUCTURE */

            .wrapper {
                display: flex;
                align-items: center;
                flex-direction: column; 
                justify-content: center;
                width: 100%;
                min-height: 100%;
                padding: 20px;
            }

            #formContent {
                -webkit-border-radius: 10px 10px 10px 10px;
                border-radius: 10px 10px 10px 10px;
                background: #fff;
                padding: 30px;
                width: 90%;
                max-width: 450px;
                position: relative;
                padding: 0px;
                -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
                box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
                text-align: center;
            }

            #formFooter {
                background-color: #f6f6f6;
                border-top: 1px solid #dce8f1;
                padding: 25px;
                text-align: center;
                -webkit-border-radius: 0 0 10px 10px;
                border-radius: 0 0 10px 10px;
            }



            /* TABS */

            h2.inactive {
                color: #cccccc;
            }

            h2.active {
                color: #0d0d0d;
                border-bottom: 2px solid #5fbae9;
            }



            /* FORM TYPOGRAPHY*/

            input[type=button], input[type=submit], input[type=reset]  {
                background-color: #56baed;
                border: none;
                color: white;
                padding: 15px 80px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                text-transform: uppercase;
                font-size: 13px;
                -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
                box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
                -webkit-border-radius: 5px 5px 5px 5px;
                border-radius: 5px 5px 5px 5px;
                margin: 5px 20px 40px 20px;
                -webkit-transition: all 0.3s ease-in-out;
                -moz-transition: all 0.3s ease-in-out;
                -ms-transition: all 0.3s ease-in-out;
                -o-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }

            input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
                background-color: #39ace7;
            }

            input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
                -moz-transform: scale(0.95);
                -webkit-transform: scale(0.95);
                -o-transform: scale(0.95);
                -ms-transform: scale(0.95);
                transform: scale(0.95);
            }

            input[type=text],input[type=password] {
                background-color: #f6f6f6;
                border: none;
                color: #0d0d0d;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 5px;
                width: 85%;
                border: 2px solid #f6f6f6;
                -webkit-transition: all 0.5s ease-in-out;
                -moz-transition: all 0.5s ease-in-out;
                -ms-transition: all 0.5s ease-in-out;
                -o-transition: all 0.5s ease-in-out;
                transition: all 0.5s ease-in-out;
                -webkit-border-radius: 5px 5px 5px 5px;
                border-radius: 5px 5px 5px 5px;
            }

            input[type=text]:focus,input[type=password]:focus {
                background-color: #fff;
                border-bottom: 2px solid #5fbae9;
            }

            input[type=text]:placeholder,input[type=password]:focus {
                color: #cccccc;
            }



            /* ANIMATIONS */

            /* Simple CSS3 Fade-in-down Animation */
            .fadeInDown {
                -webkit-animation-name: fadeInDown;
                animation-name: fadeInDown;
                -webkit-animation-duration: 1s;
                animation-duration: 1s;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
            }

            @-webkit-keyframes fadeInDown {
                0% {
                    opacity: 0;
                    -webkit-transform: translate3d(0, -100%, 0);
                    transform: translate3d(0, -100%, 0);
                }
                100% {
                    opacity: 1;
                    -webkit-transform: none;
                    transform: none;
                }
            }

            @keyframes fadeInDown {
                0% {
                    opacity: 0;
                    -webkit-transform: translate3d(0, -100%, 0);
                    transform: translate3d(0, -100%, 0);
                }
                100% {
                    opacity: 1;
                    -webkit-transform: none;
                    transform: none;
                }
            }

            /* Simple CSS3 Fade-in Animation */
            @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
            @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
            @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

            .fadeIn {
                opacity:0;
                -webkit-animation:fadeIn ease-in 1;
                -moz-animation:fadeIn ease-in 1;
                animation:fadeIn ease-in 1;

                -webkit-animation-fill-mode:forwards;
                -moz-animation-fill-mode:forwards;
                animation-fill-mode:forwards;

                -webkit-animation-duration:1s;
                -moz-animation-duration:1s;
                animation-duration:1s;
            }

            .fadeIn.first {
                -webkit-animation-delay: 0.4s;
                -moz-animation-delay: 0.4s;
                animation-delay: 0.4s;
            }

            .fadeIn.second {
                -webkit-animation-delay: 0.6s;
                -moz-animation-delay: 0.6s;
                animation-delay: 0.6s;
            }

            .fadeIn.third {
                -webkit-animation-delay: 0.8s;
                -moz-animation-delay: 0.8s;
                animation-delay: 0.8s;
            }

            .fadeIn.fourth {
                -webkit-animation-delay: 1s;
                -moz-animation-delay: 1s;
                animation-delay: 1s;

            }

            /* Simple CSS3 Fade-in Animation */
            .underlineHover:after {
                display: block;
                left: 0;
                bottom: -10px;
                width: 0;
                height: 2px;
                background-color: #fff;
                content: "";
                transition: width 0.2s;
            }

            .underlineHover:hover {
                color: #fff;
            }

            .underlineHover:hover:after{
                width: 100%;
            }



            /* OTHERS */

            *:focus {
                outline: none;
            } 

            #icon {
                width:30%;
            }
            .warning{
                border-radius: 10px 10px 0px 0px;
                width: 29.333%;
                position: absolute;
                text-align: center;
                font-weight: 500;
                font-size: 18px;
                color: #56baed;
                display: block;
                background-color: #fff;
                margin-left: 35.333%;
                padding: 3px;
                margin-top: 4%;

            }


        </style>


    </head>
    <body style="background-image: url(images/449916.jpg);">
        <div class="wrapper fadeInDown"  >
            <div id="formContent"style="background-color: #333333" >
                <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="fadeIn first" >
                    <br>
                    <a href="index.php" style="width:100%;height:auto;margin:20px;"><img src="uploads/logo.png" id="icon" alt="User Icon" width="40px" /></a>
                </div>

                <!-- Login Form -->
                <form method="post" action="" id="myForm">
                    <input type="text" id="login" class="fadeIn second" name="email" placeholder="email or phone number.."   maxlength="50" required>
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="password.." maxlength="50" required>
                    <input type="submit" class="fadeIn fourth" id="closeForm" value="Log In" name="submit" onclick="closeForm()">
                </form>
                

                <!-- Remind Passowrd -->
                <div id="formFooter" style="background-color: #333333">
                    <span style="margin-right: 10px;color: white; " >or</span><a class="underlineHover" href="registration.php">Signup</a>
                </div>

            </div>
        </div>


    </body>
</html>