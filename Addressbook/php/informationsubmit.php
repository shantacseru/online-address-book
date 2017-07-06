<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "addressbook";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);


$user=$_SESSION['email'];

$sql = "SELECT * FROM user WHERE email='$user'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

$userId = $row['id'];




$firstName = $_REQUEST['firstName'];
$lastName = $_REQUEST['lastName'];
$emailAddress = $_REQUEST['email'];
$address = $_REQUEST['address'];
$phoneNumber = $_REQUEST['phone-number'];


//echo $firstName.' '.$lastName.' '.$email.' '.$password.' '.$confirmPassword.'<br>';

$sql = "INSERT INTO information (userId, firstName, lastName, emailAddress, address,phoneNumber) VALUES ('$userId','$firstName', '$lastName', '$emailAddress', '$address','$phoneNumber')";

   //echo $sql;

$conn->query($sql);

header("Location: ../contact.php");

?>