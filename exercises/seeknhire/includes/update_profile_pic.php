<html>
<head>
	
</head>

<body>
	<center>
		<h3 class="mt-5 mb-5">Edit Profile Picture</h3>
	</center>
	<form method="post" enctype="multipart/form-data" action="save_profile_picture.php">
		<center>
			<div class="row col-10 col-sm-12">
				<input class="col-md-9 mb-2" type="file" accept="image/*" name="prof_pic">
				<input class="col-md-3" type="submit" name="upload_pic" value="Upload">
			</div>

			<?php
                if (isset($_GET['error'])) {
                    echo '<div class="span-fp-error">'.$_GET['error'].'</div>';
                }
            ?>
            <?php if (isset($_GET['msg'])) {
    			echo '<div class="msgdisp">'.$_GET['msg'].'</div>';
			} ?>
		</center>
	</form>
</body>

</html>