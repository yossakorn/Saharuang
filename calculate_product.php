
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Calculate product</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrapK.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebarK.css" rel="stylesheet" type="text/css" href="css/styleK.css">
    <style type="text/css">

    body {
      background-image:url('img/bgAC.png');
      width: 100%;
      height: 100%;
    }
    h2 {
    position: absolute;
    left: 500px;
    top: 250px;
}

</style>


     <nav id="mainNav" class="navbar navbar-default navbar-fixed-bottom">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <br>
                <br>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">

                    <li>
                        <a href= "History.php"><?php echo $_SESSION[username] ?></a>
                        </li>
                        <li>
                        <a href= "logout.php">Logout</a>
                        </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>






</head>

<body>

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">

                <li style="margin-top: -30px; margin-left:-90px">
                    <a href="Home.html">
                <img src ="img/logo2.png" style="width:300px;">
               </li>
                <li>
                    <a href="Home.html">Home</a>
                </li>
                <li>
                    <a href="customer.html">Customer</a>
                </li>

                <li>
                    <a href="customerlist.html">CustomerList</a>
                </li>
                <li>
                    <a href="checkcustomerID.html">Check customer ID
                    </a>
                </li>
                <li>
                    <a href="compare_order.php">Compare</a>
                </li>
                <li>
                    <a href="calculate_product.php">Calculate Product</a>
                </li>
                <li>
                    <a href="record_order.html">Record Order</a>
                </li>
                <li>
                    <a href="summary.html">Summary Per year</a>
                </li>


            </ul>
        </div>
<div class="container">
<center>
        <img src="img/cal.png">
        <br>
        <p>_______________________________________________________________________________________________________________________</p>
</center>
</div>

<h2>
  <center>
  <form action="calculate_product.php" method="POST">
    <br>
    <img src="img/input.png">
    <br>
    <input name="sugarcane" type="number"/ >
    <input type="submit" name="submit" value="Calculate" class="btn btn-primary"/><br/>
    <br>
    </center>
</form>



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

$sugarcane = $_POST['sugarcane'];


$sugar = 0.1;
$molasses = 0.05;
$bagasses = 0.29;

$r_sugar = $sugarcane * $sugar;
$r_bagasses = $sugarcane * $bagasses;
$r_molasses = $sugarcane * $molasses;

echo "sugar = ".$r_sugar. " kg. "."\n";
echo "\n";
echo "molasses = ".$r_molasses. " kg."."\n";
echo "\n";
echo "bagasses = ".$r_bagasses. " kg.". "\n";
echo "\n";

if(($r_sugar && $r_molasses && $r_bagasses) >0 ){
$strSQL = "INSERT INTO `store`(`lot_sugarcane`, `sugar`, `molasses`, `bagasses`) VALUES
(DEFAULT, '$r_sugar', '$r_bagasses','$r_molasses')";
}
//header("Refresh:0");

$conn = mysqli_query($conn, $strSQL);
    if($conn){

      //echo "Save Done.";

    }else{
      //echo "Error Save [".$strSQL."]";
    }
?>
    </h2>

        </body>

</html>
