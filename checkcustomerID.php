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

     $name= $_POST["name"];
     // $sqlName="SELECT name FROM customer WHERE id=$userid";
     // $nameU = mysqli_query($conn, $name);

    
     echo "Name:	".$name. " ";
    
    

    $sql = "SELECT id,name,phone,address
    		FROM customer
    		WHERE  name = '$name'";

    $result = mysqli_query($conn, $sql);

        //code table was here(old)

        if (mysqli_num_rows($result) > 0) {
                echo "<table class='table table-hover'>";

                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Name</th>";
                    echo "<th>Phone</th>";
                    echo "<th>Address</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                while($row = mysqli_fetch_assoc($result)) { // fetch_assoc 
			        // Show the result that get from database
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td>".$row["phone"]."</td>";
                    echo "<td>".$row["address"]."</td>";
                    echo "</tr>";
                }
        } 
        else {
            echo "Not found this user name";

            echo "<table class='table table-hover'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Name</th>";
                    echo "<th>Phone</th>";
                    echo "<th>Address</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";

			        
		}



	mysqli_close($conn);
?>