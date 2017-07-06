<?php 

session_start();


$servername = "localhost";
$username = "root";
$password = "";
$db_name = "addressbook";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

$firstName = $_REQUEST['firstName'];
$lastName = $_REQUEST['lastName'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$confirmPassword = $_REQUEST['confirmPassword'];


//echo $firstName.' '.$lastName.' '.$email.' '.$password.' '.$confirmPassword.'<br>';

$sql = "INSERT INTO user (firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";

$conn->query($sql);

$_SESSION['email']= $email;

header('Location: contact.php');




?>