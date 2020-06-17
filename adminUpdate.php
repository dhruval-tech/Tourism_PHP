<?php

$con = mysqli_connect('localhost','root');
if($con){
	echo'Connected';
}
else{
	echo'not Connected';
}


mysqli_select_db($con, 'tours');



//$qy = "insert into places(name,description,price,img) values ('$name', '$desc', '$price', '$img' ) "; 
	//mysqli_query($con, $qy);
	//header('location:admin.php');



 $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$name = $_POST['name'];
	$desc = $_POST['desc'];
	$price = $_POST['price'];

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO places (name, description, price, image) VALUES ('$name','$desc','$price','$image')";
  	// execute query
  	mysqli_query($con, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

  	header('location:admin.php');
  }


  

?>