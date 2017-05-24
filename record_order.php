<?php
session_start();
$servername = "my57db-pj.sit.kmutt.ac.th";
$username = "c321259001";
$password = "nayet?eB!55c";
$dbname = "saharuang_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $check = "SELECT id FROM customer WHERE id ='" . $_POST["id"] . "'";


	   $result  = mysqli_query($conn, $check);

		// $num=mysqli_num_rows($result);
    // echo "result".$result;
    // echo "num".$num;

    $strSQL = "UPDATE customer SET sugar = '".$_POST["sugar"]."', molasses = '".$_POST["molasses"]."' WHERE id = '".$_POST["id"]."' ";


    $conn = mysqli_query($conn, $strSQL);
        if($conn){

          echo "Save Done.";
        }else{
          echo "Error Save [".$strSQL."]";
        }

?>
