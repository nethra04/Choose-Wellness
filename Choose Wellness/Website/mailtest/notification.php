<?php
include_once 'database.php';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$city_name = $_POST['city_name'];
$email = $_POST['email'];

/* sql query for inserting data into database */

require_once 'mailer/class.phpmailer.php';
/* creates object */
$mail = new PHPMailer(true);
$mailid = $email;
$subject = "Thank u";
$text_message = "Hello";
$message = "Thank You for Contact with us.";

try
{
$mail->IsSMTP();
$mail->isHTML(true);
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = '465';
$mail->AddAddress($mailid);
$mail->Username ="praveenkumarb.programmer@mkce.ac.in";
$mail->Password ="elixir@3";
$mail->SetFrom('praveenkumarb.programmer@mkce.ac.in','Praveen K');
$mail->AddReplyTo("praveenkumarb.programmer@mkce.ac.in","Praveen K");
$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = $message;
if($mail->Send())
{
echo "Thank you for register u got a notification through the mail you provide";
}
}
catch(phpmailerException $ex)
{
$msg = "
".$ex->errorMessage()."
";
}
require_once 'mailer/class.phpmailer.php';
/* creates object */
$mail = new PHPMailer(true);
$mailid = "praveenkumarb.programmer@mkce.ac.in";
$subject = "Thank u";
$text_message = "Hello";
$message = "New User Registered. Mail id :".$mailid."";

try
{
$mail->IsSMTP();
$mail->isHTML(true);
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = '465';
$mail->AddAddress($mailid);
$mail->Username ="praveenkumarb.programmer@mkce.ac.in";
$mail->Password ="elixir@3";
$mail->SetFrom('praveenkumarb.programmer@mkce.ac.in','Praveen K');
$mail->AddReplyTo("praveenkumarb.programmer@mkce.ac.in","Praveen K");
$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = $message;
if($mail->Send())
{
echo "You have a new user";
}
}
catch(phpmailerException $ex)
{
$msg = "
".$ex->errorMessage()."
";
}
?>