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
      <style>
      h3 {text-align:center;}
      .center {
          text-align: center;
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
      </head>
      <body>
        <h3>Summary sales reports each year. </h3> <!-- name -->
          <div id="columnchart" style="width: 1000px; height: 600px;"></div> <!-- name size -->
      </body>
 </html>
