<?php
require 'connection.php';
require_once 'mailtest/mailer/class.phpmailer.php';
date_default_timezone_set('Asia/Kolkata');
$curr_date = date('Y-m-d').' 18:00:00';
$past_date = date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $curr_date) ) )).' 18:00:00';

$conn=database_info();

$sql = "SELECT * FROM employee WHERE emp_position != 'Admin'";
$stmt = $conn->prepare($sql); 
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_BOTH))
{
    
    $sql2 = "SELECT * FROM stats WHERE emp_id = '".$row["emp_id"]."' AND stat_date between '".$past_date."' AND '".$curr_date."'";
    $stmt2 = $conn->prepare($sql2); 
    $stmt2->execute();
    $count = $stmt2->rowCount();
    
    $sugar = 0;
    $pressure1 = 0;
    $pressure2 = 0;
    $oxygen = 0;
    $heart_rate = 0;
    $respiration = 0;
    
    while($row2 = $stmt2->fetch(PDO::FETCH_BOTH))
    {
        
        $sugar += $row2["sugar"];
        $pressure1 += $row2["pressure1"];
        $pressure2 += $row2["pressure2"];
        $oxygen += $row2["heart_rate"];
        $heart_rate += $row2["oxygen"];
        $respiration += $row2["respiration"];
        
    }
    
    $sugar = floor($sugar / $count);
    $pressure1 = floor($pressure1 / $count);
    $pressure2 = floor($pressure2 / $count);
    $oxygen = floor($oxygen / $count);
    $heart_rate = floor($heart_rate / $count);
    $respiration = floor($respiration / $count);
    
    $prediction = array();
    
    if($sugar > 140 && $sugar < 199){
        array_push($prediction,"Your Data shows signs of Pre-Diabetes.");
    }
    if($sugar > 200){
        array_push($prediction,"Your Data shows signs of Diabetes.");
    }
    if($pressure2 < 80){
        array_push($prediction,"Your Data shows signs of Low Pressure(Hypotension).");
    }
    if($pressure1 > 140){
        array_push($prediction,"Your Data shows signs of High Pressure(Hypertension).");
    }
    if($oxygen < 95){
        array_push($prediction,"Your Data shows signs of Hypoxemia.");
    }
    if($pressure1 > 140 && $pressure2 > 90 && $heart_rate > 100){
        array_push($prediction,"Your Data shows signs of Coronary Heart Disease.");
    }
    if($oxygen < 96 && $heart_rate > 99 && $respiration > 20){
        array_push($prediction,"Your Data shows signs of Asthma.");
    }
    if(count($prediction) == 0){
        array_push($prediction,"You are Perfectly Alright.");
    }
    
    $msg = 'Dear '.$row["emp_fname"].' '.$row["emp_lname"].',<br><br>';
    $msg = $msg.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This mail you received from Choose Wellness is regarding your health analysis from '.$past_date.' to '.$curr_date.'. As per data received, we have provided the average value for each constrain. The average values are as below,<br><br>';
    $msg = $msg.'Sugar Level : '.$sugar.' mg/dL<br>';
    $msg = $msg.'Pressure Level : '.$pressure1.'/'.$pressure2.' mm Hg<br>';
    $msg = $msg.'Oxygen Level : '.$oxygen.' %<br>';
    $msg = $msg.'Heart Rate : '.$heart_rate.' /min<br>';
    $msg = $msg.'Respiration Rate : '.$respiration.' /min<br><br>';
    $msg = $msg.'Predictions :<br><br>';
    
    for($i=0;$i<count($prediction);$i++){
        $msg = $msg.$prediction[$i].'<br>';
    }
    
    $msg = $msg.'<br>';
    $msg = $msg.'Thank You!<br> Regards,<br> Team Choose Wellness.';
    
    $subject='Daily Health Report From Choose Wellness';
    /* creates object */
    $mail = new PHPMailer(true);
    $mailid = $row["emp_email"];
    $text_message = "Thank you for the support!";
    $message = $msg;
    
    try
    {
        //$mail->IsSMTP();
        $mail->isHTML(true);
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "smtp.zoho.com";
        $mail->Port = '465';
        $mail->AddAddress($mailid);
        $mail->Username ="nethrarajagopal11@gmail.com";
        $mail->Password ="abcd1234@";
        $mail->SetFrom("choosewellness@gmail.com",'Choose Wellness');
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->AltBody = $message;
        
        if($mail->Send())
        {
            //echo 'Mail sent to '.$row["emp_id"].' -- '.$row["emp_email"].'<br>';
        }
        else
        {
            //echo 'Mail not sent to '.$row["emp_id"].' -- '.$row["emp_email"].'<br>';
        }
    }
    catch(phpmailerException $ex)
    {
        $msg = "
        ".$ex->errorMessage()."
        ";
    }
    
}
	
database_close($conn);

?>