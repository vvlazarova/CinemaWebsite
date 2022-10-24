<!-- Limelight Cinema 2021-2022
Violeta Lazarova - ec1929702
This is the code for the search bar, it determines if any result has and 
displays the found fils or a message no film found-->

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


  <br>
  <br>
<div class="container-fluid">
   <div class="row">
   <div class="col-md-12 how-img">
   <h3><a href="index.php">Go Back </a></h3> 
    </div>
    </div>

   <div class="row">
   <div class="col-md-12 how-img">
   <p>OR</p>
   </div>
    </div>
    <div class="row">
   <div class="col-md-12 how-img">
     <div class="d-flex justify-content-center h-100">
     <form action="search.php" method="post">
<label><p>Enter your search criteria:</p></label>
<input type="text" name="search_term" placeholder="search for movies" />
<button type="submit" name="go">search</button>
</form>     
</div>
 </div>
 </div>
 <br>
  <br>

<?php
	$connection = mysqli_connect("localhost","HNCWEBMR1","j4H3E40Pb0","HNCWEBMR1")
	or die ("can't connect"); //connect to the mySQL database

//post search criteria from form and store in a variable
$search_term = $_POST['search_term'];
$result1 = "SELECT * FROM cinema WHERE name LIKE'%$search_term%'";
$sql = mysqli_query ($connection , $result1);
$count = mysqli_num_rows ($sql);

if ($count < 1 ) {
echo '<div class="row">';
  echo ' <div class="col-md-12 how-img">';
  echo "<h4 style='color:red;'>Results not found in films</h4>";
  echo "</div>";  
  echo "</div>";  
}
elseif (isset($_POST['search_term']))
{ 
  //search in our database table for our search term
  $row = mysqli_query($connection, "SELECT * FROM cinema WHERE name LIKE'%$search_term%'"); 
  //display the results
  while($result = mysqli_fetch_assoc($row))
  {  
;
echo '<div class="row">';
    echo ' <div class="col-md-12 how-img">';
    echo '<p>';
    echo 'We have availble tickets for:  ';
    echo "<b>";
    echo $result['name'];
    echo "</b>";
    echo "</br>";
    echo 'On: ';
    echo "<b>";
    echo $result['date'];  
    echo "</b>";
    echo "</br>";
    echo 'At: ';
    echo "<b>";
    echo $result['time'];
    echo "</b>";
    echo '<p>';
    echo "</br>";  
    echo "</div>";  
    echo "</div>";  
  }
}

 ?>
   </div>
 


    <!-- Footer -->
    <?php include 'footer.html';?>
      
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
  
      </body>
      </html>
      