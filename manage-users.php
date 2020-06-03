<?php 
session_start();
//include("dbconnection.php");
//include("checklogin.php");
//check_login();

require 'db_conn.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Admin | Manage Users</title>
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
<body class="">

    <div class="page-container row" style="margin-top: 0px;
  padding: 20px;
  background-color: #e5e9ec;
  position: relative;
  min-height: 100%;
  min-width: 100%;
 ">
  
     
    
      <div class="clearfix"></div>
      <!-- END SIDEBAR MENU -->
    
  <!-- <div class="page-content">
        <!-- BEGIN SAMPLE P ORTLET CONFIGURATION MODAL FORM-->
           
        <div class="content"style="">
                <ul class="breadcrumb">
                    <li>
                        <p>YOU ARE HERE</p>
                    </li> 
                    <li>Manage Users </li>
                </ul>
                <div class="page-title">	
                    <a href="Admin.php"><i class="icon-custom-left"></i></a>
                    <h3>Back at home </h3>	
                </div>
             
            <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="grid simple ">
                                    <div class="grid-title no-border"style="border-radius: 25px;">
                                        	<h4>All Users Details</h4>
                                        <div class="tools">	<a href="javascript:;" class="collapse"></a>
											<a href="#grid-config" data-toggle="modal" class="config"></a>
											<a href="javascript:;" class="reload"></a>
											<a href="javascript:;" class="remove"></a>
                                        </div>
                                    </div>
                                    <div class="grid-body no-border"style="border-radius: 25px;">
                              
                                            <table class="table table-hover no-more-tables">
                                                <thead>
                                                    
                                                     
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Full Name</th>
                                                        <th>Image </th>
                                                        <th>Role </th>
                                                        <th>Email ID </th>
                                                        <th>PhoneNumber</th>
                                                        <th>balance</th>
                                                        <th>Password </th>
                                                        <th>InternetService</th>
                                                        <th>callService </th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $ret=mysqli_query($connect,"select * from user");
												$cnt=1;
												while($row=mysqli_fetch_array($ret))
												{
													$_SESSION['ids']=$row['id'];
												?>
                                                    <tr>
                                                        
                                                        <td><?php echo $cnt;?></td>
                                                        <td><?php echo $row['firstname']." ".$row['lastname'];?></td>
                                                        <td><?php echo $row['image'];?></td>
                                                        <td><?php echo $row['role'];?></td>
                                                        <td><?php echo $row['email'];?></td>
                                                        <td><?php echo $row['phonenumber'];?></td>   
                                                        <td><?php echo $row['balance'];?></td>
                                                        <td><?php echo $row['password'];?></td>
                                                        <td><?php echo $row['internetService'];?></td>
                                                        <td><?php echo $row['callService'];?></td>
                                                          <td>
                                                          <form name="abc" action="" method="post">
                                                           
                                                           <button type="button" class="btn btn-danger btn-xs btn-mini"><?php echo "<a href='delete-user.php?id=".$row['id']."'>Delete</a>"; ?> </button>
                                                           
                                                           
                                                   

                                                           </form>
                                                          </td>
                                                    </tr>
                                                    <?php $cnt=$cnt+1; } ?>
                                               
                                                </tbody>
                                            </table>
                                       </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
		</div>
                </div>
   </div>
</div>
               <!-- END PAGE -->
 
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK--> 
<script src="plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="breakpoints.js" type="text/javascript"></script> 
<script src="plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<!-- END CORE JS FRAMEWORK --> 
<!-- BEGIN PAGE LEVEL JS --> 	
<script src="plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="plugins/jquery-sparkline/jquery-sparkline.js"></script>
<script src="plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS --> 	
<script>
	//Too Small for new file - Helps the to tick all options in the table 
	$('table .checkbox input').click( function() {			
		if($(this).is(':checked')){			
			$(this).parent().parent().parent().toggleClass('row_selected');					
		}
		else{	
		$(this).parent().parent().parent().toggleClass('row_selected');		
		}
	});
	// Demo charts - not required 
	$('.customer-sparkline').each(function () {	
		$(this).sparkline('html', { type:$(this).attr("data-sparkline-type"), barColor:$(this).attr("data-sparkline-color") , enableTagOptions: true  });	
	});
</script>
<!-- BEGIN CORE TEMPLATE JS --> 
<script src="js/core.js" type="text/javascript"></script> 
<script src="js/chat.js" type="text/javascript"></script> 
<script src="js/demo.js" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS --> 
</body>

</html>