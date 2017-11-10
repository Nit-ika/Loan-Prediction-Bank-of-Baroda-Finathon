<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Loan Prediction</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel="stylesheet" href="css\style.css">
</head>

<body>
<!---------------------------------------------------------------------------------->  
  
<form id="msform" method="post">
  
  <fieldset>
    <h2 class="fs-title">Income & Banking Details</h2>
    
    <input type="text" name="mincome" placeholder="Monthly Income" />
    <input type="text" name="mex" placeholder="Monthly Expenses" />
 <input type="text" name="bname" placeholder="Bank Name" />
 <input type="text" name="branch" placeholder="Branch" />

 <input list="act" name="acctype" placeholder="Account Type">
   <datalist id="act">
    <option value="Current">
    <option value="Savings">
    <option value="Joint">
  </datalist>

  <input list="ol" name="isloan" placeholder="Is there any ongoing Loan? Select option">
   <datalist id="ol">
   <option value="Yes">
   <option value="No">
   </datalist>
  
    <input type="submit" name="next2" class="next action-button" value="Next" />
  </fieldset>
 
</form>
<!----------------------------------------------------------------------------------------->

<?php
session_start();
if(isset($_POST['next2']))
{
	$_SESSION['mex']=$_POST['mex'];
	$_SESSION['mincome']=$_POST['mincome'];
	header('Location:index3.php');
}

?>
<!---------------------------------------------------->
</html>