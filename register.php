<!-- Limelight Cinema 2021-2022
Violeta Lazarova - ec1929702
This is Navbar code to show kids, adult,s and non-member different views -->


<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Login</title>


        <!-- Bootstrap -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

       <!-- CSS Link -->
    <link rel="stylesheet" type="text/css" href="css/welcome.css" />

    <!-- Icons-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- script-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--Font Awesome 5 Icons -->
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>

<!-- Navbar-->

<?php include 'navbar.php';?>


<?php
	
	$connection = mysqli_connect("localhost","HNCWEBMR1","j4H3E40Pb0","HNCWEBMR1")
	or die ("can't connect");
	
			$email = $_POST['signupemail'];
            $uname = $_POST['signupusername'];
            $dob = $_POST['date'];
            $pass = $_POST['signuppassword'];
			$pass2 = $_POST['signupcpassword'];

$result = "SELECT * FROM users WHERE username = '$uname'";
$sql = mysqli_query ($connection , $result);
if (mysqli_num_rows ($sql) >0)
{    
    echo '<div class="container pt-5">';
    echo '<div class="row">';
    echo ' <div class="col-md-3 how-img">';
    echo "</div>";
    echo ' <div class="col-md-6 how-img">';
    echo "<h1>Username already exists</h1>";
    echo '<hr>';
    echo ('<a href="login1.php">');
    echo '<button class= "btn2" type="button" class="btn btn-secondary btn-lg btn-block">Try again</button></a>';
    echo "</div>";
    echo ' <div class="col-md-3 how-img">';
   echo "</div>";
   echo "</div>";
   echo "</div>";
  
}
elseif ($pass !== $pass2) {
 

   echo '<div class="container pt-5">';
   echo '<div class="row">';
   echo ' <div class="col-md-3 how-img">';
   echo "</div>";
   echo ' <div class="col-md-6 how-img">';
   echo "<h2>The password doesn't match</h2>";
   echo '<hr>';
   echo ('<a href="login1.php">');
   echo '<button class= "btn2" type="button" class="btn btn-secondary btn-lg btn-block">Try again</button></a>';
   echo "</div>";
   echo ' <div class="col-md-3 how-img">';
  echo "</div>";
  echo "</div>";
  echo "</div>";
} 
else  
{
    mysqli_query ($connection, "INSERT INTO users (email, username, dob, password, password2 )
	VALUES ('$email', '$uname', '$dob', '$pass', '$pass2')");
   echo '<div class="container pt-5">';
   echo '<div class="row">';
   echo ' <div class="col-md-3 how-img">';
   echo "</div>";
   echo ' <div class="col-md-6 how-img">';
   echo ('<h1> You have successfully registered </h1> <br>');
   echo ('<a href="login1.php">');
   echo '<button class= "btn2" type="button" class="btn btn-secondary btn-lg btn-block">Login to continue</button></a>';
  echo "</div>";
   echo "</div>";
   echo ' <div class="col-md-3 how-img">';
  echo "</div>";
  echo "</div>";
  echo "</div>";
}
?>


    <!-- Footer -->
    <?php include 'footer.html';?>
      
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
  
      </body>
      </html>
      
      