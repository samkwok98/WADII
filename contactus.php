<?php
include("header.php");
?>

<div class='mb-3'>
	<label for='exampleFormControlTextarea1' class='form-label'>Example textarea</label>
	<textarea class='form-control' id='exampleFormControlTextarea1' rows='3'></textarea>
</div>


<form class= "" action="send.php" method="post">
	Email <input type="email" name="email" value=""><br>
	Subject <input type="text" name="subject" value=""><br>
	Message <input type="text" name="message" value=""><br>
	<button type="submit" name="send">Send</button>
</form>
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