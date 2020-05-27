<?php
   
    session_start();

    require'db_conn.php';
   
    
   // the connecthion 

 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>BeLive</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="uploads/logo.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="uploads/logo.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        
        .the-big-one
            {
                background: #333333;
                margin-left: 33.33%;
                margin-top: 7%;
                width: 25.33%;
                border-radius:10px;

                
                
            }
            .form-control
            {
                
                margin-left: 60px;
                width: 300px;
            }
            
            #register
            {
              margin-left: 160px;  
              margin-top:-25px;
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
            .Registration
            {
               margin-left: 140px; 
               color: white;
                
            }
            .pragraph
            {
                margin-left: 100px;
                color: white;

            }
            .text
            {
              margin-left: 10px;  
              color: white;
                
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
                width:100px;
                position: absolute;
                text-align: center;
                font-weight: 500;
                color: red;
                display: block;
                margin-left: %;
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
                
        .servicetitel {

        font-family: all;
        font-size:50px;
        font-weight: bold;color:black;margin-left:100px;
        position: relative;
        z-index: 1;


        }
        .servicediscripion
        {

            font-family: all; 
            font-size:30px;
            font-weight: bold;
            color: black;
            margin-left:0px;
             position: relative;
                z-index: 1;


        }
        .surprize
        {

            font-size:30px;
            color: red;


        }
    
        
    </style>
    }

</head>
<body id="page-top" class="politics_version">
                    
    <div id="services" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3 style="font-family: cursive;font-size: 70px ;">Choese your Services</h3>

            </div><!-- end title -->
            
            <div class="row">
				<div class="col-md-4">
                    <div class="services-inner-box">
         <!------------------------  aid 1 service titel ------------->
                                <div class="servicetitel">
                        <?php 
                           
                            $get_news_sql = "SELECT name FROM `service` where id =1";
            $get_news_sql = mysqli_query($connect, $get_news_sql);
            if($row = mysqli_fetch_array($get_news_sql)) {
                        echo $row['name'];
                    }
        else
        {

            echo'<div class="surprize">this service is updating now </div>';

        }
            


            
                            ?>
                </div>
		<!----------------------------------------------------------->		
         <!------------------------  aid 1 service discripion ------------->

                <div class="servicediscripion">
                        <?php 
                           
                    $get_news_sql = "SELECT description  FROM `service` where id =1";
            $get_news_sq2 = mysqli_query($connect, $get_news_sql);
            if ($row = mysqli_fetch_array($get_news_sq2)) {
                        echo $row['description'];
                    }
                            ?>
                </div>
         <!------------------------ --------------------------- ------------->
					</div><!------ service inner box 1 --------->
                </div><!-- end col-m4 -->
<!-------------------------------------------------------------------------------->

                <div class="col-md-4">
                    <div class="services-inner-box">
		<!------------------------  aid 2 service titel ------------->

        <div class="servicetitel">
                        <?php 
                           
                            $get_news_sql = "SELECT name FROM `service` where id =2";
            $get_news_sql = mysqli_query($connect, $get_news_sql);
            if($row = mysqli_fetch_array($get_news_sql)) {
                        echo $row['name'];
                    }

                    else
        {

            echo'<div class="surprize">this service is updating now </div>';

        }
                            ?>
                </div>



         <!------------------------ ---------------------------------->
        <!------------------------  aid 2 service discripion ------------->
<div class="servicediscripion">
                        <?php 
                           
                            $get_news_sql = "SELECT description  FROM `service` where id =2";
            $get_news_sq2 = mysqli_query($connect, $get_news_sql);
            if ($row = mysqli_fetch_array($get_news_sq2)) {
                        echo $row['description'];
                    }
                            ?>
                </div>
        <!------------------------ ---------------------------------------->

					</div><!------ service inner box 2 --------->
                </div><!-- end col -->
<!-------------------------------------------------------------------------------->

				<div class="col-md-4">
                    <div class="services-inner-box">
						
        <!------------------------  aid 3 service titel ------------->
                                <div class="servicetitel">
                        <?php 
                           
                            $get_news_sql = "SELECT name FROM `service` where id =3";
            $get_news_sql = mysqli_query($connect, $get_news_sql);
            if ($row = mysqli_fetch_array($get_news_sql)) {
                        echo $row['name'];
                    }
            else
                      {

            echo'<div class="surprize">this service is updating now </div>';

                     }
                            ?>
                </div>
        <!----------------------------------------------------------->      
         <!------------------------  aid 3 service discripion ------------->

                <div class="servicediscripion">
                        <?php 
                           
                            $get_news_sql = "SELECT description  FROM `service` where id =3";
            $get_news_sq2 = mysqli_query($connect, $get_news_sql);
            if ($row = mysqli_fetch_array($get_news_sq2)) {
                        echo $row['description'];
                    } 
                            ?>
                </div>



					</div><!------ service inner box 2 --------->
                </div><!-- end col -->
<!--------------------------------------------------------------------------------->
				<div class="col-md-4">
                    <div class="services-inner-box">
						
						
         <!------------------------  aid 4 service titel ------------->
                                <div class="servicetitel">
                        <?php 
                           
                            $get_news_sql = "SELECT name FROM `service` where id =4";
            $get_news_sql = mysqli_query($connect, $get_news_sql);
            if($row = mysqli_fetch_array($get_news_sql)) {
                        echo $row['name'];
                    }

            else
        {

            echo'<div class="surprize">this service is updating now </div>';

        }


                            ?>
                </div>
        <!----------------------------------------------------------->      
         <!------------------------  aid 4 service discripion ------------->

                <div class="servicediscripion">
                        <?php 
                           
                            $get_news_sql = "SELECT description  FROM `service` where id =4";
            $get_news_sq2 = mysqli_query($connect, $get_news_sql);
            if($row = mysqli_fetch_array($get_news_sq2)) {
                        echo $row['description'];
                    }
                            ?>
                </div>  



                
					</div><!------ service inner box 4 --------->
                </div><!-- end col -->
<!---------------------------------------------------------------------------->
				<div class="col-md-4">
                    <div class="services-inner-box">
						
				<!------------------------  aid 5 service titel ------------->
                                <div class="servicetitel">
                        <?php 
                           
                            $get_news_sql = "SELECT name FROM `service` where id =5";
            $get_news_sql = mysqli_query($connect, $get_news_sql);
            if($row = mysqli_fetch_array($get_news_sql)) {
                        echo $row['name'];
                    }

        else
               {

            echo'<div class="surprize">this service is updating now </div>';

               }


                            ?>
                </div>
        <!----------------------------------------------------------->      
         <!------------------------  aid 5 service discripion ------------->

                <div class="servicediscripion">
                        <?php 
                           
                            $get_news_sql = "SELECT description  FROM `service` where id =5";
            $get_news_sq2 = mysqli_query($connect, $get_news_sql);
            if($row = mysqli_fetch_array($get_news_sq2)) {
                        echo $row['description'];
                    }

                            ?>
                </div>  
                        


					</div><!------ service inner box 4 --------->
                </div><!-- end col -->

<!---------------------------------------------------------------------------->

                <div class="col-md-4">
                    <div class="services-inner-box">
                        
                                      
                        <!------------------------  aid 6 service titel ------------->
                                <div class="servicetitel">
                        <?php 
                           
                            $get_news_sql = "SELECT name FROM `service` where id =6";
            $get_news_sql = mysqli_query($connect, $get_news_sql);
            if($row = mysqli_fetch_array($get_news_sql)) {
                        echo $row['name'];
                    }


            else
        {

            echo'<div class="surprize">this service is updating now </div>';

        }

                            ?>
                </div>
        <!----------------------------------------------------------->      
         <!------------------------  aid 6 service discripion ------------->

                <div class="servicediscripion">
                        <?php 
                           
                            $get_news_sql = "SELECT description  FROM `service` where id =6";
            $get_news_sq2 = mysqli_query($connect, $get_news_sql);
            if($row = mysqli_fetch_array($get_news_sq2)) {
                        echo $row['description'];
                    }
                            ?>
                </div>  


      
                    </div><!------ service inner box 4 --------->
                </div><!-- end col -->
<!---------------------------------------------------------------------------->

            </div>
        </div>





        <div class="the-big-one">
        <form  method="post">
    <hr class="mb-3">

    <input class="form-control" id="password" name="service_id" placeholder="enter your service number">
    <hr class="mb-3">
        <input class="btn btn-primary" type="submit" id="register" name="create" value="submit" style="margin-left: 200px: ">
    </form>
</div>


    </div>
	
    

    
   
</body>
</html>



