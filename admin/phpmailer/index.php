<?php
/*##########Script Information#########
  # Purpose: Send mail Using PHPMailer#
  #          & Gmail SMTP Server 	  #
  # Created: 24-11-2019 			  #
  #	Author : Hafiz Haider			  #
  # Version: 1.0					  #
  # Website: www.BroExperts.com 	  #
  #####################################*/

//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	
	if (isset($_POST['submit'])) {
		$sender=$_POST['nom'];
		$sender_mail=$_POST['sendermail'];
		$message=$_POST['Message'];




		
//Define name spaces

//Create instance of PHPMailer
$mail = new PHPMailer();
//Set mailer to use smtp
$mail->isSMTP();
//Define smtp host
$mail->Host = "mail.codhas.org";
//Enable smtp authentication
$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
$mail->SMTPSecure = "tls";
//Port to connect smtp
$mail->Port = "465";
//Set gmail username
$mail->Username = "info@codhas.org";
//Set gmail password
$mail->Password = "Codhas@2022";
//Email subject
$mail->Subject = "Demande de Renseignement" ;
//Set sender email
$mail->setFrom($sender_mail);
//Enable HTML
$mail->isHTML(true);
//Attachment
$mail->addAttachment('../img/favicon.png');
//Email body
$mail->Body = $message;
//Add recipient
$mail->addAddress('info@codhas.org');
//Finally send email
if ( $mail->send() ) {
    echo "Message Envoyer";
}else{
    echo "Message could not be sent. Mailer Error ";
}
//Closing smtp connection
$mail->smtpClose();

	}




	?>




	