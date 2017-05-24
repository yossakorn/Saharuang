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

      $total_sugar = mysqli_query($conn,"SELECT SUM(sugar) FROM store");
      $total_molasses = mysqli_query($conn,"SELECT SUM(molasses) FROM store");
      $total_bagasses = mysqli_query($conn,"SELECT SUM(bagasses) FROM store");
      $test1 = mysqli_fetch_array($total_sugar);
      $test2 = mysqli_fetch_array($total_molasses);
      $test3 = mysqli_fetch_array($total_bagasses);
      $sugar_sum = $test1[0]; //400
      $molasses_sum = $test2[0];
      $bagasses_sum = $test3[0];



?>
