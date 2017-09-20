

<!DOCTYPE html>
<html>
<head>
	<title>Image Upload</title>
	<style type="text/css">
		#content{
			width: 50%;
			margin: 20px auto;
			border: 1px solid #cbcbcb;
		}
		form{
			width: 50%;
			margin: 20px auto;
		}
		form div{
			margin-top: 5px;
		}
		#img_div{
			width: 80%;
			padding: 5px;
			margin: 15px auto;
			border: 1px solid #cbcbcb;
		}
		#img_div:after{
			content: "";
			display: block;
			clear: both;
		}
		img{
			float: left;
			margin: 5px;
			width: 300px;
			height: 140px;
		}
	</style>
</head>
<body>
<div class="content">

	<form method="POST" action="{{ URL::to('upload') }}" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" value="upload" name="submit">
        <input type="hidden" value="{{ csrf_field() }}" name="_token">
	</form>
</div>
</body>
</html>

 <?php
//	$db = mysqli_connect("localhost", "root", "", "artikelen");
//	$msg = "test";

//	if (isset($_POST['upload'])) {
//		$target = "images/".basename($_FILES['image']['name']);


//		$image = $_FILES['image']['name'];
//		$text = mysqli_real_escape_string($db, $_POST['text']);


//		$sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
//		mysqli_query($db, $sql);

//		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
//			$msg = "Image uploaded successfully";
//		}else{
//			$msg = "Failed to upload image";
//		}
//	}

//	$result = mysqli_query($db, "SELECT * FROM atikelen");
?>