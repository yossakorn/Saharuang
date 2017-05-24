<?php

$host = 'my57db-pj.sit.kmutt.ac.th';
$user = 'c321259001';
$pass = 'nayet?eB!55c';
$database = 'saharuang_db';
$conn = mysqli_connect($host, $user, $pass, $database);
if(!$conn){
			die("Error : DB " . mysqli_connect_error());
		}else {
			echo "DB is connect";
		}

		mysqli_close($conn);

?>
