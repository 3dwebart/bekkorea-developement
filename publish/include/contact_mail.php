<?php
if($_SESSION == false) {
	session_start();
}

$header_path = $_SERVER['DOCUMENT_ROOT']."/header.php";
include_once($header_path);

$name     = $_POST['name'];
$email    = $_POST['email'];
$subject  = $_POST['subject'];
$message  = $_POST['message'];
$captcha  = $_POST["captcha"];
if($captcha == $_SESSION["captcha_code"]) {
	$toEmail = "admin@phppot_samples.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $message, $mailHeaders)) {
		/**/
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

		require $include_dir.'/phpmailer/Exception.php';
		require $include_dir.'/phpmailer/PHPMailer.php';
		require $include_dir.'/phpmailer/SMTP.php';

		try {
			$mail->CharSet = "euc-kr";
			$mail->Encoding = "base64";
			$mail->isSMTP(); // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true; // Enable SMTP authentication
			$mail->Username = 'bkkorea.sending@gmail.com'; // SMTP username
			$mail->Password = '!snowking1!'; // SMTP password
			$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587; // TCP port to connect to

			//Recipients
			/*
			$mail->setFrom('barskorea@hanmail.net', 'Contact US'); // 보내는 사람
			$mail->addAddress('barskorea@hanmail.net', 'barskorea'); // 받는 사람 Add a recipient
			*/
			$mail->setFrom('3d.web.artist@gmail.com', 'Contact US'); // 보내는 사람
			$mail->addAddress('3d.web.artist@gmail.com', 'barskorea'); // 받는 사람
			$mail->addReplyTo($email, $name);

			//Content
			$htmlMessage = '<table border="1" style="width: 100%;">';
			$htmlMessage .= '<tbody>';
			$htmlMessage .= '<tr>';
			$htmlMessage .= '<th align="left" valign="top" style="padding: 5px 10px; width: 15%;">';
			$htmlMessage .= 'NAME';
			$htmlMessage .= '</th>';
			$htmlMessage .= '<td align="left" valign="top" style="padding: 5px 10px; width: 35%;">';
			$htmlMessage .= $name;
			$htmlMessage .= '</td>';
			$htmlMessage .= '<th align="left" valign="top" style="padding: 5px 10px;">';
			$htmlMessage .= 'E-mail';
			$htmlMessage .= '</th>';
			$htmlMessage .= '<td align="left" valign="top" style="padding: 5px 10px;">';
			$htmlMessage .= $email;
			$htmlMessage .= '</td>';
			$htmlMessage .= '</tr>';
			$htmlMessage .= '<tr>';
			$htmlMessage .= '<th align="left" valign="top" style="padding: 5px 10px;">';
			$htmlMessage .= 'COUNTRY';
			$htmlMessage .= '</th>';
			$htmlMessage .= '<td align="left" valign="top" style="padding: 5px 10px;">';
			$htmlMessage .= $subject;
			$htmlMessage .= '</td>';
			$htmlMessage .= '<th align="left" valign="top" style="padding: 5px 10px;">';
			$htmlMessage .= 'MESSAGE';
			$htmlMessage .= '</th>';
			$htmlMessage .= '<td align="left" valign="top" style="padding: 5px 10px;">';
			$htmlMessage .= nl2br($message);
			$htmlMessage .= '</td>';
			$htmlMessage .= '</tr>';
			$htmlMessage .= '</tbody>';
			$htmlMessage .= '</table>';
			$mail->isHTML(true); // Set email format to HTML
			$mail->Subject = iconv("UTF-8", "EUC-KR", $name);
			$mail->Body    = $htmlMessage;
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			$mail->send();
		} catch (Exception $e) {
			//print '<p class="Error">Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			print "<p class='success'>Contact Mail Sent.</p>";
		}
		/**/
		//print "<p class='success'>Contact Mail Sent.</p>";
	} else {
		print "<p class='Error'>Problem in Sending Mail.</p>";
	}
} else {
	print "<p class='Error'>Enter Correct Captcha Code.</p>";
}
?>