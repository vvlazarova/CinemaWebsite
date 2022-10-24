<!-- Limelight Cinema 2021-2022
Violeta Lazarova - ec1929702
This page checks if the username and password are correct 
and determines if you are a junior or adult member-->

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
	
			$user = $_POST['uname'];
			$pass = $_POST['password'];
			$result = "SELECT * FROM users WHERE username = '$user' AND password ='$pass'";
			$sql = mysqli_query ($connection , $result);
            $count = mysqli_num_rows ($sql);
      //takes the user dob from the table
   
      $dob ="SELECT dob FROM users WHERE username = '$user' AND password ='$pass'";
   
      //additional code added here - use of mysqli fetch array
      $result1 =  mysqli_query ($connection, $dob);
      
      while($row = mysqli_fetch_array($result1))
      {
        $dob = $row['dob'];
      }

        list ($year, $month, $day) = explode ("-" , $dob);
        // total amount of second that have passed between UNIX epoch and DOB ;
        $bday = mktime (0, 0, 0, $month, $day, $year);
        
        //time() - total amount of second that have passed between UNIX epoch and now ;
        //total amount of second the user has been on the planet;
        $difference = time() - $bday;
        
        //The number of second the user has been on the planet / by seconds in a year
        $age = floor ($difference / 31556926) ;



// session username 

$results=mysqli_query ($connection,$result);
While ($row= mysqli_fetch_assoc($results))
{
echo $row ['username'];
 session_start();
$_SESSION ['username'] = $row['username'];
}
// end session username 

if ($age >= 18 && $count == 1)
        {
         
            //start session called adultuser
            session_start();
            $_SESSION ['adultuser'] ="allowed";
            //header to redirect to the adult user page
            header("Location:usersession.php");
	
  
        }

        elseif ($count == 1 )
        {
                      //start session called kids
                      session_start();
                      $_SESSION ['kidsuser'] ="kids";
                      //header to redirect to the adult user page
                      header("Location:kids.php");  
        }
else {
    echo '<div class="container pt-5">';
    echo '<div class="row">';
    echo ' <div class="col-md-3 how-img">';
    echo "</div>";
    echo ' <div class="col-md-6 how-img">';
    echo "<h1>Wrong password or username</h1>";
    echo ('<a href="login1.php">');
    echo '<button type="button" class="btn btn-outline-warning btn-lg btn-block"><i class="bi-play"></i> Try again</button></a>'; 
    echo "<br>";
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
      
      