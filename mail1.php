<!-- Limelight Cinema 2021-2022
Violeta Lazarova - ec1929702
This page is connected to the contact form in the
footer gives feedback when a message is sent and sends 
the message to the appropriate email.-->

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
    <link rel="stylesheet" type="text/css" href="css/contact.css" />

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
    <header class="section-header">
        <section class="header-main ">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-sm-4 col-md-4 col-5"> <a href="index.php" class="brand-wrap" data-abc="true">
                        <img class="logo" src="logo.gif" width="260" height="55" alt="Tito Sport">
                        <span class="logo"></span> </a> </div>
                    <div class="col-lg-4 col-xl-5 col-sm-8 col-md-4 d-none d-md-block">
 <div class="container h-100">
     <div class="d-flex justify-content-center h-100">
         <div class="search"> <input class="search_input" type="text" name="search" placeholder="Search here..."> <a href="#" class="search_icon"><i class="fa fa-search" style="font-size:24px;color:white"></i></a> </div>
     </div>
 </div>
                    </div>
                    <div class="col-lg-5 col-xl-4 col-sm-8 col-md-4 col-7">

                            <span class="vl"></span> <a  href="login.html"  data-target="#login-modal" data-abc="true"><span class="login">Login/Register</span></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        
        <nav class="navbar navbar-expand-md navbar-main">
            <div class="container-fluid">
                <form class="d-md-none my-2">
                    <div class="input-group"> <input type="search" name="search" class="form-control" placeholder="Search" required="">
                        <div class="input-group-append"> <button type="submit" class="btn btn-secondary"> <i class="fa fa-search"></i> </button> </div>
                    </div>
                </form> <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#dropdown6" aria-expanded="false"> <span class="navbar-toggler-icon"></span> </button>
                
                <div class="navbar-collapse collapse" id="dropdown6" >
                    <ul class="navbar-nav mr-auto">
                    <li  class="nav-item"> <a class="nav-link active" href="usersession.php" data-abc="true"><b>Book</b>&nbsp;&nbsp;</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="index.php#soon" data-abc="true"><b>Films</b>&nbsp;&nbsp;</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="kids.php" data-abc="true"><b>Kids Films</b>&nbsp;&nbsp;</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="kids.php" data-abc="true"><b>Game</b>&nbsp;&nbsp;</a> </li>
                        <li class="nav-item active_nav"> <a class="nav-link" href="contact1.html" data-abc="true"><b>Contact us</b>&nbsp;&nbsp;</a> </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<?php
//Variable that store email
$email = $_POST['email'];
//Variable that store the message - removed "
$message = $_POST['messagebody'];
//Variable that stores a link to the contact page
$page_link = 'index.php';
$headers = "From: $email" . "\r ";
$date =  date('m/d/Y, H:i:s');

echo "<h1 style='color:orange; text-align: center; '><br><br> <br>Thank you for contacting us, we will get back to you as soon as possible.</h1><br>";
echo "<div style=' text-align: center; font-size: 1.5rem;'> <a href='$page_link'>&larr;<b>Back to the website<b></a> </div>";

 // use wordwrap() if lines are longer than 70 characters
 //$message = wordwrap($message,70);
 $msg = $email ."\n\n" .$message."\n\n" .$date;
 $formattedmsg = wordwrap ($msg,70);
// echo ("wrapped message: " . $formattedmsg);
 // send email
 mail('vvlazarova@gmail.com','website query', $formattedmsg, $headers);
 ?>
 <!-- Footer -->
<?php include 'footer.html';?>
      
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
  
      </body>
      </html>
      
      