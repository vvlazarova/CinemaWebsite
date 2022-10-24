<!-- Limelight Cinema 2021-2022
Violeta Lazarova - ec1929702
This page is connected the main contact form and gives feedback
when a message is sent and sends the message to the appropriate email. -->

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
<?php include 'navbar.php';?>

<?php
//Variable that store name
$name = $_POST['name'];
//Variable that store email
$email = $_POST['email'];
//Variable that store phone number
$phone = $_POST['phone'];
//Variable that store the subject venue "
$venue = $_POST['venue'];
//Variable that store the message"
$message = $_POST['message'];
//Variable that stores a link to the home page
$page_link = 'index.php';
//Variable that stores the email of the sender
$headers = "From: $email" . "\r ";
$date =  date('m/d/Y, H:i:s');


echo '<div class="container-fluid">
<div class="row">
    <div class="col-12">';
echo "<h1 style='color:#ffa500; text-align: center; '><br><br> <br>Thank you for contacting us, we will get back to you as soon as possible.</h1><br>";
echo "<div style=' text-align: center; font-size: 1.5rem;'> <a href='$page_link'>&larr;<b>Back to the website<b></a> </div>";
echo "</div>";
echo "</div>";
echo "<br>";
echo "<br>";
 // use wordwrap() if lines are longer than 70 characters
 //$message = wordwrap($message,70);
 $msg = $name ." : " .$email . "\n\n".$venue . "\n\n".$phone ."\n\n".$message . "\n\n" ."Sent on:  ".$date;
 $formattedmsg = wordwrap ($msg,70);
// echo ("wrapped message: " . $formattedmsg);
 // send email
 mail('ec1929702@edinburghcollege.ac.uk','website query', $formattedmsg, $headers);
 ?>

<!-- Footer -->
<?php include 'footer.html';?>
      
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
  
      </body>
      </html>
      
      