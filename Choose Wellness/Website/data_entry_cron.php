<?php
require 'connection.php';
date_default_timezone_set('Asia/Kolkata');
$curr_date = date('Y-m-d H:i:s');

$conn=database_info();

$sql = "SELECT * FROM `employee` WHERE emp_position != 'Admin' ";
$stmt = $conn->prepare($sql); 
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_BOTH))
{
    $sugar = rand(80,220);
    $pressure1 = rand(110,150);
    $pressure2 = rand(75,95);
    $heart_rate = rand(40,120);
    $oxygen = rand(94,98);
    $respiration = rand(12,30);
    
    $sql2="insert into stats(emp_id,sugar,pressure1,pressure2,heart_rate,oxygen,respiration,stat_date) values(:emp_id,:sugar,:pressure1,:pressure2,:heart_rate,:oxygen,:respiration,:stat_date)";
	$stmt2 = $conn->prepare($sql2); 
	$stmt2->bindParam(':emp_id', $row["emp_id"]);
	$stmt2->bindParam(':sugar', $sugar);
	$stmt2->bindParam(':pressure1', $pressure1);
	$stmt2->bindParam(':pressure2', $pressure2);
	$stmt2->bindParam(':heart_rate', $heart_rate);
	$stmt2->bindParam(':oxygen', $oxygen);
	$stmt2->bindParam(':respiration', $respiration);
	$stmt2->bindParam(':stat_date', $curr_date);
	$stmt2->execute();
}

database_close($conn);

?>