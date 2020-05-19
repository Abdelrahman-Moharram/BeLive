 <?php 
        include "db_conn.php"; // Using database connection file here
        session_start();
        

        


      if(isset($_GET['id'])) // when click on Update button
        {
        $id = $_GET['id']; // get id through query string
        $qry = mysqli_query($connect,"select * from service"); // select query 
        $row = mysqli_fetch_array($qry); // fetch data
        }

        if(isset($_POST['name'] )){
        $name = $_POST['name'];
        $type = $_POST['type'];
        $capacity = $_POST['capacity'];
        $description = $_POST['description'];
      
        $edit = mysqli_query($connect,"update service set name='$name', type='$type',  capacity='$capacity' ,  description='$description' where id='$id'");
        $qry = mysql_query($edit) or die("couldn't edit". mysqli_error());
      }
            header("refresh:2 ; url =service.php");
            mysqli_close($connect); // Close connection  
            exit;
       
    ?>

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

    .container{
      lign-content: center;
                width: 700px;
                height: 400px;
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

            .service {
              align-content: center;
                width: 800px;
                height: 650px;
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
       

      </style>
</head>
<body style="background-image: url(images/449916.jpg);">
  <div class="container">

 <h3>Update Data for Product <?php echo $row['id']; ?> </h3>

<form method="POST" action="edit.php">
  <input class="input" type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter Name" Required>
  <input class="input" type="text" name="type" value="<?php echo $row['type']; ?>" placeholder="Enter type" Required>
  <input class="input" type="text" name="capacity" value="<?php echo $row['capacity']; ?>" placeholder="Enter capacity" Required>
  <input class="input" type="text" name="description" value="<?php echo $row['description'] ; ?>" placeholder="Enter description" Required>
   <br>
  <br>
  <input type="submit" name="update" value="Update">
 
 
</form>

</div>

</body>
</html>