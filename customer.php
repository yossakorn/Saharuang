<?php
// conncetion to db
require_once("config.php");
    // Create connection
    $conn = new mysqli($host, $user, $pass, $database);
    //check name
    $check = "SELECT name
              FROM customer
              WHERE  name = '".$_POST["name"]."'";
    $result = mysqli_query($conn, $check);
          if(mysqli_num_rows($result) > 0)
          {
                header("Refresh:0, URL=customer.html");
                echo '<script>alert("Already named!!!")</script>';
      }else{
    // add information
    $sql = "INSERT INTO customer (id, name, phone, address)
            VALUES (DEFAULT, '".$_POST["name"]."', '".$_POST["phone"]."', '".$_POST["address"]."')";


   if($conn->query($sql)){
     	 header("Refresh:0, URL=customer.html");
       echo '<script>alert("Records added successfully.")</script>';
   } else{
        header("Refresh:0, URL=customer.html");
        echo '<script>alert("Records Error!!!")</script>';
        echo $sql;
   }
 }
?>
