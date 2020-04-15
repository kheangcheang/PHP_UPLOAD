<?php 
	$con  = mysqli_connect("localhost","root","12345","angular_db");
	// Check connection
	if (!$con) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	//submit form
	if(isset($_POST["save"])){
		$fileTemp = null;
	    if(!empty($_FILES['custphoto']['name'])){
	        $fileTemp = addslashes(file_get_contents($_FILES['custphoto']['tmp_name']));
	    }
	    //query string
	    $query = "INSERT INTO customers2 VALUES(NULL,'".$_POST["custname"]."','".$fileTemp."')";
	    //upload photo
	    if(!mysqli_query($con,$query))
	    {
	    	die("Query String Error...".mysqli_error($con));
	    }

		
		//redirect 
		header("location: form.php");
	}
 ?>