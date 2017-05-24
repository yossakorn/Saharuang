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

 $sugarAmt = (isset($_POST['o_sugar']) ? $_POST['o_sugar'] : 0) ;
 $molassesAmt = (isset($_POST['o_molasses']) ? $_POST['o_molasses'] : 0) ;
// $bagassesAmt = (isset($_POST['o_bagasses']) ? $_POST['o_bagasses'] : 0) ;
 $sugarSum = (isset($_POST['sumSugar']) ? $_POST['sumSugar'] : 0) ;
 $molassesSum = (isset($_POST['sumMolasses']) ? $_POST['sumMolasses'] : 0) ;
// $bagassesSum = (isset($_POST['sumBagasses']) ? $_POST['sumBagasses'] : 0) ;
 $customerId = (isset($_POST['customerList']) ? $_POST['customerList'] : 0);

 if($sugarAmt > $sugarSum || $molassesAmt > $molassesSum){
      echo "<script>";
      echo "alert('Products are not enough !')";
      echo "</script>";
      header("Refresh:0; url=compare_order.php");
} else if($sugarAmt > 0 || $molassesAmt > 0){
  $sql = "INSERT INTO record_order (id_order, id, sugar, molasses, order_date, price) VALUES (DEFAULT, " .$customerId. ", " . $sugarAmt . ", " . $molassesAmt . ", CURRENT_DATE,NULL);";
  $conn->query($sql);
  $sql3 = "SELECT lot_sugarcane, sugar, bagasses FROM store;";
  $result = $conn->query($sql3);
  while ($row = $result->fetch_assoc()) {
    if($sugarAmt > 0 || $molassesAmt > 0 || $bagassesAmt > 0){
      if($row['sugar'] > 0 && $sugarAmt > 0){
        $amt = 0;
        if($row['sugar'] > $sugarAmt){
          $amt = $row['sugar'] - $sugarAmt;
          $sugarAmt = 0;
        } else {
          $sugarAmt = $sugarAmt -  $row['sugar'];
        }
        $sql2 = "UPDATE store SET sugar = " . $amt . " WHERE lot_sugarcane = " . $row['lot_sugarcane'] . ";";
        echo $sql2;
        mysqli_query($conn, $sql2);
      }
      //------------------------------------------------------------------------------------
      if($row['molasses'] > 0 && $molassesAmt > 0){
        $amt = 0;
        if($row['molasses'] > $molassesAmt){
          $amt = $row['molasses'] - $molassesAmt;
          $molassesAmt = 0;
        } else {
          $molassesAmt = $molassesAmt -  $row['molasses'];
        }
        $sql2 = "UPDATE store SET molasses = " . $amt . " WHERE lot_sugarcane = " . $row['lot_sugarcane'] . ";";
        mysqli_query($conn, $sql2);
      }
      //------------------------------------------------------------------------------------
    
    }
     echo "<script>";
     echo "alert('Success !')";
     echo "</script>";
     header("Refresh:0; url=compare_order.php");
     break;
   }
 } else {
     header("Refresh:0; url=compare_order.php");
 }

?>
