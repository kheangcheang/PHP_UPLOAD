<!DOCTYPE html>
<html>
<head>
	<title>Upload Form</title>
</head>
<body>
	<form action="moveupload.php" method="post" enctype="multipart/form-data">
		Customer Name: <input type="text" name="custname" required><br><br>
		Customer Photo: <input type="file" name="custphoto" accept="image/*"><br><br>
		<input type="submit" value="Save" name="save">
	</form>
</body>
</html>