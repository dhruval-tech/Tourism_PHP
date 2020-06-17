<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con){
	echo'Connected';
}
else{
	echo'not Connected';
}


mysqli_select_db($con, 'tours');


$uname = $_POST['username'];
$password = $_POST['password'];


$q = "select * from userdb where uname = '$uname' && password = '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);



if($num == 1){
	if( $uname == "dhruval" ){
		header('location:admin.php');
	}
	else{
		$_SESSION['username'] = $uname;
		header('location:Home.php');
	}
	
}
else{
	

	
	header('location:login.php');

}


?>