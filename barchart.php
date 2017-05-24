<?php

 $connect = mysqli_connect("my57db-pj.sit.kmutt.ac.th", "c321259001", "nayet?eB!55c", "saharuang_db");
  $query = "SELECT YEAR(order_date) AS year, SUM(`sugar`) as sugar, SUM(`molasses`) as molasses FROM `record_order`
          GROUP BY year(order_date)";
 $result = mysqli_query($connect, $query);

 //if (mysql_num_rows($result)==0) { echo "<script>alert('PERFORM ACTION')</script> "; }
 ?>
 <!DOCTYPE html>
 <html>
      <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrapK.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebarK.css" rel="stylesheet" type="text/css" href="css/styleK.css">
      <style>
      h3 {text-align:center;}
      .center {
          text-align: center;
      }
      </style>
     <style type="text/css">

    body {
      background-color: #ffffff;
      width: 100%;
      height: 100%;
    }
     </style>
           <title>Barchart</title>
           <script type="text/javascript" src="https://www.google.com/jsapi"></script>
            <script type="text/javascript">
            google.load("visualization", "1", {packages:["corechart"]});
            google.setOnLoadCallback(drawChart);

           function drawChart()
           {
                var data = google.visualization.arrayToDataTable([

                          ['Year', 'Sugar', 'Molasses'],
                          <?php
                          while($row = mysqli_fetch_array($result))
                          {
                              //  echo "['Sugar', ".$row["sugar"]."],";
                              //  echo "['Molasses', ".$row["molasses"]."],";
                              //  echo "['Bagasses', ".$row["bagasses"]."]";
                              echo "['".$row['year']."',".$row['sugar'].",".$row['molasses']."],";

                          }
                          ?>
                     ]);
                     var options = {
                            title: 'Sale'
                      };
                     var chart = new google.visualization.ColumnChart(document.getElementById("columnchart"));
                     chart.draw(data, options);
              }
           </script>
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
    <div class="container-fluid">
        <h3>Summary sales reports each year. </h3> <!-- name -->
          <div id="columnchart" style="width: 1000px; height: 600px;"></div> <!-- name size -->
        </div>
      </body>
 </html>
