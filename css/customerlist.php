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

     $userid= $_POST["id"];
     // $sqlName="SELECT name FROM customer WHERE id=$userid";
     // $nameU = mysqli_query($conn, $name);

    
     echo "userID:	".$userid. " ";
    
    

    $sql = "SELECT id_order,id,sugar,molasses,order_date,price
    		FROM record_order
    		WHERE  id = $userid";

    $result = mysqli_query($conn, $sql);

        //code table was here(old)

        if (mysqli_num_rows($result) > 0) {
                echo "<table class='table table-hover'>";

                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>id_order</th>";
                    echo "<th>id</th>";
                    echo "<th>order_date</th>";
                    echo "<th>sugar(kg.)</th>";
                    echo "<th>molasses(kg.)</th>";
                    echo "<th>price(Bath)</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                while($row = mysqli_fetch_assoc($result)) { // fetch_assoc คือดึง column by ชื่อ column 
					// echo "<table class='table table-hover'>";

			  //       echo "<thead>";
			  //       echo "<tr>";
     //                echo "<th>id_order</th>";
			  //       echo "<th>id</th>";
     //                echo "<th>order_date</th>";
			  //       echo "<th>sugar(kg.)</th>";
			  //       echo "<th>molasses(kg.)</th>";
			  //       echo "<th>price(Bath)</th>";
			  //       echo "</tr>";
			  //       echo "</thead>";
			  //       echo "<tbody>";

			        // Show the result that get from database
                    echo "<tr>";
                    echo "<td>".$row["id_order"]."</td>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["order_date"]."</td>";
                    echo "<td>".$row["sugar"]."</td>";
                    echo "<td>".$row["molasses"]."</td>";
                    echo "<td>".$row["price"]."</td>";
                    echo "</tr>";
                }
        } 
        else {
            echo "Not Found Result";

            echo "<table class='table table-hover'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>id_order</th>";
                    echo "<th>id</th>";
                    echo "<th>order_date</th>";
                    echo "<th>sugar(kg.)</th>";
                    echo "<th>molasses(kg.)</th>";
                    echo "<th>price(Bath)</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";

			        
		}



	mysqli_close($conn);
?>