<!--home call back  mail-->
<?php
if($_SERVER['REQUEST_METHOD']=="POST" && $_REQUEST["submit"]=="Send")
{
		$message='<center>
<table cellpadding="0" cellspacing="0" width="50%" border="0" style="background-color:#ffeeac;">
		<tr height="40" style="background-color:#FFCC00; color:#000;">
		<td><h3 style="padding:6px 25px 6px; font-weight:bold;">User  Enquery  Details </h3></td>
		</tr>
				
		<tr height="30">
		<td style="padding:10px 30px 5px;"> <b>Subscribe :</b> '.$_REQUEST['subscribe'].'</td>
		</tr>
 
		
	 			
		</table></center>';

    require "mail/phpmailer/class.phpmailer.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp3.netcore.co.in";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
      
    // Authentication  
    $mail->Username   = "no-reply@webcadenceindia.com"; // Your full Gmail address
    $mail->Password   = "@#WertY2356#"; // Your Gmail password
      
    // Compose
	$mail->SetFrom(' no-reply@webcadenceindia.com', $_REQUEST['fullname']);
	//$mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);  // Reply here)  
    $mail->Subject = "Recieve New  Subscribe A4infra"; // Subject (which isn't required)  
    $mail->MsgHTML($message);
	/*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name  */
 
    // Send To  
   $mail->addAddress('info@a4rinfra.com');               // Name is optional
		if (!empty($recipientArr)) {                          //have mutiple recepients
			foreach ($recipientArr AS $eachAddress) {
				$mail->addAddress($eachAddress);
			}
		}   
   $mail->addCC('vad575970@gmail.com');
  /* $mail->addBCC('bcc@example.com');*/
    $result = $mail->Send();		// Send!  
	$message = $result ? 'Thank You For Subscribe now' : 'Sending Failed!';      
	unset($mail);

}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="5; url=index.php" />
<title>Thank You</title>
</head>

<body>

                   
<h1 style="text-align:center; padding-bottom:13px; color:#090909;"><?php if(!empty($message)) echo $message; ?>  </h1>
                 
				  
</body>
</html>