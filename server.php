<?php 

	//insert data into the database
session_start();

$name = "";
$email = "";
$password = "";
$id = 0;

$db = mysqli_connect('localhost', 'root', '', 'login');

//if save button is clicked
if(isset($_POST['save'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	//Inserting code
	$query = "INSERT INTO logintable(name, email, password) VALUES('$name', '$email', 'password')";

	mysqli_query($db, $query);

	$_SESSION['msg'] = "login Saved";
	header('location: login.php'); //redirect to login after inserting

}

//retrieve records
$results = mysqli_query($db, "SELECT * FROM logintable");
?>