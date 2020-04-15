<?php 
	$con  = mysqli_connect("localhost","root","12345","angular_db");
	// Check connection
	if (!$con) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	//submit form
	if(isset($_POST["save"])){
		$NewFileName =null;
		$fileTemp = "";
	    if(!empty($_FILES['custphoto']['name'])){
	        $file = $_FILES['custphoto']['name'];
	        $fileTemp = $_FILES['custphoto']['tmp_name'];
	        $imgExt = strtolower(pathinfo($file,PATHINFO_EXTENSION));
	        $NewFileName = "cust_photo_".rand(1,1000000).".".$imgExt;
	    }
	    //query string
	    $query = "INSERT INTO customers VALUES(NULL,'".$_POST["custname"]."','".$NewFileName."')";
	    //upload photo
	    if($fileTemp!="")
	    {
	    	if(move_uploaded_file($fileTemp, "img/".$NewFileName))
	    		mysqli_query($con,$query);
	    }
		else{
			mysqli_query($con,$query);
		}
		
		//redirect 
		header("location: form.php");
	}
 ?>