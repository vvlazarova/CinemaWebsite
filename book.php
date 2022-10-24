
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

$id_number = $_GET ['id'];

$sql = "SELECT * FROM cinema Where id = '$id_number'";
$result = mysqli_query ($connection,$sql);
$row = mysqli_fetch_array ($result);
//Variable for ticket input from the user "
$tickets = $_POST['tickets'];


//display information about choosen film
echo '<div container-fluid">';
echo '<div class="row">';
echo ' <div class="col-md-6 how-img">';
echo '<img  class="rounded-circle img-fluid" src="photo/'. $row['img'].'"class="rounded-circle img-fluid" alt=""/></a>';
echo '</div>';
echo ' <div class="col-md-4 how-img">';
echo(" <h1> You are about to book tickets for " . $row ["name"] . "</h1> ");
echo ("<p> On " .$row ["date"]. "</p>" );
echo ("<p> At " .$row ["time"]. "</p>" );

$film_name= $row["name"]; // assign choosen film name to virible	
$film_date= $row["date"]; // assign choosen film time to virible	

$film_time= $row["time"]; // assign choosen film date to virible	


?>

    <p>Film name: <?php echo ($film_name); ?> </p>
<form action = 'booked.php' method='post'>
    <input type ="hidden" name ="film_name" value="<?php echo ($film_name); ?>">
    <input type ="hidden" name ="film_time" value="<?php echo ($film_time); ?>">
    <input type ="hidden" name ="film_date" value="<?php echo ($film_date); ?>">

    <lable> <p>How many tickets would you like?: </p></lable>
    <input type="number" name="tickets" id="tickets">
    <br>   <br>
    <button type ="submit"  class="btn btn-outline-warning btn-lg btn-block" >Book now</button>
</form>

</div>
</div>
</div>



    <!-- Footer -->
    <?php include 'footer.html';?>
      
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
  
      </body>
      </html>
      