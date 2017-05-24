<?php
//session_start();
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


    $userid= $_POST['id'];
    $date = $_POST["date"];
    $sugar = $_POST['sugar'];
    $molasses= $_POST['molasses'];

    $price_sugar = ($sugar*0.22);
    $price_molasses = ($molasses*0.4);
    $price = ($price_sugar + $price_molasses);

    
    $condition = "SELECT id FROM customer WHERE id = $userid";

    $result = mysqli_query($conn, $condition);

    if (mysqli_num_rows($result) > 0){
    	
    	$sql = "INSERT INTO record_order(id, order_date, sugar, molasses,price)
    	VALUES (".$userid.", '".$date."', ".$sugar.",".$molasses.",".$price.")";

    	if(mysqli_query($conn, $sql)){
        
        header("Refresh:0, URL=record_order.html");
        echo '<script>alert("Insert Sucessfully. Total: '.$price.' Baht")</script>';

        exit;
    	}
    }else{
    	header("Refresh:0, URL=record_order.html");     
        echo '<script>alert("Something went wrong. Error: '.mysqli_error($conn).'")</script>';
        exit;
    }

mysqli_close($conn);

?>