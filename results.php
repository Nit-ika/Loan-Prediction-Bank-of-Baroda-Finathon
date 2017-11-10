<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Result</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel="stylesheet" href="css\style.css">
</head>

<body>
<br><br><br>
 <h1 class="fs-title"><center>Loan Prediction Results</center></h1>
<br><br> 
	


<?php
session_start();

$varname=$_SESSION['name'];
$age=$_SESSION['age'];
$email=$_SESSION['email'];
$gender=$_SESSION['gender'];
$address=$_SESSION['address'];
$maritalstatus=$_SESSION['maritalstatus'];
$mex=$_SESSION['mex'];
$mincome=$_SESSION['mincome'];
$loanam=$_SESSION['loan-am'];
$loant=$_SESSION['loan-t'];
echo"<center>";
	echo "Name    :-     ".$varname."<br><br>";
	echo "Age     :-     ".$age."<br><br>";
	echo "Email     :-     ".$email."<br><br>";
	echo "Gender     :-     ".$gender."<br><br>";
	echo "Address     :-     ".$address."<br><br>";
	echo "Marital status     :-     ".$maritalstatus."<br><br>";
	echo "Income(monthly)     :-     ".$mincome."<br><br>";
	echo "Expenditure(monthly)     :-     ".$mex."<br><br>";
	echo "Loan Amount     :-     Rs.".$loanam."<br><br>";

echo "<hr><br><br>";
if($age<18){
	echo "Sorry you are not eligible being less than 18 years old";
}
	
else{
	$diff=$mincome-$mex;
	$emi=$loanam/$loant;
	if($emi>$diff){
		echo "Sorry you are not eligible";
	}	
	else{
		echo "You are eligible for the loan";
	}
}	
echo"</center>";	
?>

</body>