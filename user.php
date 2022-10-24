
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
	$connection = mysqli_connect("localhost","HNCWEBMR1","j4H3E40Pb0","HNCWEBMR1")
	or die ("can't connect");

    ?>
    </b></span></a>

                    <span class="vl"></span> <a  href="logout.php"  data-target="#login-modal" data-abc="true"><span class="login"><b>Logout</b></span></a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <nav class="navbar navbar-expand-md navbar-main ">
            <div class="container-fluid">
                <form class="d-md-none my-2">
                    <div class="input-group"> <input type="search" name="search" class="form-control" placeholder="Search" required="">
                        <div class="input-group-append"> <button type="submit" class="btn2"> <i class="fa fa-search"></i> </button> </div>
                    </div>
                </form> <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#dropdown6" aria-expanded="false"> <span class="navbar-toggler-icon"></span> </button>
                <div class="navbar-collapse collapse" id="dropdown6" >
                    <ul class="navbar-nav mr-auto">
                        <li  class="nav-item "> <a class="nav-link active" href="indexx.html#carouselExampleIndicators1" data-abc="true">Account&nbsp;&nbsp;</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="" data-abc="true"><b>Game</b>&nbsp;&nbsp;</a> </li>
                        <li class="nav-item active_nav"> <a class="nav-link" href="login.php#first" data-abc="true">Films&nbsp;&nbsp;</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="login.php#two" data-abc="true">Contact us&nbsp;&nbsp;</a> </li>
                    </ul>
                </div>
            </div>
        </nav>
        
    </header>
     <br>
     <br>
     <br>
<?php

$connection = mysqli_connect("localhost","HNCWEBMR1","j4H3E40Pb0","HNCWEBMR1")
or die ("can't connect");

$id_number = $_GET ['id'];

$sql = "SELECT * FROM users Where id = '$id_number'";
$result = mysqli_query ($connection,$sql);
$row = mysqli_fetch_array ($result);

//display information about choosen film
echo '<div container-fluid">';
echo '<div class="row">';
echo ' <div class="col-md-6 how-img">';
echo '</div>';
echo ' <div class="col-md-4 how-img">';
echo(" <h1> Dalete " . $row ["username"] . " account </h1> ");
echo ("<p> With Email " .$row ["email"]. "</p>" );
echo ("<p> Data of Birght " .$row ["dob"]. "</p>" );

$film_name= $row["name"]; // assign choosen film name to virible	

?>

    <p>Film name: <?php echo ($film_name); ?> </p>
<form action = 'booked.php' method='post'>
    <input type ="hidden" name ="film_name" value="<?php echo ($film_name); ?>">
    <lable> <p>How many tickets would you like?: </p></lable>
    <input type="number" name="tickets">
    <br>
    <button type ="submit" class="btn2" >Book now</button>
</form>

</div>
</div>
</div>



    <!-- Footer -->
    <footer class="footer">
    <hr>
    <br>
      <div class="container">
          <div class="row">
              <div class="col-md-5">
                  <a class="navbar-brand" href="index.html">
                      <img src="LOGO2.gif" width="80" height="55" alt="logo" /><br></a>
                  <div class="row">
                      <div class="col-6">
                        
                            <p> <a href="about.html#aboutme">Admin Area</a></p>
                            <p>  <a href="https://www.termsfeed.com/live/204729a2-cca1-468d-9f50-20d28c54fdf4">Privacy policy</a></li></p>
                            <p>   <a href="https://www.termsandconditionsgenerator.com/live.php?token=cdNffv7lZWkaQIWcriZkfI5XO8CIONPg">Terms & Conditions</a></li></p>
                          
                           
                      </div>
                      <div class="col-6">
                          <ul class="list-unstyled">
                             <p><a href="training.html#activity">Facebook&nbsp;<img src="facebook1.png" width="25" height="25" alt="logo" /></a></p>
                             <p><a href="training.html#activity">Tweeter&nbsp;&nbsp;&nbsp; <img src="tweeter.png" width="25" height="25" alt="logo" /></a></p>
                             <p><a href="training.html#activity">Instegram <img src="instegram.png" width="25" height="25" alt="logo" /></a></p>
                          </ul>
                         
                      </div>
                  </div>
                    
                  <br>
              </div>
              <div class="col-md-2">
                  <h5 class="text-md-right">Contact Us</h5>
                  <hr id="two">
              </div>
              <div class="col-md-5">
                <form action="mail1.php" method="POST" >
                  <fieldset class="form-group">
                      <input type="email" name="email" class="form-control" id="InputEmail" title="input email" placeholder="Enter email" required>
                  </fieldset>
                  <fieldset class="form-group">
                      <textarea name="messagebody" class="form-control" id="exampleMessage"  title="input message"  placeholder="Message" required></textarea>
                     
                  </fieldset>
                  <fieldset class="form-group">
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" required>
                        <label class="form-check-label" for="gridCheck">
                          I agree to the terms & conditions
                        </label>
                        </div>
                        </div>
                        </fieldset>
                  <fieldset class="form-group text-xs-right">
                     <div><input type="submit" class="btn1" value="Send"> </div>
                  </fieldset>
              </form>
              
          </div>
           <div class="col-md-5">
           <small>© Copyright 2021 - Violeta Lazarova All rights reserved.</small>
                 
              </div>
              
          </div >
      </div>
    </footer>
      
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
  
      </body>
      </html>
      