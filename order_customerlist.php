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

$sql = "SELECT id, name FROM customer";
$result = $conn->query($sql);
echo "<select name='customerList'>";
          while ($row = $result->fetch_assoc()) {
            echo "<option value=" . $row['id']. ">" . $row['name']. "</option>";
          }
          echo "</select>";
?>
