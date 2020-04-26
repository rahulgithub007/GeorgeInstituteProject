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
		
		
		//Validations
		
		if($id==""){
  echo '<script type="text/javascript">'; 
echo 'alert("Enter Patient ID ");';
echo '</script>';
die("");    
}

if($firstname==""){
  echo '<script type="text/javascript">'; 
echo 'alert("Enter First Name ");';
echo '</script>';
die("");    
}

if($lastname==""){
  echo '<script type="text/javascript">'; 
echo 'alert("Enter Last Name ");';
echo '</script>';
die("");    
}

	if($gender==""){
  echo '<script type="text/javascript">'; 
echo 'alert("Enter Gender ");';
echo '</script>';
die("");    
}

if($age==""){
  echo '<script type="text/javascript">'; 
echo 'alert("Enter Age ");';
echo '</script>';
die("");    
}

if($villagename==""){
  echo '<script type="text/javascript">'; 
echo 'alert("Enter Village Name ");';
echo '</script>';
die("");    
}


if($dateofvisit==""){
  echo '<script type="text/javascript">'; 
echo 'alert("Enter Date of Visit ");';
echo '</script>';
die("");    
}

if($serumcreatine==""){
  echo '<script type="text/javascript">'; 
echo 'alert("Enter Serum Creatine ");';
echo '</script>';
die("");    
}

if($egfr==""){
  echo '<script type="text/javascript">'; 
echo 'alert("Enter eGFR ");';
echo '</script>';
die("");    
}

if($sysbp==""){
  echo '<script type="text/javascript">'; 
echo 'alert("Enter Systolic Blood Pressure");';
echo '</script>';
die("");    
}

if($diabp==""){
  echo '<script type="text/javascript">'; 
echo 'alert("Enter Diastolic Blood Pressure ");';
echo '</script>';
die("");    
}

if($haemoglobin==""){
  echo '<script type="text/javascript">'; 
echo 'alert("Enter Haemoglobin ");';
echo '</script>';
die("");    
}





		
		// include database connection file
		
$databaseHost = 'localhost';
$databaseName = 'u183545419_prdb';
$databaseUsername = 'u183545419_dodo';
$databasePassword = 'rahul1311';

$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
				
		// Insert user data into table
		$sql = "INSERT INTO pr(id,firstname,lastname,fsname,age ,gender,villagename,mobile,createddate) VALUES ('$id','$firstname','$lastname','$fsname','$age','$gender','$villagename','$mobile','$dt')";
		
		$sqlu="INSERT INTO inves(id,dateofvisit,noofvisit,yofdisdia,anydialysis,serumcreatine,egfr,sysbp,diabp,haemoglobin,urineprotein,haveuad,othertests,medication,done ,dtwo,dthree,dfour,dfive,dsix,dprtva,nxtvo,createddate) VALUES ('$id','$dateofvisit','1','$yofdisdia','$anydialysis','$serumcreatine','$egfr','$sysbp','$diabp','$haemoglobin','$urineprotein','$haveuadd','$othertests','$medication','$drugone','$drugtwo','$drugthree','$drugfour','$drugfive','$drugsix','$dtpatrva','$nextvisiton','$dt')";
	
	
		if ($conn->query($sqlu) === TRUE && $conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">'; 
echo 'alert("New Entry Created Successfully !!!");'; 
echo 'window.location.href = "/spro/lpsd.php";';
echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


	
?>
