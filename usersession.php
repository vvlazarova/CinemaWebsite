<!-- Limelight Cinema 2021-2022
Violeta Lazarova - ec1929702
This is the Adult login page, where you enter as over 18 years old member,
 which allows you to book films, and displays dynamic content films. -->

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
    <link rel="stylesheet" type="text/css" href="css/adult.css" />

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
<?php include 'navbar.php';?>

<?php
	$connection = mysqli_connect("localhost","HNCWEBMR1","j4H3E40Pb0","HNCWEBMR1")
	or die ("can't connect");
    	
			// $user = $_POST['uname'];
			// $pass = $_POST['password'];
			// $result = "SELECT * FROM users WHERE username = '$user' AND password ='$pass'";
			// $sql = mysqli_query ($connection , $result);
            // $count = mysqli_num_rows ($sql);


            
session_start();
if(isset($_SESSION ['adultuser']))

        {

	
        //     echo '<div class="container pt-5">';
        //     echo '<div class="row">';
        //     echo ' <div class="col-md-3 how-img">';
        //     echo "</div>";
        //     echo ' <div class="col-md-6 how-img">';
        //     echo "<h1> Welcome " .  $_SESSION ['username'] . "</h1>";
        //     echo "<hr>";
        //     echo "<br>";
        //     echo "<br>";
        // echo "</div>";
        //     echo ' <div class="col-md-3 how-img">';
        //    echo "</div>";
        //    echo "</div>";
        //    echo "</div>";

           echo '<div class="container-fluid">';
           echo '<div class="row">';
           echo ' <div class="col-md-3 how-img">';
           echo "</div>";
           echo ' <div class="col-md-6 how-img">';
           echo "<br>";
           echo "<br>";
           echo "<br>";
           echo "<h3> Book a film </h3>";
           echo "<br>";
           echo "<br>";
           echo ('<a href="usersession.php#first">');
           echo '<svg id="more-arrows"> ';
           echo '<polygon class="arrow-top" points="37.6,27.9 1.8,1.3 3.3,0 37.6,25.3 71.9,0 73.7,1.3 "/>';
           echo ' <polygon class="arrow-middle" points="37.6,45.8 0.8,18.7 4.4,16.4 37.6,41.2 71.2,16.4 74.5,18.7 "/>';
           echo '<polygon class="arrow-bottom" points="37.6,64 0,36.1 5.1,32.8 37.6,56.8 70.4,32.8 75.5,36.1 "/>';
           echo ' </svg>';
           echo "<br>";
           echo "<br>";
           echo "<br>";
           echo "<br>";
           echo "</div>";
           echo ' <div class="col-md-3 how-img">';
          echo "</div>";
          echo "</div>";
          echo "</div>";
  
          $sql3 = "SELECT * FROM cinema WHERE category ='adult'";
          $result3 = mysqli_query($connection,  $sql3);
          while($row = mysqli_fetch_array($result3, MYSQLI_ASSOC))
   {
    echo '<div class="how-section1" id="first">';
    echo '<div class="row">';
    echo ' <div class="col-md-6 how-img">';
    echo '<div class="video-thumbnail">';
    echo '<a href=' . $row['video'].">";
    echo '<img  class="rounded-circle img-fluid" src="photo/'. $row['img'].'"class="rounded-circle img-fluid" alt=""/></a>';
   echo "</div>";
   echo "</div>";
   echo '<div class="col-md-6">';
      echo "<br>";
     echo " <br>";
          echo "<h4>" .$row['name']. "<h4>" ;
       echo  '<h4 class="subheading">' . $row['director'] . "<br>" .$row['cast'] .$row['genre']. "</h4>" ; 
     echo '<p class="text-muted">' .$row['info'].'</p>';
     echo '<p class="text-muted">' .$row['date']. "/" . $row['time'].'</p>';
     echo'<a  class="btn btn-outline-warning btn-lg btn-block"  href="book.php?id=' . $row['id'] . '">Book</a>
     </div>
     </div>
     </div>';
      
   
   }
  }
  else {
    echo '<div class="container pt-5">';
    echo '<div class="row">';
    echo ' <div class="col-md-3 how-img">';
    echo "</div>";
    echo ' <div class="col-md-6 how-img">';
    echo "<h1>If you are a new customer, you need to <a href='login.html#reg'> create an account</a> before you can place any booking</h1>";
    echo "<i>Or</i>";
    echo ('<a href="login.html">');
    echo '<button type="button" class="btn btn-outline-warning btn-lg btn-block"><i class="bi-play"></i> Login</button></a>'; 
    echo "<br>";
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
      