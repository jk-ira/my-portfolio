<?php
include "init.php";
include "security_company.php";
echo "company<br>";
echo $_SESSION['company__email'];

if (isset($_POST['logout'])) {
	$getFromU->logout();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<button type="submit" name="logout">Logout</button>
	</form>
</body>
</html>