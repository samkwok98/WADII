<?php
include("header.php");
?>

<body>
	<div style="margin-top: 100px; margin-bottom: 100px">
		<form class= "" action="send.php" style="padding-left: 100px" method="post">
			<label for="email" class="form-label">Email</label>
			<input type="email" name="email" class='form-control' style="width: 30%" value=""><br>
			<label for="subject" class="form-label">Subject</label>
			<input type="text" name="subject" class='form-control' style="width: 30%" value=""><br>
			<label for="subject" class="form-label">Message</label>
			<input type="text" name="message" class='form-control' style="width: 70%; height: 100px" value=""><br>

			<button type="submit" class="btn btn-primary" name="send">Send</button>
		</form>
	</div>
</body>

<?php
include("footer.php");
function sendmail($toaddress,$subject,$message)
{
	require 'PHPMailer-master/PHPMailerAutoload.php';
	
	$mail = new PHPMailer;

	
	//$mail->SMTPDebug = 3;                               // Enable verbose debug output
	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'gpy668@gmail.com';                 // SMTP username
	$mail->Password = 'oyuuljpwmwlqwxts';                           // SMTP password
	$mail->SMTPSecure = 'ssl';
    $mail->Port = 465;     // TCP port to connect to
	
	$mail->From = 'sendmail@dentaldiary.in';
	$mail->FromName = 'Web Mall';
	$mail->addAddress($toaddress, 'Joe User');     // Add a recipient
	$mail->addAddress($toaddress);               // Name is optional
	$mail->addReplyTo('gpy668@gmail.com', 'Information');
	$mail->addCC('cc@example.com');
	$mail->addBCC('bcc@example.com');
	
	$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = $subject;
	$mail->Body    = $message;
	$mail->AltBody = $subject;
	
	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo '<center><strong><font color=green>Mail sent.</font></strong></center>';
	}
}
?>