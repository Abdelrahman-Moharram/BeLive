<?php
session_start();
require 'db_conn.php';
if(mysqli_connect_errno()){
    die("cannot connect to database field:". mysqli_connect_error());
    
}

//   `id`, `firstname`, `lastname`, `image`, `role`, `email`, `phonenumber`, `balance`, `password`, `internetService`, `callService`
else if(isset($_POST['update']))
{
  if(!preg_match("/^([a-zA-Z' ]+)$/",$_POST['firstname']))
        {
           echo'<div class="firstname">The First name is invalid</div>';
        }
        else if(!preg_match("/^([a-zA-Z' ]+)$/",$_POST['lastname']))
        {
           echo'<div class="lastname">The last name is invalid</div>';
        }
        else if(!preg_match("/^([a-zA-Z]+[0-9]+@gmail.com+)$/",$_POST['email']))
        {
           echo'<div class="email">The email  is invalid</div>';
        }

        
else{
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$altemail=$_POST['email'];
$phone=$_POST['phonenumber'];
//$imgs=$_POST['image'];
$userid=$_GET['id'];
  $ret=mysqli_query($connect,"update user set firstname='$fname',lastname='$lname', email='$altemail',phonenumber='$phone' where id='$userid'");
  if($ret)
  {
  echo "<script>alert('Data Updated');</script>"; 
        $_SESSION['email'] =$altemail ;
        $_SESSION['firstname'] = $fname;
        $_SESSION['lastname'] = $lname;
        $_SESSION['phonenumber'] = $phone;

    

  }
}
  }
?>

<!DOCTYPE html>
<html>
<head>
  <style >
    .firstname{
            border-radius: 10px 10px 0px 0px;
            width:400px;
            position: absolute;
            text-align: center;
            font-weight: 500;
            
            color: red;
            display: block;
            margin-left: 40%;
            padding: 3px;
            margin-top:70px;
                
            }
            .lastname{
                border-radius: 10px 10px 0px 0px;
                width:400px;
                position: absolute;
                text-align: center;
                font-weight: 500;
                color: red;
                display: block;
                margin-left: 40.5%;
                padding: 3px;
                margin-top:110px;
                
            }
            .email{
                border-radius: 10px 10px 0px 0px;
                width:400px;
                position: absolute;
                text-align: center;
                font-weight: 500;
                color: red;
                display: block;
                margin-left: 45.5%;
                padding: 3px;
                margin-top:160px;
                
            }
  </style>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Belive | edit </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
</head>
<body class=""  style="margin-top: 0px; padding: 100px; background-color: #e5e9ec; position: relative; min-height: 100%; min-width: 100%;>

<div class="page-container row-fluid">  
  
  <div class="clearfix"></div> 
  
  </div>
  <a href="#" class="scrollup">Scroll</a>
   <div class="footer-widget">    
  <div class="progress transparent progress-small no-radius no-margin">
    <div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar" ></div>   
  </div>
  <div class="pull-right">
  </div>
  </div>
  <!--<div class="page-content" > -->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">  
    <div class="page-title">
         <?php $rt=mysqli_query($connect,"select * from user where id='".$_GET['id']."'");
        while($rw=mysqli_fetch_array($rt))
        {?> 
      <h3><?php echo $rw['firstname'];?>'s Profile</h3> 
             
                        <form name="muser" method="post" action="" enctype="multipart/form-data">
                        
                            <table width="100%" border="0">
  <tr>
      <td height="42"style="padding-left: 15px;"><h3>First Name</h3></td>
    <td><input type="text" name="firstname" id="firstname" value="<?php echo $rw['firstname'];?>" class="form-control"></td>
  </tr>
  
  <tr>
      <td height="42"style="padding-left: 15px;"><h3>Last Name</h3></td>
    <td><input type="text" name="lastname" id="lastname" value="<?php echo $rw['lastname'];?>" class="form-control"></td>
  </tr>
  <tr>
      <td height="42"style="padding-left: 15px;"><h3>Primary Email</h3></td>
    <td><input type="text" name="email" id="email" value="<?php echo $rw['email'];?>" class="form-control"></td>
  </tr>
 <!-- <tr>
      <td height="42"style="padding-left: 15px;"><h3>Alt Email</h3></td>
    <td><input type="text" name="altemail" id="altemail" value="<?php echo $rw['email'];?>" class="form-control"></td>
  </tr>-->
  <tr>
      <td height="42"style="padding-left: 15px;"><h3>Phone-Number</h3></td>
    <td><input type="text" name="phonenumber" id="phonenumber" value="<?php echo $rw['phonenumber'];?>" class="form-control" readonly></td>
  </tr>
  
 
  <!--<tr>
    <td height="42">User Image</td>
 if($rw['image']==""){?>
<td><img src="../images/noimages.png" width="120" height="100"  style="border:solid 1px #000000;" title="No Image available" /></td>
 } else { ?>
    <td><img src="../userimages/php echo $rw['user_image'];?>" width="120" height="80"  style="border:solid 1px #000000;" /></td>
   } ?>
  </tr>-->

  
    <td>&nbsp;</td>
    <td height="42">
        <button type="submit" name="update" class="btn btn-primary">Save changes</button>
        <a class="btn btn-primary" href="UserProfile.php">Back your Profile</a>
        
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
    
  </tr>
</table>
<?php } ?>
</form>
</div>
  </div>
  </div>

<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/js/core.js" type="text/javascript"></script> 
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script> 
 
 

</body>
</html>