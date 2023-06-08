
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
$mail = new PHPMailer();
//Set mailer to use smtp
$mail->isSMTP();
//Define smtp host
$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
$mail->SMTPSecure = "tls";
//Port to connect smtp
$mail->Port = "587";
//Set gmail username
$mail->Username = "info@Environnementalu.org";
//Set gmail password
$mail->Password = "Environnementalu@2022";
//Email subject
$mail->Subject = "";
//Set sender email
$mail->setFrom('info@Environnementalu.org');
//Enable HTML
$mail->isHTML(true);
//Attachment
$mail->addAttachment('img/hb.jpg');
//Email body
$mail->Body = "<h1>This is HTML h1 Heading</h1></br><p>This is html paragraph</p>";
//Add recipient
$mail->addAddress('hubertkayumba8@gmail.com');
//Finally send email
if ( $mail->send() ) {
    echo "Email Sent..!";
}else{
    echo "Message could not be sent. Mailer Error ";
}
//Closing smtp connection
$mail->smtpClose();
