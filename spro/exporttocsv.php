<?php

$databaseHost = 'localhost';
$databaseName = 'u183545419_prdb';
$databaseUsername = 'u183545419_dodo';
$databasePassword = 'rahul1311';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$sql = "SELECT max(noofvisit) FROM inves ";

$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($noofvisit);
$stmt->fetch();
$stmt->close();

$query = "SELECT p.id, p.firstname, p.lastname,p.fsname,p.gender,p.age,p.villagename,p.mobile from pr p order by p.id ";
$queryone="select i.id,i.dateofvisit,i.yofdisdia,i.anydialysis,i.noofvisit,i.serumcreatine,i.egfr,i.sysbp,i.diabp,i.haemoglobin,i.urineprotein,i.haveuad,i.othertests,i.done,i.dtwo,i.dthree,i.dfour,i.dfive,i.dsix,i.dprtva,i.nxtvo FROM inves i ORDER BY i.id ";

$resultmax = mysqli_query($conn, $querymax);
$resultpr = mysqli_query($conn, $query);
$resultinves = mysqli_query($conn, $queryone);

$maxnoofvisit=$noofvisit;


$num_columnpr = mysqli_num_fields($resultpr);	
$num_columninves = mysqli_num_fields($resultinves);		

$csv_header = '';

	$csv_header .= '"' . ID . '",';
    $csv_header .= '"' . First." ". Name . '",';
	$csv_header .= '"' . Last." ".Name . '",';
	$csv_header .= '"' . Father."/".Spouse." ".Name . '",';
	$csv_header .= '"' . Gender . '",';
	$csv_header .= '"' . Age . '",';
	$csv_header .= '"' . Village." ".Name . '",';
	$csv_header .= '"' . Mobile . '",';
	


for($i=0;$i<$maxnoofvisit;$i++){
	
	$csv_header .= '"' . Date." ".of." ".Visit . '",';
	$csv_header .= '"' . Year." ".of." ".Disease." ".Diagnosis . '",';
	$csv_header .= '"' . Any." ".Dialysis . '",';
	$csv_header .= '"' . No." ".of." ".Visits . '",';
	$csv_header .= '"' . Serum." ".Creatine . '",';
	$csv_header .= '"' . eGFR . '",';
	$csv_header .= '"' . Systolic." ".Blood." ".Pressure . '",';
	$csv_header .= '"' . Diastolic." ".Blood." ".Pressure . '",';
	$csv_header .= '"' . Haemoglobin . '",';
	$csv_header .= '"' . Urine." ".Protein . '",';
	$csv_header .= '"' . Have." ".Undergone." ".any." ".Dialysis . '",';
	$csv_header .= '"' . Other." ".Tests . '",';
	$csv_header .= '"' . Drug." ".One . '",';
	$csv_header .= '"' . Drug." ".Two . '",';
	$csv_header .= '"' . Drug." ".Three . '",';
	$csv_header .= '"' . Drug." ".Four . '",';
	$csv_header .= '"' . Drug." ".Five . '",';
	$csv_header .= '"' . Drug." ".Six . '",';
	$csv_header .= '"' . Req." ".to." ".Visit." ".Again . '",';
	$csv_header .= '"' . Next." ".Visit." ".On . '",';
	

}

$csv_header .= "\n";



$csv_row ='';

$invesarr = array();
while($row = $resultinves->fetch_assoc()) {
	$invesarr[] = $row;
}


while($row = $resultpr->fetch_assoc()) {
        $csv_row .= '"' . $row["id"] . '",';
		 $csv_row .= '"' . $row["firstname"] . '",';
		  $csv_row .= '"' . $row["lastname"] . '",';
		   $csv_row .= '"' . $row["fsname"] . '",';
		    $csv_row .= '"' . $row["gender"] . '",';
			 $csv_row .= '"' . $row["age"] . '",';
			  $csv_row .= '"' . $row["villagename"] . '",';
			   $csv_row .= '"' . $row["mobile"] . '",';
			   
			   
			   foreach ($invesarr as $rowinves)  {
				   if($rowinves["id"] == $row["id"]){
					   $csv_row .= '"' . $rowinves["dateofvisit"] . '",';
					   $csv_row .= '"' . $rowinves["yofdisdia"] . '",';
					   $csv_row .= '"' . $rowinves["anydialysis"] . '",';
					   $csv_row .= '"' . $rowinves["noofvisit"] . '",';
					   $csv_row .= '"' . $rowinves["serumcreatine"] . '",';
					   $csv_row .= '"' . $rowinves["egfr"] . '",';
					   $csv_row .= '"' . $rowinves["sysbp"] . '",';
					   $csv_row .= '"' . $rowinves["diabp"] . '",';
					   $csv_row .= '"' . $rowinves["haemoglobin"] . '",';
					   $csv_row .= '"' . $rowinves["urineprotein"] . '",';
					   $csv_row .= '"' . $rowinves["haveuad"] . '",';
					   $csv_row .= '"' . $rowinves["othertests"] . '",';
					   $csv_row .= '"' . $rowinves["done"] . '",';
					   $csv_row .= '"' . $rowinves["dtwo"] . '",';
					   $csv_row .= '"' . $rowinves["dthree"] . '",';
					   $csv_row .= '"' . $rowinves["dfour"] . '",';
					   $csv_row .= '"' . $rowinves["dfive"] . '",';
					   $csv_row .= '"' . $rowinves["dsix"] . '",';
					   $csv_row .= '"' . $rowinves["dprtva"] . '",';
					   $csv_row .= '"' . $rowinves["nxtvo"] . '",';
				   }
			   }
			   $csv_row .= "\n";
    }

/*while($row = mysqli_fetch_row($resultpr)) {
	for($k=0;$k<$num_columnpr;$k++) {
		$csv_row .= '"' . $row[$k] . '",';
	}
	$j=0;
	
$csv_row .= "\n";	
}*/


/* Download as CSV File */
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename=toy_csv.csv');
echo $csv_header . $csv_row;
exit;
?>