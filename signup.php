<HTML>
<HEAD>
	<link rel="stylesheet" type="text/css" href="signup.css">
	<script type="text/javascript">var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}</script>
</HEAD>
<BODY background="banner-bg.jpg">
	<form method="POST">
	<div id="signup">
	    <input type="radio" name="radio"><input type="text" name="firstname" id="fname" placeholder="First Name"><input type="text" name="lastname" id="lname" placeholder="Last Name"><input type="text" name="emailid" id="emailid" placeholder="Email Id"><input type="Password" name="password" id="password" placeholder="Password"><input type="password" name="Re-Password" id="repassword" placeholder="Re-Password"><input type="text" name="city" id="city" placeholder="City"><input type="Contact" name="contact_no" id="contact" placeholder="Contact No.">   
	    	<div class="multiselect">
    			<div class="selectBox" onclick="showCheckboxes()">
      				<select>
       					<option>Select an option</option>
      				</select>
      				<div class="overSelect"></div>
    				</div>
    				<div id="checkboxes">
   						<input type="checkbox" id="Carpenter"/>Carpenter
       				 	<input type="checkbox" id="Plumber"/>Plumber
       				 	<input type="checkbox" id="Electrician"/>Electrician
       				 	<input type="checkbox" id="Cleaning"/>Cleaning
       				 	<input type="checkbox" id="Appliances"/>Appliances Repair & Services
       				 	<input type="checkbox" id="Pest"/>Pest Control
       				 	<input type="checkbox" id="Home"/>Home Security
       				 	<input type="checkbox" id="Packers"/>Packers Movers
    				</div>
 				</div>
	    <input type="submit" class="submit" name="submit" value="submit">
	</div>
	</form>
<?php
	include("signupinclude.php")
?>
</BODY>
</HTML>