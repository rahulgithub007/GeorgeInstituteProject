<?php

        $desval=$_POST['optradio'];
		$fromdt = $_POST['frdt'];
		$fromdat=date("Y-m-d H:i:s",strtotime($fromdt));
		$todt = $_POST['todt'];
		$todat=date("Y-m-d H:i:s",strtotime($todt));
		$patientid=$_POST['ppid'];
		
$databaseHost = 'localhost';
$databaseName = 'u183545419_prdb';
$databaseUsername = 'u183545419_dodo';
$databasePassword = 'rahul1311';

$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($desval == "singval") {
    $sql = "DELETE FROM pr WHERE id='$patientid'";
	$sqlu = "DELETE FROM inves WHERE id='$patientid'";
	$sqluu = "DELETE FROM med WHERE id='$patientid'";
} 

if ($desval == "mulval") {
    $sql ="DELETE  FROM pr WHERE createddate between '$fromdat' AND '$todat'";
	$sqlu ="DELETE  FROM inves WHERE  createddate between  '$fromdat' AND '$todat'";
	$sqluu ="DELETE  FROM med WHERE createddate between '$fromdat' AND '$todat'";
} 


// sql to delete a record


if ($conn->query($sqluu) === TRUE && $conn->query($sqlu) === TRUE && $conn->query($sql) === TRUE)  {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>