<?php
require('phpmailer/class.phpmailer.php');
$mail = new PHPMailer();
$subject = "Test Mail using PHP mailer";
$content = "<b>This is a test mail using PHP mailer class.</b>";
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = "abdo moharam";
$mail->Password = "Abdelra7man";
$mail->Host     = "smtp.gmail.com";
$mail->Mailer   = "smtp";
$mail->SetFrom("abdomo7aram@gmail.com", "abdo moaram");
$mail->AddReplyTo("abdomo7aram@gmail.com", "abdo moaram");
$mail->AddAddress("recipient address");
$mail->Subject = $subject;
$mail->WordWrap   = 80;
$mail->MsgHTML($content);
$mail->IsHTML(true);

if(!$mail->Send()) 
	echo "Problem on sending mail";
else 
echo "Mail sent";
?>



<html>
<head>
    <title>forget password</title>
    <link rel="shortcut icon" href="uploads/logo.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="uploads/logo.ico">
	
<style>
	body {
            margin: 0;
            padding: 0;
            background-image: url(uploads/com.jpg);
             background-repeat: no-repeat;
              background-attachment: fixed;
  background-size: cover;
            background-position: center;
            font-family: sans-serif;
            height: 100%;
        }



        .forget {
            width: 400px;
            height: 250px;
            background: grey;
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
.forget label {
width: 100%;
	 border: none;
 
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}
.image {
	width: 100px;
	height: 100px;
    border-radius: 50%;
    top:-50px;
    left: calc(50%-50%);
*
}
.forget{
	opacity: 1;
}
.forget input{
	width: 80%;
	margin-bottom: 30px;
	padding: 5px;
}
.forget input[type="text"]
{
	 border: 1px solid powderblue;
  padding: 10px;
	border-bottom: 1px solid #fff;
	background-color: white;
	outline: none;
	height: 30px;
	color: #fff;
	font-size: 16px;

}u
.forget input{
	border: none;
	outline: none;
	height: 10px;
	background: #a4d9ef;
	color: #fff;
	font-size: 10px;
	border-radius: 10px;

}
.forget input[type="submit"]{
	cursor: pointer;
	background: #599bb5;
	color: #000;

}


	</style>
</head>
<body>
	<div class="forget">
		<img src="uploads/images.png" class="image">
	<form>
		<label for="e-mail" >please enter your email:</label>
		<br>
		<input type="text" name="email">
		<br>
		
		<input type="submit" value="Submit">

	</form>
</div>

</body>
</html>



