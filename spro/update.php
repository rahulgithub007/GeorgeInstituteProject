<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit</title>
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
#polo{
      background-color: #b19cd9;
 }
* {
  box-sizing: border-box;
}

.centerTable { 
margin: 0px auto; 
}
table {
  font-family: verdana, sans-serif;
  border-collapse: collapse;
  border-left-padding-left: 2px solid black;
  width: 25%;
  padding: 50px;
}

.poss{
padding-bottom: 25px;
}


hr{
  border: 1px solid ;
  padding: 0px 20px;
}

.thirdtab{
border-spacing: 15px;
}

td, th,tr {
  font-family: verdana, sans-serif;
  text-align: left;
  padding: 3px;
}

tr:nth-child(even) {
  
}
* {
  box-sizing: border-box;
}


/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}
.imgpos{
float:none;
padding-top:3px;
}
.foot{
font-family:verdana;
}
#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width:100%;
  }
  
  .foot{
  font-family:Times New Roman;
  }

</style>	



</head>
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
<body background="images/snow.jpg">
	
	<div class="limiter" >
	
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
    <p><a href="lpsd.php" class="btn btn-colour-1" style="border-radius:15px"><b>Home</b></a></p><br/>
	<p><a href="hell.php" class="btn btn-colour-1" style="border-radius:15px"><b>New Registration</b></a></p><br/>
	<p><a href="followup.php" class="btn btn-colour-1" style="border-radius:15px"><b>Follow Up</b></a></p><br/>
	<p><a href="search.php" class="btn btn-colour-1" style="border-radius:15px"><b>Search/Edit</b></a></p><br/>
	<p><a href="exportopt.php" class="btn btn-colour-1" style="border-radius:15px"><b>Export to Excel</b></a></p><br/>
	<p><a href="#" class="btn btn-colour-1" style="border-radius:15px"><b>Risk Factory Survey</b></a></p><br/>
	<p><a href="/Login_v2/index.php" class="btn btn-colour-1" style="border-radius:15px"><b>Log Out</b></a></p><br/>
							<br/>	
     </div>

    <div align="center" class="col-sm-6">
	<div class="container-login100" style="background: url(images/imgone.jpg);">
	<div align="left" class="wrap-login100"style="width:605px;" >
      <span class="login100-form-title p-b-26">
					<b>Edit Details</b>
					</span>
				<form class="login100-form validate-form" action="edited.php"  method="post">
    
	             <table class='table table-hover table-responsive table-bordered'>
				  <tr>
            <td>ID</td>
            <td><input type='text' name='id' value="<?php echo $patid; ?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><input type='text' name='fn' style = "text-transform:capitalize;" value="<?php echo $patfn; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Last Name</td>
           <td><input type='text' name='ln' style = "text-transform:capitalize;" value="<?php echo $patln; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Father/Spouse Name</td>
           <td><input type='text' name='fsn'  style = "text-transform:capitalize;" value="<?php echo $patfsnam; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Gender</td>
           <td><input type='text' name='optradio' onchange="rbidValidate()" id="rbid" value="<?php echo $patgender; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Age</td>
           <td><input type='text' name='ag' id="idage" onchange="ageValidate()" value="<?php echo $patage; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Village Name</td>
           <td><input type='text' name='vn' style = "text-transform:capitalize;"  value="<?php echo $patvillagename; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Mobile No</td>
           <td><input type='text' name='mob' id="mobid" onchange="mobValidate()" value="<?php echo $patmobile; ?>" class='form-control' /></td>
        </tr>
		
        <tr> 
            <td>Date of Visit</td>
           <td><input type='date' name='dov' value="<?php echo $patdateofvisit; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Years of Disease Diagnosis</td>
           <td><input type='text' name='yodd' id="yoid" onchange="yoidValidate()" value="<?php echo $patyofdisdia; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Any Dialysis</td>
           <td><input type='text' name='optrad' value="<?php echo $patanydialysis; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Serum Creatine</td>
           <td><input type='text' name='sc' id="scid" onchange="scidValidate()" value="<?php echo $patserumcreatine; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>eGFR</td>
           <td><input type='text' name='egfr'  id="egfrid" value="<?php echo $pategfr; ?>" class='form-control' /></td>
        </tr>
		<tr>
		<td></td>
		<td>
		<div align="right"><button type="button"  onclick="egfrValidate()">Generate eGFR</button></div>
		</td>
		</tr>
        <tr>
            <td>Systolic Blood Pressure</td>
           <td><input type='text' name='sbp' id="sbpid" onchange="sbpidValidate()" value="<?php echo $patsysbp; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Diastolic Blood Pressure</td>
           <td><input type='text' name='dbp' id="dbpid" onchange="dbpidValidate()" value="<?php echo $patdiabp; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Haemoglobin</td>
           <td><input type='text' name='hg' id="hgid" onchange="hgValidate()" value="<?php echo $pathaemoglobin ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Urine Protein</td>
           <td><input type='text' name='up' value="<?php echo $paturineprotein; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Have Any Other Tests</td>
           <td><input type='text' name='opad' value="<?php echo $pathaveuad; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Others Tests</td>
           <td><input type='text' name='peh' value="<?php echo $patothertests; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Medication</td>
           <td><input type='text' name='medone' value="<?php echo $patmedication; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Drug one</td>
           <td><input type='text' name='drgone' value="<?php echo $patdone; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Drug Two</td>
           <td><input type='text' name='drgtwo' value="<?php echo $patdtwo; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Drug Three</td>
           <td><input type='text' name='drgthree' value="<?php echo $patdthree; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Drug Four</td>
           <td><input type='text' name='drgfour' value="<?php echo $patdfour; ?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>Drug Five</td>
           <td><input type='text' name='drgfive' value="<?php echo $patdfive; ?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>Drug Six</td>
           <td><input type='text' name='drgsix' value="<?php echo $patdsix; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Require to visit again</td>
           <td><input type='text' name='optra' value="<?php echo $patdprtva; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td>Next Visit on</td>
           <td><input type='date' name='nextvis' value="<?php echo $patnxtvo; ?>" class='form-control' /></td>
        </tr>
		
        <tr>
            <td><a href='search.php' class='btn btn-danger'>Back to Search</a></td>
            <td>
                <input type='submit' value='Save Changes' class='btn btn-primary' />
                
            </td>
        </tr>
        
    </table>
  </form>
			</div>
		</div>
		
    
    </div>
    <br/>
	<div class="col-sm-3" >
 
      <div class="foot" align ="center" style="font-family="verdana";">
	  
      <h4><b>The George Institute for Global Health</b></h4>
        
           <b>311-312, Third Floor, Elegance Tower, 
		      Plot No. 8, Jasola District Centre,<br>
              New Delhi, 110025, India.<br>
              Tel: <a class="tel" href="tel:+911141588091">+91 11 415 880 91-93 </a><br>
              Fax: +91 11 415 880 90<br></b>
	  </div>	
        
		<br/>
    <div class="foot" align ="center" >
              <h4><b>Social Links India</b></h4>
  
               <a href="https://www.facebook.com/GeorgeInstIN" class="nav-link"><b>Facebook  </b><i class="fa fa-facebook-official" style="font-size:24px;color:blue"></i></a>
              
               <br/>
                <a href="https://twitter.com/GeorgeInstIN" class="nav-link"><b>Twitter   </b><i class="fa fa-twitter" style="font-size:24px;color:#00bfff"></i></a>
             <br/>
                
                <a href="https://www.youtube.com/channel/UCjDJs_p9UIpomIcbqZuCZhw" class="nav-link"><span><b>YouTube  </b> <i class="fa fa-youtube"style="font-size:24px;color:red"></i></span></a>
              
		</div>


	
	</div>
	</div>
   </div>
			
			
		
			
	

	<div id="dropDownSelect1"></div>
  
  <script>
  function mobValidate(){
  var mof=document.getElementById("mobid").value;
  if(mof.length!==10 || isNaN(mof)){
     alert("Mobile Number should contain only Numbers and exactly 10 digits ");
  }
  }

 function ageValidate(){
	var fnval=document.getElementById("idage").value;
	if(isNaN(fnval) || fnval.length>3 || fnval==='0'){
	    alert("Age should contain only Numbers not greater than 3 digits ");
	}
	}

 function yoidValidate(){
	var yoidval=document.getElementById("yoid").value;
	if(isNaN(yoidval) || yoidval.length>2 ){
	    alert("It should contain only Numbers not greater than 2 digits ");
	}
	}	
	
function scidValidate(){
	var scidval=document.getElementById("scid").value;
	if(isNaN(scidval) || scidval<0.01 ||scidval>20){
	    alert("Serum Creatine should contain only Numbers, values between 0.01 to 20 ");
	}
	}	
	
function sbpidValidate(){
	var sbpidval=document.getElementById("sbpid").value;
	if(isNaN(sbpidval) || sbpidval<50 ||sbpidval>300){
	    alert("Systolic Blood Pressure should contain only Numbers, values between 50 to 300 ");
	}
	}	
function dbpidValidate(){
	var dbpidval=document.getElementById("dbpid").value;
	if(isNaN(dbpidval) || dbpidval<30 ||dbpidval>200){
	    alert("Diastolic Blood Pressure should contain only Numbers, values between 30 to 200 ");
	}
	}
	
	function rbidValidate(){
	var rbidval=document.getElementById("rbid").value;
	if( rbidval=="male" || rbidval=="female"){   
	}
	else{
		alert("Gender should contain only 'male' or 'female' (in lowercase) ");
	}
	}
	
	function hgValidate(){
	var hgidval=document.getElementById("hgid").value;
	if(isNaN(hgidval) || hgidval<1 ||hgidval>20){
	    alert("Haemoglobin should contain only Numbers, values between 1 to 20 ");
	}
	}
	
	function egfrValidate(){
	var scval=document.getElementById("scid").value;
	var agval=document.getElementById("idage").value;
	if(document.getElementById("rbid").value =="male"){
		var maleval= 175*(Math.pow(scval, -1.154))*(Math.pow(agval, -0.203));
         document.getElementById("egfrid").value=maleval;
	}
	if(document.getElementById("rbid").value == "female"){
		var femaleval= 175*(Math.pow(scval, -1.154))*(Math.pow(agval, -0.203))*0.742;
		document.getElementById("egfrid").value=femaleval;
	}
	
	}
	
  </script>

</body>
</html>