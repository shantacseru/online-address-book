
<?php
  session_start();


  $servername = "localhost";
  $username = "root";
  $password = "";
  $db_name = "addressbook";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $db_name);

  $userId = $_GET['id'];

  $sql = "SELECT * FROM information WHERE id='$userId'";
  //echo $sql;

  
  $result = $conn->query($sql);

  $_SESSION['ContactId'] = $userId;

  //var_dump($result);

  $row = mysqli_fetch_array($result);

  //var_dump($row);
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
    <link href="css/starter-template.css" rel="stylesheet">

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
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      
    <div>


      <form method="post" action="edit.php">



        <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text" class="form-control" id="first-name" value="<?php echo $row['firstName']; ?>"  name="first-name">
        </div>

        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" class="form-control" id="last-name" value="<?php echo $row['lastName']; ?>"  name="last-name">
        </div>

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" value="<?php echo $row['emailAddress']; ?>"  name="email">
        </div>
        <div class="form-group">
          <label for="address">address</label>
          <input type="address" class="form-control" id="address" value="<?php echo $row['address']; ?>" name="address">
        </div>

        <div class="form-group">
          <label for="phone-number">phone-number</label>
          <input type="phone-number" class="form-control" id="phone-number" value="<?php echo $row['phoneNumber']; ?>"  name="phone-number">
        </div>

        
        <button type="submit" class="btn btn-default">Submit</button>
      </form>

   </div>












    </div><!-- /.container -->


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