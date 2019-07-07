<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['btn_Submit']))
{



// Load Composer's autoloader
require 'vendor/autoload.php';

require 'PHPMailerAutoload.php';
// require 'index.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'harshaljain19@gmail.com';                 // SMTP username
$mail->Password = 'xyzzyspoon(ABCD)';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('harshaljain19@gmail.com', 'Mailer');
$mail->addAddress($_POST['txt_Email'],'Harshal');     // Add a recipient
               // Name is optional
$mail->addReplyTo('harshaljain19@gmail.com');


//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $_POST['txt_Subject'];
$mail->Body    = $_POST['txt_Message'];
// $mail->AltBody = $_POST['txt_Message'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="">
<table width="50%" border="1">
  <tr>
    <td>To Email:</td>
    <td><input type="text" name="txt_Email" /></td>
  </tr>
  <tr>
    <td>Subject</td>
    <td><input type="text" name="txt_Subject" /></td>
  </tr>
  <tr>
    <td>Message</td>
    <td><input type="text" name="txt_Message" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="btn_Submit" value="SEND"/></td>
  </tr>
</table>
</form>
</body>
</html>
