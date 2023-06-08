<?php
if (isset($_POST['submit'])) {

    $to = "info@Environnementalu.org";
    $from = $_POST['sender_mail'];
    $name = $_POST['nom'];
    $subject = "Demande d'Informations";
    $cmessage = $_POST['mail'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $logo = 'img/favicon.png';
    $link = 'https://Environnementalu.org';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Environnementalu Infoline</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

   
}
if($send = mail($to, $subject, $body, $headers)){
	header('Location:../conta.php');
}
else{

};

?>