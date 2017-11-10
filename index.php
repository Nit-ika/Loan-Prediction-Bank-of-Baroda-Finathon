<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Loan Prediction</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel="stylesheet" href="css\style.css">
</head>

<body>
  <!-- multistep form -->
<form id="msform" method="post">
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Enter Your Details</h2>
    <h3 class="fs-subtitle">This is step 1:</h3>
    <input type="text" name="Fname" placeholder="First Name" required />
    <input type="text" name="Lname" placeholder="Last Name" required />
    <input type="text" name="age" placeholder="Age" required />
    <input type="text" name="gender" placeholder="Gender" />
    <input type="email" name="email" placeholder="Email-ID" required />    
   
<input list="addr" name="address" placeholder="Address is" required>
  <datalist id="addr">
    <option value="Owned">
    <option value="Parental Address">
    <option value="Company Provided">
    <option value="Rented">
    <option value="Others">
  </datalist>
   

   <input list="ms" name="maritalstatus" placeholder="Marital Status" required>
   <datalist id="ms">
    <option value="Single">
    <option value="Married">
    <option value="Divorced">
    <option value="Widowed">
  </datalist>
   
   <input list="edu" name="edudetails" placeholder="Educational Details" required>
   <datalist id="edu">
    <option value="UG">
    <option value="Graduate">
    <option value="Post-Graduate">
    <option value="Others">
  </datalist>
   
   <input type="text" name="dep" placeholder="No Of Dependents" required />

   <input list="emp" name="empstatus" placeholder="Employment Status" required>
   <datalist id="emp">
    <option value="Self-Employed">
    <option value="Salarized">
  </datalist>
    
    <input type="submit" name="next1" class="next action-button" value="Next" />
  </fieldset>
</form>  
  
  
  
<!---------------------------------------------------------------------------------->    
</body>

<?php
session_start();

if(isset($_POST['next1']))
{ 
	$_SESSION['name'] = $_POST['Fname'];
	$_SESSION['age'] = $_POST['age'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['gender'] = $_POST['gender'];
	$_SESSION['address'] = $_POST['address'];
	$_SESSION['maritalstatus'] = $_POST['maritalstatus'];
	
	header('Location:index2.php');
}
?>
<!---------------------------------------------------->
</html>