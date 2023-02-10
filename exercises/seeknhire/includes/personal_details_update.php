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
// if language error is set
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
if (isset($_POST['save'])) {
	$lg =$_POST['languages'];
	echo "<script> alert($lg)</script>";
}
?>
<center><h3 class='mt-3'>Personal Details Update</h3></center>
<?php if (isset($msg)) {
    echo '<div class="msgdisp">'.$msg.'</div>';
} ?>
<form class="mt-3 pers-det mb-3" action="save_personal_details_update.php"  method="post">
	<div class="row form-group">
		<div class="col-md-6">
			<label for="name">Name:</label>
	    	<input type="text" class="form-control" id="name" name="name" <?php echo "value='$name'";?> disabled="">
		</div>
		<div class="col-md-6">
			<label for="name">Surname:</label>
	    	<input type="text" class="form-control" id="name" name="surname"<?php echo "value='$surname'";?> disabled="">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-12">
			<label for="email">Email Address:</label>
			<input class="form-control" type="email" name="email" <?php echo "value='$email'";?> disabled="">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-2">
			<label for="gender">Gender:</label>
		</div>
		<div class="col-md-6">
			<span>Male <input class="" type="radio" name="gender" value="male" <?php if($gender == 'male') echo "checked";?> disabled></span>
			<span>Female <input class="" ss="" type="radio" name="gender" value="female"<?php if($gender == 'female') echo "checked";?>disabled></span>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<label for="dob">Date Of Birth:</label>
			<input class="form-control" type="text" name="dob" <?php echo "value='$dob'";?>disabled>
		</div>

		<div class="col-md-6">
			<label for="nationality">Nationality:</label>
				<input class="form-control" type="text" placeholder="Enter your nationality...ex:burundi" name="nationality"<?php echo "value='$nationality'";?>disabled>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-4">
			<label for="country-code">Country code:</label>
			<input id="country_code" placeholder="Enter your contry code...ex: +257" type="text" name="country-code"<?php if(isset($errorCC)) echo "class='red-border form-control'";else echo "class='form-control'";?><?php echo "value='$country_code'";?>>
		</div>
		<div class="col-md-8">
			<label for="p-number">Phone Number:</label>
			<input id="phone_number" placeholder="Enter your phone number...ex: 70 999 999" type="text" name="p-number"<?php if(isset($errorPN)) echo "class='red-border form-control'";else echo "class='form-control'";?><?php echo "value='$phone_number'";?>>
		</div>
	</div>
<!-- 	<div class="row form-group">
		<div class="col-md-8">
			<label for="languages">Languages:</label>
			<input class="form-control" placeholder="Enter the languages you speak...ex: kirundi,french" type="text" name="languages"<?php echo "value='$languages'";?>>
			</div>
	</div> -->

	<div class="row form-group">
		<div class="col-md-8">
			<label for="languages">Languages:</label>
			<textarea name="languages" cols="10" rows="5" placeholder="Enter a language you speak and hit enter for the following one"<?php if(isset($errorLG)) echo "class='red-border form-control'";else echo "class='form-control'";?>><?php echo "$languages";?></textarea>
			</div>
	</div>

<!-- 	<div class="row form-group">
		<div class="col-md-8">
			<label for="languages">Languages:</label>
			<div id="my-tag-list" name="languages" <?php if(isset($errorLG)) echo "class='red-border tag-list'";else echo "class='tag-list'";?>></div>
		</div>
	</div> -->
	
	<div class="row form-group">
		<div class="col-md-8">
			<label for="country">Residential Country:</label>
			<select id="country" name="country"<?php if(isset($errorCT)) echo "class='red-border form-control'";else echo "class='form-control'";?>>
				<option <?php echo "value=$country";?>><?php echo $country;?></option>
				<?php include('./includes/countries.html') ?>
			</select>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-8">
			<label for="town">Residential City:</label>
			<input class="form-control" placeholder="Enter the CITY where you reside...ex: gitega" type="text" name="city"<?php if(isset($errorCY)) echo "class='red-border form-control'";else echo "class='form-control'";?><?php echo "value='$city'";?>>
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
<script>
	$(function() {
		// If using Bootstrap 2, be sure to include:
		// Tags.bootstrapVersion = "2";
		$('#my-tag-list').tags({
			// tagData:["boilerplate", "tags"],
			suggestions:["kirundi", "swahili", "french", "english"],
			// excludeList:["not", "these", "words"]
			caseInsensitive:true
		});
	});
</script>