
<!-- Limelight Cinema 2021-2022
Violeta Lazarova - ec1929702
This is an E-Ticket page, where you see how many tickets you have booked and can print the page -->

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

<!-- Navbar -->
<?php include 'navbar.php';?>

<?php
//logic behindorder processing and stock updating
$connection = mysqli_connect("localhost","HNCWEBMR1","j4H3E40Pb0","HNCWEBMR1")
or die ("can't connect");

$film_name = $_POST ['film_name'];

$film_time = $_POST ['film_time'];

$film_name = $_POST ['film_name'];
//Variable for ticket input from the user "
$tickets = $_POST ['tickets'];

session_start();

$username = $_SESSION ['username'];

$sql = "SELECT * FROM cinema Where name = '$film_name'";
$result = mysqli_query ($connection,$sql);
$row = mysqli_fetch_array ($result);

$newstock = $row ["tickets"]- $tickets;
// echo  $row ["tickets"];
// echo '<br>';
// echo  $tickets;
// echo '<br>';
// echo  $newstock;

if ($row ["tickets"] > $tickets) {

    $sql1 ="UPDATE cinema SET tickets = '$newstock' Where name = '$film_name'";
    $result2 = mysqli_query ($connection,$sql1);

    echo   '<br>';
    echo '<div class="container pt-5">';
echo '<div class="row">';
echo ' <div class="col-md-12 how-img">';
echo ('<h1> ' .$username  . ' you have booked ' .$tickets . ' tickets for ' . $film_name. "</h1>");

// echo ('<h1>On ' .$film_date. " At :". $film_time. "</h1>");
echo '<hr>';
echo ' <img class="logo" src="logo.gif" alt="Tito Sport">';
echo '<br><br><br><button class="btn2" onclick="display()">Print Ticket</button>
<script>
   function display() {
      window.print();
   }
</script>';
echo '</div>';
echo '</div>';
echo '</div>';
}

else
{
    echo '<div class="container pt-5">';
    echo '<div class="row">';
    echo ' <div class="col-md-12 how-img">';
	echo '<h2>Not enough tickets available</h2>';
    echo '</div>';
echo '</div>';
echo '</div>';
}

?>



 <!-- Footer -->
 <?php include 'footer.html';?>
      
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
  
      </body>
      </html>
      