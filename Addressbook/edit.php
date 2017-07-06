<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "addressbook";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

 //$id = $_GET['id'];


$firstName = $_REQUEST['first-name'];
$lastName = $_REQUEST['last-name'];
$emailAddress = $_REQUEST['email'];
$address = $_REQUEST['address'];
$phoneNumber = $_REQUEST['phone-number'];

$id =  $_SESSION['ContactId'] ;



//echo "$firstName";


$sql = "UPDATE information SET firstName='$firstName',lastName='$lastName', emailAddress='$emailAddress', address='$address', phoneNumber='$phoneNumber' WHERE id='$id'";

		//echo $sql;
	$conn->query($sql);


header("Location: contact.php");



?>


