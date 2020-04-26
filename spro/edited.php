<?php

	// Check If form submitted, insert form data into users table.
	//patient personal details pr
	
        $id=$_POST['id'];
		$firstname = $_POST['fn'];
		$lastname = $_POST['ln'];
		$fsname = $_POST['fsn'];	
		//$input_date=$_POST['bd'];
        //$birthdate=date("Y-m-d H:i:s",strtotime($input_date));
		$age = $_POST['ag'];
		$gender = $_POST['optradio'];
		$villagename = $_POST['vn'];
		$mobile = $_POST['mob'];
		

	//Investigation	
	    $dateofvisit = $_POST['dov'];
		$yofdisdia = $_POST['yodd'];
		$anydialysis = $_POST['optrad'];
		$noofvisit = $_POST['nov'];
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


		$sql = "UPDATE pr SET firstname='$firstname', lastname='$lastname', fsname='$fsname', age='$age', gender='$gender',villagename='$villagename', mobile='$mobile'  WHERE id=$id";
		
		$sqlu = "UPDATE inves SET dateofvisit='$dateofvisit', yofdisdia='$yofdisdia', anydialysis='$anydialysis', serumcreatine='$serumcreatine', egfr='$egfr', sysbp='$sysbp', diabp='$diabp',haemoglobin='$haemoglobin', urineprotein='$urineprotein', haveuad='$haveuadd', othertests='$othertests', medication='$medication', done='$drugone', dtwo='$drugtwo',dthree='$drugthree', dfour='$drugfour',dfive='$drugfive', dsix='$drugsix', dprtva='$dtpatrva',nxtvo='$nextvisiton'  WHERE id=$id and noofvisit=$noofvisit"; 
		

		if ($conn->query($sqlu) === TRUE && $conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">'; 
echo 'alert("Edited Successfully !!!");'; 
echo 'window.location.href = "search.php";';
echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


	
?>
