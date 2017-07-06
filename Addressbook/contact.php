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




$sql = "SELECT * FROM information WHERE userId='$userId'";
$result = $conn->query($sql);



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/contact.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Address book</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

            <li><a href="login.html">login</a></li>
            <li><a href="register.html">Registration</a></li>
            <li><a href="information.html">informationinsert</a></li>

            <li><a href="logout.php">logout</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

         
        

        <div class="container">
          <div class="row">
            
                
                <div class="col-md-12">
               
                <div class="table-responsive">

                        
                      <table id="mytable" class="table table-bordred table-striped">
                           
                           <thead>
                           
                           
                           <th>First Name</th>
                            <th>Last Name</th>
                             <th>Email</th>
                             <th>Address</th>
                             <th>Phone No</th>
                              <th>Edit</th>
                              
                               <th>Delete</th>
                           </thead>
            <tbody>
            <?php
              while ($row = $result->fetch_assoc()) {


               /*$sql = "SELECT * FROM user WHERE email='$user'";

                 $result = $conn->query($sql);
                  $row = $result->fetch_assoc();*/

                      
              $id =$row['id'];
              //echo "$id";

                echo '<tr>';
                
                echo '<td>'.$row['firstName'].'</td>';
                echo '<td>'.$row['lastName'].'</td>';
                echo '<td>'.$row['emailAddress'].'</td>';
                echo '<td>'.$row['address'].'</td>';
                echo '<td>'.$row['phoneNumber'].'</td>';
                echo '<td><a href="contactinfoedit.php?id='.$id.'"><button class="btn btn-primary btn-xs" data-title="Edit"><span class="glyphicon glyphicon-pencil"></span></button></span></button></a></td>';
                

               echo '<td><a href="delete.php?id='.$id.'"><button class="btn btn-danger btn-xs" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></span></button></a></td>';



              }
            
         ?>
            
            </tbody>
                
        </table>

        
            <!-- /.modal-content --> 
          </div>
              <!-- /.modal-dialog --> 
            </div>
        
      


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>





























