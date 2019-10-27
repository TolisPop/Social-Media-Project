<?php

error_reporting(0);

$db_name = "id8859865_utopiaapp";
$mysql_user = "id8859865_apostolis";
$mysql_pass = "apostolis1";
$server_name = "localhost";

$con = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);

if(!$con){
	echo '{"message":"Unable to connect to the database."}';
}

?>