<?php 
	$con  = mysqli_connect("localhost","root","12345","angular_db");
	// Check connection
	if (!$con) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	//Query String
	$query = "SELECT * FROM customers";
	$execute = mysqli_query($con,$query);
	if($execute){
		while($row = mysqli_fetch_object($execute)){
			echo "CustID: ".$row->CustId."<br>";
			echo "Cust Name: ".$row->CustName."<br>";
			echo "Photo: <img width='100px' src='img/".$row->CustPhoto."'><br><hr>";
		}

	}
?>