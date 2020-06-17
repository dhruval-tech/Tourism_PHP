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

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$uname = $_POST['username'];
$password = $_POST['password1'];
$email = $_POST['email'];

$q = "select * from userdb where uname = '$uname' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){

	echo 'duplicate username ';
	header('location: registration.php');
	
}
else{
	echo'Connected';

	$qy = "insert into userdb(fname,lname,uname,password,email) values ('$fname', '$lname', '$uname', '$password', '$email') "; 
	mysqli_query($con, $qy);
	header('location:login.php');

}


?>