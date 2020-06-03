<?php


    session_start();
     require 'db_conn.php';

 if($_SESSION['role'] == 0)
    {
        header("Location: index.php");
    }

?>


<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Page's Admin</title>
    <meta name="description" content="">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="shortcut icon" href="img/favicon.png"> -->

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>

    <!-- Syntax Highlighter -->
    <link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shCore.css" media="all">
    <link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shThemeDefault.css" media="all">

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Normalize/Reset CSS-->
    <link rel="stylesheet" href="css/normalize.min.css">
    <!-- Main CSS-->
    <link rel="stylesheet" href="css/main.css">

</head>

<body id="welcome">

    <aside class="left-sidebar">
        <div class="logo">
            <a href="#welcome">
                <img src="images/logo.ico" alt="">
            </a>
        </div>
        <nav class="left-nav">
            <ul id="nav">
                <li class="current"><a href="#welcome">Welcome</a></li>
                <li><a href="#installation">Edit Services</a></li>
                <li><a href="#tmpl-structure">View Info</a></li>
                <li><a href="#logout">Logout</a></li>
                
                

            </ul>
        </nav>
    </aside>

    <div id="main-wrapper">
        <div class="main-content">
            <section id="welcome">
                <div class="content-header">
                    <h1 style="background:blue;color: white; border-radius: 20px;height: 30px;padding: 30px;">Belive Admin</h1>
                </div>
                <div class="welcome">

                    <h2 class="twenty">Welcome To Belive</h2>
                    <p>Firstly,you Have the Controlling!</p>
                </div>

            </section>

            <section id="installation">
                <div class="content-header">
                    <h1 style="width:50%;background: #4a8cdb;color: black; border-radius: 20px;height: 20px;padding: 25px;margin: 5px;">Edit Services for Users</h1>
                </div>
                <h2 class="title">Edit Services.</h2>

                <div class="section-content">
                     <ul>
                        <li>Edit Services</li>
                        <li>Delete Services</li>
                        <li>Insert New Services</li>

                    </ul>
                    <ul>
                        <li><code><a href="service.php">Service</a></code></li>


                    </ul>
                   
                </div>
            </section>



            <section id="tmpl-structure">
                <div class="content-header">

                    <h1 style="width:50%;background:#4a8cdb ;color: black; border-radius: 20px;height: 20px;padding: 25px;margin: 0px;" class="title">View Informations Of Users</h1>


                </div>
                <h2 class="title">View Info.</h2>

                <div class="section-content">

                    <ul>
                        <li><code><a href="manage-users.php">View Info  </a></code></li>

                    </ul>
                </div>

            </section> 

            
            <section id="logout">
                <div class="content-header">
                    <h1 style="width:50%;background: #4a8cdb;color: black; border-radius: 20px;height: 20px;padding: 25px;margin: 5px;  text-decoration: blink;">At the Final</h1>
                </div>
                <h2 class="title">Logout if there's not any thing.</h2>

                <div class="section-content">
                     
                    <ul>
                        <li><code><a href="logout.php">Logout</a></code></li>


                    </ul>
                   
                </div>
            </section>
        </div>
    </div>

    <footer >
        <p >All Rights Reserved &copy; belive</p>
    </footer>

    <!-- Essential JavaScript Libraries
    ==============================================-->
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="syntax-highlighter/scripts/shCore.js"></script>
    <script type="text/javascript" src="syntax-highlighter/scripts/shBrushXml.js"></script>
    <script type="text/javascript" src="syntax-highlighter/scripts/shBrushCss.js"></script>
    <script type="text/javascript" src="syntax-highlighter/scripts/shBrushJScript.js"></script>
    <script type="text/javascript" src="syntax-highlighter/scripts/shBrushPhp.js"></script>
    <script type="text/javascript">
        SyntaxHighlighter.all()
    </script>
    <script type="text/javascript" src="js/custom.js"></script>

</body>
</html>