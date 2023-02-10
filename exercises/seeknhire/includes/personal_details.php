<?php
$allErrors="";
// if successful message is set
if (isset($_GET['msg'])){
	$msg = $_GET['msg'];
}
// if error msg is set
if (isset($_GET['error'])){
	$error = $_GET['error'];
}
// if name error is set
if(isset($_GET['errorNM']) && $_GET['errorNM'] != "") {
	$errorNM = '* '.$_GET['errorNM'];
	$allErrors .= $errorNM."<br>";
}
// if surname error is set
if(isset($_GET['errorSM']) && $_GET['errorSM'] != ""){
	$errorSM = '* '.$_GET['errorSM'];
	$allErrors .= $errorSM."<br>";
}
// if gender error is set
if(isset($_GET['errorGD']) && $_GET['errorGD'] != ""){
	$errorGD = '* '.$_GET['errorGD'];
	$allErrors .= $errorGD."<br>";
}
// if dob error is set
if(isset($_GET['errorDB']) && $_GET['errorDB'] != ""){
	$errorDB = '* '.$_GET['errorDB'];
	$allErrors .= $errorDB."<br>";
}
// if nationality error is set
if(isset($_GET['errorNT']) && $_GET['errorNT'] != ""){
	$errorNT = '* '.$_GET['errorNT'];
	$allErrors .= $errorNT."<br>";
}
// if country code error is set
if(isset($_GET['errorCC']) && $_GET['errorCC'] != ""){
	$errorCC = '* '.$_GET['errorCC'];
	$allErrors .= $errorCC."<br>";
}
// if phone number error is set
if(isset($_GET['errorPN']) && $_GET['errorPN'] != ""){
	$errorPN = '* '.$_GET['errorPN'];
	$allErrors .= $errorPN."<br>";
}
// if languages error is set
if(isset($_GET['errorLG']) && $_GET['errorLG'] != ""){
	$errorLG = '* '.$_GET['errorLG'];
	$allErrors .= $errorLG."<br>";
}
// if country error is set
if(isset($_GET['errorCT']) && $_GET['errorCT'] != ""){
	$errorCT = '* '.$_GET['errorCT'];
	$allErrors .= $errorCT."<br>";
}
// if city error is set
if(isset($_GET['errorCY']) && $_GET['errorCY'] != ""){
	$errorCY = '* '.$_GET['errorCY'];
	$allErrors .= $errorCY."<br>";
}
?>
<center><h3 class='mt-3'>Personal Details</h3></center>
<?php if (isset($msg)) {
    echo '<div class="msgdisp">'.$msg.'</div>';
} ?>
<form class="mt-3 pers-det mb-3" action="save_personal_details.php" method="post">
	<div class="row form-group">
		<div class="col-md-6">
			<label for="name">Name:</label>
	    	<input type="text" id="name" name="name" placeholder="Enter your Name"
	    	<?php if(isset($errorNM)) echo "class='red-border form-control'";else echo "class='form-control'";?>>
		</div>
		<div class="col-md-6">
			<label for="surname">Surname:</label>
	    	<input type="text" id="surname" name="surname" placeholder="Enter your Surname"<?php if(isset($errorSM)) echo "class='red-border form-control'";else echo "class='form-control'";?>>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-12">
			<label for="email">Email Address:</label>
			<input class="form-control" type="email" id="email" name="email" <?php echo "value='$email'";?> disabled="email">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-2">
			<label for="gender">Gender:</label>
		</div>
		<div id="gender" <?php if(isset($errorGD)) echo "class='red-border col-md-6'";?>>
			<span>Male <input class="" type="radio" id="male" name="gender" value="male"></span>
			<span>Female <input class="" id="female" type="radio" name="gender" value="female"></span>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<label for="dob">Date Of Birth:</label>
			<input id="date" type="date" name="dob" <?php if(isset($errorDB)) echo "class='red-border form-control'";else echo "class='form-control'";?>>
		</div>

		<div class="col-md-6">
			<label for="nationality">Nationality:</label>
			<select id="nationality" name="nationality"<?php if(isset($errorNT)) echo "class='red-border form-control'";else echo "class='form-control'";?>>
				<?php include('./includes/countries.html') ?>
			</select>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-4">
			<label for="country-code">Country code:</label>
			<input id="country_code" placeholder="Enter your contry code...ex: +257" type="text" name="country-code"<?php if(isset($errorCC)) echo "class='red-border form-control'";else echo "class='form-control'";?>>
		</div>
		<div class="col-md-8">
			<label for="p-number">Phone Number:</label>
			<input id="phone_number" placeholder="Enter your phone number...ex: 70 999 999" type="text" name="p-number"<?php if(isset($errorPN)) echo "class='red-border form-control'";else echo "class='form-control'";?>>
		</div>
	</div>

<!-- 	<div class="row form-group">
		<div class="col-md-8">
			<label for="languages">Languages:</label>
			<input class="form-control" id="languages" placeholder="Enter the languages you speak...ex: kirundi,french" type="text" name="languages">
		</div>
	</div> -->

	<div class="row form-group">
		<div class="col-md-8">
			<label for="languages">Languages:</label>
			<textarea name="languages" cols="10" rows="5" placeholder="Enter a language you speak and hit enter for the following one"<?php if(isset($errorLG)) echo "class='red-border form-control'";else echo "class='form-control'";?>></textarea>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-8">
			<label for="country">Residential Country:</label>
			<select id="country" name="country"<?php if(isset($errorCT)) echo "class='red-border form-control'";else echo "class='form-control'";?>>
				<?php include('./includes/countries.html') ?>
			</select>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-8">
			<label for="town">Residential City:</label>
			<input id="city" placeholder="Enter the CITY where you reside...ex: gitega" type="text" name="city"<?php if(isset($errorCY)) echo "class='red-border form-control'";else echo "class='form-control'";?>>
		</div>
	</div>	
	<?php
        if (isset($error)) {
            echo '<div  class="span-fp-error">* '.$error.'</div>';
        }
        if ($allErrors != "") {
            echo '<div  class="span-fp-error">'.$allErrors.'</div>';
        }
    ?>
	<div class="col-12">
		<input type="submit" name="save" value="Save" class="p-2" <?php if (isset($error) || $allErrors != "") echo "autofocus"; ?> >
	</div>
</form>




