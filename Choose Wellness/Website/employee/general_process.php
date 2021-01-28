<?php
require '../connection.php';
date_default_timezone_set('Asia/Kolkata');
$curr_date = date('Y-m-d H:i:s');
$value = $_POST["function"];


    switch($value)
    {
		case "get_data":
			get_data();
			break;
			
		case "graph_data_daily":
			graph_data_daily();
			break;
			
		default:
            $data = ["result" => "danger", "Message" => "Invalid Access"];
            echo json_encode($data); 
            break;
    }

function get_data(){
	
    $conn=database_info(); 
	$sno=0;
	$sql="SELECT * FROM stats WHERE emp_id=:emp_id ORDER BY stat_date DESC LIMIT 1";
	$stmt = $conn->prepare($sql); 
	$stmt->bindParam(':emp_id', $_SESSION["emp_id"]);
	$stmt->execute();
	$row= $stmt->fetch(PDO::FETCH_BOTH);
    $data = ["sugar_level" => $row["sugar"], "pressure_level1" => $row["pressure1"], "pressure_level2" => $row["pressure2"], "oxygen_level" => $row["oxygen"], "heart_rate" => $row["heart_rate"], "respiration" => $row["respiration"], "last_updated" => $row["stat_date"]];
        
	echo json_encode($data);
	database_close($conn);
		
}

function graph_data_daily(){
	
    $curr_date2 = date('Y-m-d');
	
    $conn=database_info(); 
        
    $data = array();
    for($i=0;$i<24;$i++){
        $data[$i] = array(
        'slno' => sprintf('%02d',$i),
    	'data' => array());
        
        $sugar = 0;
        $pressure1 = 0;
        $pressure2 = 0;
        $heart_rate = 0;
        $oxygen = 0;
        $resporation = 0;
        
        $sql="SELECT * FROM stats WHERE emp_id=:emp_id AND stat_date like '".$curr_date2." ".sprintf('%02d',$i)."%'";
    	$stmt = $conn->prepare($sql);
    	$stmt->bindParam(':emp_id', $_SESSION["emp_id"]);
    	$stmt->execute();
    	$count = $stmt->rowCount();
    	
    	if($count == 0){
    	    
    	    $data[$i]['data'][0] = array(
    		'sugar' => 0,
    		'pressure1' => 0,
    		'pressure2' => 0,
    		'heart_rate' => 0,
    		'oxygen' => 0,
    		'respiration' => 0,
    		'date' => $curr_date2." ".sprintf('%02d',$i).":00:00");
        
    	}
    	else{
            
            while($row = $stmt->fetch(PDO::FETCH_BOTH)){
        	    $sugar += $row["sugar"];
                $pressure1 += $row["pressure1"];
                $pressure2 += $row["pressure2"];
                $heart_rate += $row["heart_rate"];
                $oxygen += $row["oxygen"];
                $resporation += $row["respiration"];
        	}
        	
        	$data[$i]['data'][0] = array(
    		'sugar' => floor($sugar/$count),
    		'pressure1' => floor($pressure1/$count),
    		'pressure2' => floor($pressure2/$count),
    		'heart_rate' => floor($heart_rate/$count),
    		'oxygen' => floor($oxygen/$count),
    		'respiration' => floor($resporation/$count),
    		'date' => $curr_date2." ".sprintf('%02d',$i).":00:00");
    	    
    	}
        
    }
        
	echo json_encode($data);
	database_close($conn);
		
}

?>