	<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
		
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
	<link rel="stylesheet" type="text/css" href="css/util.css">
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<style>
</style>

<body>	

<?php
		$id = $_GET['id'];
		$nv = $_GET['nov'];
	
		
		
		$databaseHost = 'localhost';
$databaseName = 'u183545419_prdb';
$databaseUsername = 'u183545419_dodo';
$databasePassword = 'rahul1311';

$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT p.id,p.firstname, p.lastname,p.fsname,p.gender,p.age,p.villagename,p.mobile,i.dateofvisit,i.yofdisdia,i.anydialysis,i.noofvisit,i.serumcreatine,i.egfr,i.sysbp,i.diabp,i.haemoglobin,i.urineprotein,i.haveuad,i.othertests,i.medication,i.done,i.dtwo,i.dthree,i.dfour,i.dfive,i.dsix,i.dseven,i.deight,i.dnine,i.dten,i.dprtva,i.nxtvo FROM pr p left join inves i on i.id=p.id WHERE p.id='$id' and i.noofvisit='$nv'";

$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($patid, $patfn, $patln, $patfsnam,$patgender,$patage,$patvillagename,$patmobile,$patdateofvisit,$patyofdisdia,$patanydialysis,$patnoofvisit,$patserumcreatine,$pategfr,$patsysbp,$patdiabp,$pathaemoglobin,$paturineprotein,$pathaveuad,$patothertests,$patmedication,$patdone,$patdtwo,$patdthree,$patdfour,$patdfive,$patdsix,$patdseven,$patdeight,$patdnine,$patdten,$patdprtva,$patnxtvo);
$stmt->fetch();
$stmt->close();


?>


	<div class="row" id="polo">
    <div class="col-sm-3" >
    <!--<img src="D:/D.S/george/logo.jpg"/>-->
    </div>
    <div align="center" class="col-sm-6">
      <img src="images/ghel.jpg">
    </div>
	<div class="col-sm-3">
	</div>
   </div>
  <br/>
  




			
			<div class="row">
    <div class="col-sm-3"> 
	<p><a href="lpsd.php" class="btn btn-colour-1" style="border-radius:15px">Home</a></p><br/>
	<p><a href="hell.php" class="btn btn-colour-1" style="border-radius:15px">New Registration</a></p><br/>
	<p><a href="followup.php" class="btn btn-colour-1" style="border-radius:15px">Follow Up</a></p><br/>
    <p><a href="update.php" class="btn btn-colour-1" style="border-radius:15px">Edit Details</a></p><br/>
	<p><a href="search.php" class="btn btn-colour-1" style="border-radius:15px">Search Details</a></p><br/>
	<p><a href="exportopt.php" class="btn btn-colour-1" style="border-radius:15px">Export to Excel</a></p><br/>
	<p><a href="#" class="btn btn-colour-1" style="border-radius:15px">Risk Factory Survey</a></p><br/>
	<p><a href="/Login_v2/index.php" class="btn btn-colour-1" style="border-radius:15px">Log Out</a></p><br/>
							<br/>
     </div>
	 
	 <div align="center" class="col-sm-9">

<form  method="post">
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>First Name</td>
            <td><input type='text' name='fn' value="<?php echo $patfn; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Last Name</td>
           <td><input type='text' name='ln' value="<?php echo $patln; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Father/Spouse Name</td>
           <td><input type='text' name='ln' value="<?php echo $patfsnam; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Gender</td>
           <td><input type='text' name='ln' value="<?php echo $patgender; ?>" class='form-control' /></td>
        </tr>
		<br/> 
        <tr>
            <td>Age</td>
           <td><input type='text' name='ln' value="<?php echo $patage; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Village Name</td>
           <td><input type='text' name='ln' value="<?php echo $patvillagename; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Mobile No</td>
           <td><input type='text' name='ln' value="<?php echo $patmobile; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr> 
            <td>Date of Visit</td>
           <td><input type='text' name='ln' value="<?php echo $patdateofvisit; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Years of Disease Diagnosis</td>
           <td><input type='text' name='ln' value="<?php echo $patyofdisdia; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Any Dialysis</td>
           <td><input type='text' name='ln' value="<?php echo $patanydialysis; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Serum Creatine</td>
           <td><input type='text' name='ln' value="<?php echo $patserumcreatine; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>eGFR</td>
           <td><input type='text' name='ln' value="<?php echo $pategfr; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Systolic Blood Pressure</td>
           <td><input type='text' name='ln' value="<?php echo $patsysbp; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Diastolic Blood Pressure</td>
           <td><input type='text' name='ln' value="<?php echo $patdiabp; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Haemoglobin</td>
           <td><input type='text' name='ln' value="<?php echo $pathaemoglobin ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Urine Protein</td>
           <td><input type='text' name='ln' value="<?php echo $paturineprotein; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Have Any Other Tests</td>
           <td><input type='text' name='ln' value="<?php echo $pathaveuad; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Others Tests</td>
           <td><input type='text' name='ln' value="<?php echo $patothertests; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Medication</td>
           <td><input type='text' name='ln' value="<?php echo $patmedication; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Drug one</td>
           <td><input type='text' name='ln' value="<?php echo $patdone; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Drug Two</td>
           <td><input type='text' name='ln' value="<?php echo $patdtwo; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Drug Three</td>
           <td><input type='text' name='ln' value="<?php echo $patdthree; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Drug Four</td>
           <td><input type='text' name='ln' value="<?php echo $patdfour; ?>" class='form-control' /></td>
        </tr><br/>
        <tr>
            <td>Drug Five</td>
           <td><input type='text' name='ln' value="<?php echo $patdfive; ?>" class='form-control' /></td>
        </tr><br/>
        <tr>
            <td>Drug Six</td>
           <td><input type='text' name='ln' value="<?php echo $patdsix; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Drug Seven</td>
           <td><input type='text' name='ln' value="<?php echo $patdseven; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Drug Eight</td>
           <td><input type='text' name='ln' value="<?php echo $patdeight; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Drug Nine</td>
           <td><input type='text' name='ln' value="<?php echo $patdnine; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Drug Ten</td>
           <td><input type='text' name='ln' value="<?php echo $patdten; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Require to visit again</td>
           <td><input type='text' name='ln' value="<?php echo $patdprtva; ?>" class='form-control' /></td>
        </tr>
		<br/>
        <tr>
            <td>Next Visit on</td>
           <td><input type='text' name='ln' value="<?php echo $patnxtvo; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Save Changes' class='btn btn-primary' />
                <a href='search.php' class='btn btn-danger'>Back to Search</a>
            </td>
        </tr>
    </table>
</form>
</div>
</div>





</body>
</html>