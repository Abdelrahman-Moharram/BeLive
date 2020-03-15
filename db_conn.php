<?php

/*   
    $connect = mysqli_connect("localhost","root","","sw2");
        if(mysqli_connect_errno())
        {
            die("error happend". mysqli_error());                
        }   */
$host="127.0.0.1";
$user="root";
$password="";
$database="sw2";
$connect=  mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_errno()){
    die("cannot connect to database field:". mysqli_connect_error());
    
}
?>



