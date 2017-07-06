<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "addressbook";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);


$id = $_GET['id'];

$sql = "DELETE FROM information WHERE id='$id'";
$conn->query($sql);


header('Location: contact.php');


?>