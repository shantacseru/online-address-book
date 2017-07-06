<?php
	session_start();

	//include 'php/connection.php';
	
 
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "addressbook";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);


$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

//$data['email'] = $email;
//$data['password'] = $password;







	//$email = $_REQUEST['email'];
	//$password = $_REQUEST['password'];

	
	$sql = "SELECT * FROM user WHERE email='$email'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	$testEmail = $row['email'];
	$testPassword = $row['password'];

	if($email == $testEmail && $password == $testPassword)
	{
		$_SESSION['email'] = $email;
		header('Location: contact.php');
	}

else
{
   echo "YOU R NOT REGISTERED..THANKUU";

}

	
	

	//header('Location: contact.php');

?>