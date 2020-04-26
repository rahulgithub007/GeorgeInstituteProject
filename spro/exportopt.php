<?php  
//export.php  
$databaseHost = 'localhost';
$databaseName = 'u183545419_prdb';
$databaseUsername = 'u183545419_dodo';
$databasePassword = 'rahul1311';

$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$output = '';

 $sql = "SELECT i.id, p.firstname, p.lastname,p.fsname,p.gender,p.age,p.villagename,p.mobile,i.dateofvisit,i.yofdisdia,i.anydialysis,i.noofvisit,i.serumcreatine,i.egfr,i.sysbp,i.diabp,i.haemoglobin,i.urineprotein,i.haveuad,i.othertests,i.medication,i.done,i.dtwo,i.dthree,i.dfour,i.dfive,i.dsix,i.dseven,i.deight,i.dnine,i.dten,i.dprtva,i.nxtvo FROM pr p left join inves i on i.id=p.id ORDER BY i.noofvisit DESC";
 $result = $conn->query($sql);

  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Father/Spouse Name</th>
<th>Gender</th>
<th>Age</th>
<th>Village Name</th>
<th>Mobile No</th>
<th>Date of Visit</th>
<th>Years of Dialysis</th>
<th>Any Dialysis</th>
<th>No of Visits</th>
<th>Serum Creatine</th>
<th>eGFR</th>
<th>Systolic Blood Pressure</th>
<th>Diastolic Blood Pressure</th>
<th>Haemoglobin</th>
<th>Urine Protein</th>
<th>Undergone any earlier dialysis</th>
<th>Other Tests</th>
<th>Drug 1</th>
<th>Drug 2</th>
<th>Drug 3</th>
<th>Drug 4</th>
<th>Drug 5</th>
<th>Drug 6</th>
<th>Drug 7</th>
<th>Drug 8</th>
<th>Drug 9</th>
<th>Drug 10</th>
<th>Visit Again</th>
<th>Date of next visit</th> 						 
      
                    </tr>
  ';
  while($row = $result->fetch_assoc())
  {
   $output .= '
    <tr>  
                         
    <td>'. $row["id"] .'</td>
     <td>'. $row["firstname"] .'</td>
     <td>'. $row["lastname"] .'</td>
	 <td>'. $row["fsname"] .'</td>
	 <td>'. $row["gender"] .'</td>
	 <td>'. $row["age"] .'</td>
	 <td>'. $row["villagename"] .'</td>
	 <td>'. $row["mobile"] .'</td>
	 <td>'. $row["dateofvisit"] .'</td>
	 <td>'. $row["yofdisdia"] .'</td>
	 <td>'. $row["anydialysis"] .'</td>
	 <td>'. $row["noofvisit"] .'</td>
	 <td>'. $row["serumcreatine"] .'</td>
	 <td>'. $row["egfr"] .'</td>
	 <td>'. $row["sysbp"] .'</td>
	 <td>'. $row["diabp"] .'</td>
	 <td>'. $row["haemoglobin"] .'</td>
	 <td>'. $row["urineprotein"] .'</td>
	 <td>'. $row["haveuad"] .'</td>
	 <td>'. $row["othertests"] .'</td>
	 <td>'. $row["done"] .'</td>
	 <td>'. $row["dtwo"] .'</td>
	 <td>'. $row["dthree"] .'</td>
	 <td>'. $row["dfour"] .'</td>
	 <td>'. $row["dfive"] .'</td>
	 <td>'. $row["dsix"] .'</td>
	 <td>'. $row["dseven"] .'</td>
	 <td>'. $row["deight"] .'</td>
	 <td>'. $row["dnine"] .'</td>
	 <td>'. $row["dten"] .'</td>
	 <td>'. $row["dprtva"] .'</td>
	 <td>'. $row["nxtvo"] .'</td>  
       
                    </tr>
   ';
  }
  $output .= '</table>';
 header('Content-type: application/csv');
header('Content-Disposition: attachment; filename=toy_csv.csv');
  echo $output;
 

$conn->close();
?>
