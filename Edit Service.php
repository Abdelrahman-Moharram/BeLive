<?php 

    session_start();
    require 'db_conn.php';
    if($_SESSION['role'] == 1)
    {
        header("Location: admin.php");
    }

        if (isset($_POST['Buynow']))
        {
            if (!isset($_SESSION['email']))
            {
                header('Location: login.php');
                echo $_SESSION['email'];
            }
            if ($_SESSION['bal'] >= $_POST['Buynow'])
            {
                
                if ($_POST['offertype'] == 'data')
                {
                    if ($_POST['offername'] != $_SESSION['internetService'])
                    {
                        $_SESSION['bal'] = $_SESSION['bal'] - $_POST['Buynow'];
                        $query = 'update user set balance="'.$_SESSION['bal'].'",internetService="'.$_POST['offername'].'"  where email="'.$_SESSION['email'].'"';
                        $result = mysqli_query($connect, $query);
                        $_SESSION['internetService'] = $_POST['offername'];
                    }
                    else
                    {
                        echo'<h1 class="notenough">already on this offer</h1>';
                    }
                }
                
                elseif($_POST['offertype'] == 'phone')
                {
                    if ($_POST['offername'] != $_SESSION['callService'])
                    {
                        $_SESSION['bal'] = $_SESSION['bal'] - $_POST['Buynow'];
                        $query = 'update user set balance="'.$_SESSION['bal'].'",callService="'.$_POST['offername'].'"  where email="'.$_SESSION['email'].'"';
                        $result = mysqli_query($connect, $query);
                        $_SESSION['callService'] = $_POST['offername'];
                    }
                    else
                    {
                        echo'<h1 class="notenough">already on this offer</h1>';
                    }
                }
            }
            else
            {
                echo'<h1 class="notenough">Not Money for '.$_POST['offername'].' please recharge</h1>';
            }
        }
        

?>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>BeLive</title>  
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
       body
        {
            background-color: #f2f2f2;
        }
        
        .notenough
        {
            text-align:center;
            font-size:50px;
            color:#000;
            font-family:arial;
            margin-top: 100px;
        }
    </style>

</head>
<body>
    
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color:#fff;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger active" href="index.php">
			<img class="img-fluid" width="90px" style="" src="uploads/logo.png" alt=""  />
		</a>
        <button class="navbar-toggler navbar-toggler-right active" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse active" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            
<!---->
			
			
              <?php
              if(isset($_SESSION['email']))
              {
                  echo'<li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="UserProfile.php">'.$_SESSION['firstname'].'</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="logout.php">Logout</a>
            </li>
            ';
                  
              }
              else
              {
                echo'<li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="login.php">login</a>
            </li>
            <span style="color:#28a9e2; text-size:5px;margin-top:8px;">or</span>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="registration.php">signup</a>
            </li>';
                  
              }
              ?>
              
          </ul>
        </div>
      </div>
    </nav>
    
    
    
    
    
        <p style="text-align:center;font-size:80px;font-family:arial;color:#28a9e2;margin-top:100px;">Services</p>
    <div style="margin-top:30px;margin-left:10%">
        <?php
        
        
        $que = 'select * from service';
            $result = mysqli_query($connect, $que);
        while($row = mysqli_fetch_assoc($result) )
        {
                        
        ?> <div class="col-md-4 col-sm-6" style="margin-right:3%;display:inline-block;width:28%;margin-top:50px;">
                    
                    <div class="pricingTable">
                        <svg x="0" y="0" viewBox="0 0 360 220">
                            <g>
                                <path fill="#28a9e2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                    c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                    s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                    L0.732,193.75z"></path>
                            </g>
                            <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489"><?php echo $row['capacity']-1; ?></text>
                            <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">&nbsp;.99</text>
                            <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                        </svg>
                        <div class="pricing-content">
                            <h3 class="title"><?php echo $row['name']; ?></h3>
                            <ul class="pricing-content">
                                <li><b><?php echo $row['description']; ?></b></li>
                            </ul>
                            
                            
                            <form method="post">
                                <input value="data" name="offertype" hidden>
                                <input value="<?php echo $row['name'] ;?>" name="offername" hidden>
                                <button type="submit" class="sim-btn hvr-bounce-to-top pricingTable-signup" value="<?php echo $row['capacity'] ;?>" name="Buynow">
                                BuyNow</button>
                                
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
        
        <?php
        }
        
        
        
        ?>
        
        
        
        
        
        
        
        
        
        
        
        
            </div>
    
    
    
    
    
    
    <div class="copyrights" style="margin-top:60px;">
        <div class="container">
            <div class="footer-distributed">
				<a href="#"><img src="uploads/logo.png" width="200px" alt="" /></a>
                <div class="footer-center">
                    <p class="footer-links">
                        <a href="#">Home</a>
                        <a href="#">About</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="#">BeLive</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->
    
    
    </body>
</html>