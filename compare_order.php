<!DOCTYPE html>
<html lang="en">
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Order from custumer</title>

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

    <?php include 'count_product.php'; ?>
      <!--<title>Compare Order</title>-->

      <form action="calculateOrder.php" method="post">
        <h4>
            <center>
          <img src="img/comp.png">
        <hr>
        <?php
                echo "customer name :";
                include 'order_customerlist.php'; ?>
        <br>
        <br>
        sugar :<input type="number" name="o_sugar" value="0" /><br>
        <br>
        molasses :<input type="number" name="o_molasses" value="0" />
        <br>
        <!--<br>
        bagasses :<input type="number" name="o_bagasses" value="0" />
        <br>-->
        <br>
        <input type="submit" name="calculate" value="Calculate" class="btn btn-primary"/>
        <br>
        <br>
        total sugar : <input type='variable' name='sumSugar' value='<?php echo "$sugar_sum";?>'/>
        <br>
        <br>
        total molasses : <input type='variable' name='sumMolasses' value='<?php echo "$molasses_sum";?>'/>
        <br>
        <!--<br>
        total bagasses : <input type='variable' name='sumBagasses' value='<?php echo "$bagasses_sum";?>'/> -->


          </center>
       </form>


</body>


</html>
