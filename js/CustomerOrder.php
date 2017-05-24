<?php
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

    $sql = "SELECT username FROM users WHERE username ='" . $_POST["id"] . "'";
    $id = mysqli_real_escape_string($conn, $_REQUEST['inputID']);
    $name = mysqli_real_escape_string($conn, $_REQUEST['inputName']);
    $phone = mysqli_real_escape_string($conn, $_REQUEST['inputPhone']);
    $address = mysqli_real_escape_string($conn, $_REQUEST['inputAddress']);
    $order_cus = mysqli_real_escape_string($conn, $_REQUEST['inputOrder']);

    $sql = "INSERT INTO customer_order (id, name, phone, address, order_cus) VALUES ('".$_POST["id"]"', '".$_POST["name"]."', '".$_POST["phone"]."', '".$_POST["address"]."', '".$_POST["order_cus"]."')";

   if(mysqli_query($conn, $sql)){
       echo "Records added successfully.";
   } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
   }
 
    // close connection
    mysqli_close($conn);
    
?>