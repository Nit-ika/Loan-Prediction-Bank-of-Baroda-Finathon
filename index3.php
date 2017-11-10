<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Loan Prediction</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel="stylesheet" href="css\style.css">
</head>

<body>
  <!----------------------------------------------------------------------------------------->


<form id="msform" method="post">
 <fieldset>
    <h2 class="fs-title">Loan Details</h2> 
    <input list="lo" name="puploan" placeholder="Purpose Of Loan">
   <datalist id="lo">
    <option value="Home Renovation">
    <option value="Marriage">
    <option value="Travel">
    <option value="Education">
    <option value="Business Expansion">
    <option value="Agricultural Farming">
    <option value="Transport of agricultural products">
    <option value="Others">
  </datalist>
    <input type="text" name="loan-am" placeholder="Loan Amount" />
    <input type="text" name="loan-t" placeholder="Loan Tenure(Months) you would want" />    
    <input type="submit" name="finalsubmit" class="submit action-button" value="Show results" />
  </fieldset>
</form>
 
   
</body>

<!---------------------------------------------------->
<?php
session_start();
if(isset($_POST['finalsubmit']))
{
	$_SESSION['loan-am']=$_POST['loan-am'];
	$_SESSION['loan-t']=$_POST['loan-t'];	
	header('Location:results.php');
}

?>
<!---------------------------------------------------->
</html>