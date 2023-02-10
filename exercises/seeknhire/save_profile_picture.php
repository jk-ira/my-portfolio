<?php

include('./init.php');
	//email from session
	$email = $_SESSION['user__email'];
	

if (isset($_POST['upload_pic'])) {
	// $file_name = $email." ".$_FILES['prof_pic']['name'];
	$file_name = $_FILES['prof_pic']['name'];
	$file_tmp = $_FILES['prof_pic']['tmp_name'];

	$target_direction = "img/profile/";
	$target_file = $target_direction.basename($_FILES['prof_pic']['name']);

	if ($file_name != "") {
		//CHECK IF IT IS AN IMAGE
		$img_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		//if not image
		if ($img_type !== "jpg" && $img_type !== "png" && $img_type !== "jpeg" && $img_type !== "gif") {
			$error = "Sorry only JPG, JPEG, PNG and GIF files are allowed";
			header('location:./home_u.php?curr=profile_pic&error='.$error.'');
		}else{
			//if image
			if($getFromU->upload_profile_picture($file_name,$file_tmp,$target_file,$email,$connection) == 1)
			{
				$msg = "Profile picture uploaded successfully";
				header('location:./home_u.php?curr=profile_pic&msg='.$msg.'');
			}
			if($getFromU->upload_profile_picture($file_name,$file_tmp,$target_file,$email,$connection) == 0)
			{
				$error = "Error Occured. Please try again later.";
				header('location:./home_u.php?curr=profile_pic&error='.$error.'');
			}
			if($getFromU->upload_profile_picture($file_name,$file_tmp,$target_file,$email,$connection) == 2)
			{
				$error2 = "Error Occured while uploading the image.";
				header('location:./home_u.php?curr=profile_pic&error='.$error2.'');
			}
		}
	
	}
	else{
		$error = "No image was selected!";
		header('location:./home_u.php?curr=profile_pic&error='.$error.'');
	}
	

}else{
	header('location:./home_u.php?curr=profile_pic');
}
?>