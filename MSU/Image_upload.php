<?php
 
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$p_name = $_POST['p_name'];
	$folder = "./lecturers/" . $filename;

	$db = mysqli_connect("127.0.0.1", "root", "12345678", "puttiphat");

	// Get all the submitted data from the form
	$sql = "INSERT INTO lecturers (filename, p_name) VALUES ('$filename','$p_name')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> เพิ่มภาพอาจารย์เรียบร้อยแล้ว!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Image Upload</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div id="content">
		<form method="POST" action="" enctype="multipart/form-data">
			<div class="form-group">
				<input class="form-control" type="file" name="uploadfile" value="" />
			</div>
            
             <div class="form-group">
                <label>ชื่ออาจารย์:</label>
                <input type="text" class="form-control" name="p_name" required/>
            </div>
            
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
			</div>
		</form>
	</div>
	<div id="display-image">
		<?php
		$query = " select * from lecturers ";
		$result = mysqli_query($db, $query);

		while ($data = mysqli_fetch_assoc($result)) {
		?>
			<img src="./lecturers/<?php echo $data['filename']; ?>">

		<?php
		}
		?>
	</div>
</body>

</html>