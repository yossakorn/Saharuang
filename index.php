<?php
		session_start();
		require_once("config.php");

		// Create connection
		$con = mysqli_connect($host, $user, $pass, $database);
		$username = $_POST["txtUsername"];
		$password = $_POST["txtPassword"];

		$sql = "SELECT * FROM admin WHERE username = '".$username."' AND password = '".$password."'";
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0){



            $result = mysqli_fetch_assoc($result);

			$_SESSION["username"] = $result["username"];
			$_SESSION['logged_in'] = true;
			//echo "<br> <a href='main.html'>next</a> ";

			header("Refresh:0, URL=customer.html");
			echo '<script>alert("Login successful"  )</script>' ;
		}else{
			header("Refresh:0, URL=index.html");

			echo '<script>alert("Login Unsuccessful"  )</script>' ;

			}



		mysqli_close($con);
	?>
