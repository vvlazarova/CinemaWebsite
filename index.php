<!-- Limelight Cinema 2021-2022
Violeta Lazarova - ec1929702
This is Landing page before login -->


<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Home</title>


        <!-- Bootstrap -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

       <!-- CSS Link -->
    <link rel="stylesheet" type="text/css" href="css/index.css" />

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

    <!-- Carousel -->

    <header>

    
        <div id="carouselExampleIndicators" class="carousel slide my-carousel my-carousel" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('photo/posterstart.jpg')">
    
            </div>
              <div class="carousel-item " style="background-image: url('photo/poster\ smile.jpg')">
    
            </div>
            <div class="carousel-item " style="background-image: url('photo/poster\ space.jpg')">
    
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </header>
    <br>
    <br>
    <br>
    <br>

<!-- Cards Comming Soon Dynamic content-->
<div id= "films" class="container-fluid">
        <div class="row">
            <div class="col-6">
                <h2 class="mb-3">Coming Soon</h2>
                <hr id ="soon">
            </div>
            </div>
            </div>
<div class="container-fluid">
    <div class="row">
    <?php 
 // Create connection
 $connection = mysqli_connect("localhost","HNCWEBMR1","j4H3E40Pb0","HNCWEBMR1");
$sql = "SELECT * FROM cinema WHERE category2 ='Coming Soon'";
$result = mysqli_query($connection,  $sql)
or die ("couldn't run query");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
 {
  echo    '<div class="col-md-4">';
   echo '<br>';
   echo '<br>' ;
    echo    '<div class="card">';
      echo      '<div class="video-thumbnail">';
      echo '<a href=' . $row['video'].">";
      echo '<img  class="rounded-circle img-fluid" src="photo/'. $row['img'].'"class="rounded-circle img-fluid" alt=""/></a>';
      echo       '</div>';
    echo '<div class="card-body">';
     echo  '<h3 class="card-title">' . $row['name']. "</h3>";
     echo   '<a href="login1.php"><h6>Login to book</h6></a>';
    echo  '<p class="card-text">'. $row['info']. "</p>";
    echo '</div>';
    echo '</div>';
    echo '</div>'; 
    }
    ?>
</div>
</div>

<!-- Cards Watch Now Dynamic content-->
<div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <h2 class="mb-3">Watch Now</h2>
                <hr id="watch">
            </div>
            </div>
            </div>
<div class="container-fluid">
    <div class="row">
    <?php 
 // Create connection
 $connection = mysqli_connect("localhost","HNCWEBMR1","j4H3E40Pb0","HNCWEBMR1");
$sql = "SELECT * FROM cinema WHERE category ='adult'";
$result = mysqli_query($connection,  $sql)
or die ("couldn't run query");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
 {
  echo    '<div class="col-md-4">';
   echo '<br>';
   echo '<br>' ;
    echo    '<div class="card">';
      echo      '<div class="video-thumbnail">';
      echo '<a href=' . $row['video'].">";
      echo '<img  class="rounded-circle img-fluid" src="photo/'. $row['img'].'"class="rounded-circle img-fluid" alt=""/></a>';
      echo       '</div>';
    echo '<div class="card-body">';
     echo  '<h3 class="card-title">' . $row['name']. "</h3>";
     echo   '<a href="login.html"><h6>Login to book</h6></a>';
    echo  '<p class="card-text">'. $row['info']. "</p>";
    echo '</div>';
    echo '</div>';
    echo '</div>'; 
    }
    ?>
    </div>
</div>

<!-- Cards Kids Dynamic content-->
<div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <h2 class="mb-3">Kids</h2>
                <hr id="kids">
            </div>
            </div>
            </div>
<div class="container-fluid">
    <div class="row">
    <?php 
 // Create connection
 $connection = mysqli_connect("localhost","HNCWEBMR1","j4H3E40Pb0","HNCWEBMR1");
$sql = "SELECT * FROM cinema WHERE category ='kids'";
$result = mysqli_query($connection,  $sql)
or die ("couldn't run query");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
 {
  echo    '<div class="col-md-4">';
   echo '<br>';
   echo '<br>' ;
    echo    '<div class="card">';
      echo      '<div class="video-thumbnail">';
      echo '<a href=' . $row['video'].">";
      echo '<img  class="rounded-circle img-fluid" src="photo/'. $row['img'].'"class="rounded-circle img-fluid" alt=""/></a>';
      echo       '</div>';
    echo '<div class="card-body">';
     echo  '<h3 class="card-title">' . $row['name']. "</h3>";
     echo   '<a href="login.html"><h6>Login to book</h6></a>';
    echo  '<p class="card-text">'. $row['info']. "</p>";
    echo '</div>';
    echo '</div>';
    echo '</div>'; 
    }
    ?>
</div>
</div>


<!-- Footer -->
<?php include 'footer.html';?>

    
<!-- script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    </body>
    </html>
    
    