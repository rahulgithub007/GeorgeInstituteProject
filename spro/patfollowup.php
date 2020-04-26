<?php

	// Check If form submitted, insert form data into users table.
	//patient personal details pr
	
    $id=$_POST['epid'];
		
	//Investigation	
		$dateofvisit = $_POST['dov'];
		$yofdisdia = $_POST['yodd'];
		$anydialysis = $_POST['optrad'];
		//$noofvisit = $_POST['nov'];
		$serumcreatine = $_POST['sc'];
		$egfr = $_POST['egfr'];
		$sysbp = $_POST['sbp'];
		$diabp = $_POST['dbp'];
		$haemoglobin = $_POST['hg'];
		$urineprotein = $_POST['up'];
		$haveuadd = $_POST['opad'];
		$othertests = $_POST['peh'];
		$medication = $_POST['medone'];
		
   
		
	//Medication			
	$drugone = $_POST['drgone'];
		$drugtwo = $_POST['drgtwo'];
		$drugthree = $_POST['drgthree'];
		$drugfour = $_POST['drgfour'];
		$drugfive = $_POST['drgfive'];
		$drugsix = $_POST['drgsix'];
		$dtpatrva = $_POST['optra'];
		$nextvisiton = $_POST['nextvis'];
		
	//Date insertion
    $dt = date('Y-m-d H:i:s');	
		
		// include database connection file
		
$databaseHost = 'localhost';
$databaseName = 'u183545419_prdb';
$databaseUsername = 'u183545419_dodo';
$databasePassword = 'rahul1311';

$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT max(noofvisit) FROM inves WHERE id='$id'";

$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($noofvisit);
$stmt->fetch();
$stmt->close();
				
	$novv=$noofvisit + 1;
				
		// Insert user data into table
		
		
		$sqlu="INSERT INTO inves(id,dateofvisit,noofvisit,yofdisdia,anydialysis,serumcreatine,egfr,sysbp,diabp,haemoglobin,urineprotein,haveuad,othertests,medication,done ,dtwo,dthree,dfour,dfive,dsix,dprtva,nxtvo,createddate) VALUES ('$id','$dateofvisit','$novv','$yofdisdia','$anydialysis','$serumcreatine','$egfr','$sysbp','$diabp','$haemoglobin','$urineprotein','$haveuadd','$othertests','$medication','$drugone','$drugtwo','$drugthree','$drugfour','$drugfive','$drugsix','$dtpatrva','$nextvisiton','$dt')";
		
	
		if ($conn->query($sqlu) === TRUE ) {
     echo '<script type="text/javascript">'; 
echo 'alert("Follow Up Created Successfully !!!");'; 
echo 'window.location.href = "/spro/lpsd.php";';
echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

	
?>
