<?php
if(!isset($_SESSION["user__email"]))  {
	header("Location:login.php");
}
?>