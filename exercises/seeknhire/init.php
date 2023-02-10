<?php
	include "connection.php";
    include "classes/user.php";

    global $connection;

    session_start();

    $getFromU = new User($connection);

    define("BASE_URL", "http://localhost/kevin,yvan/");

?>