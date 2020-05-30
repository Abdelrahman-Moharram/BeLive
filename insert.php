<?php
            session_start();
            require 'db_conn.php';
           
            $name = $_POST['name'];
            $type = $_POST['type'];
            $capacity = $_POST['capacity'];
            $description = $_POST['description'];
             
            // Attempt insert query execution
            $que= "SELECT count(*)  from service ";
            $result = mysqli_query($connect, $que);
            $quantity = mysqli_fetch_assoc($result);
            
            if($quantity < 6){
	            $sql = "INSERT INTO service (name, type, capacity , description) VALUES ( '$name', '$type', '$capacity', '$description')";
	            if(mysqli_query($connect, $sql)){
	                header("refresh:2 ; url =service.php");
	                //echo "dooooooooone";
	                mysqli_close($connect); // Close connection
	                
	                exit;
	            } else{
	                header("refresh:2 ; url =service.php");
	                echo mysqli_error();
	                
	            }
        }else{
        	header("refresh:2 ; url =service.php");
	                
	               
        }
    
    ?>