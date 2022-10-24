<!-- Limelight Cinema 2021-2022
Violeta Lazarova - ec1929702
This is  -->

 <!DOCTYPE html>
<html lang="en">
  <head>

    <title>Account</title>


        <!-- Bootstrap -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

       <!-- CSS Link -->
    <link rel="stylesheet" type="text/css" href="css/account.css" />

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
      <!--Navbar -->
<?php include 'navbar.php';?>



      


<?php
    	    $connection = mysqli_connect("localhost","HNCWEBMR1","j4H3E40Pb0","HNCWEBMR1")
          or die ("can't connect");

session_start();

$username = $_SESSION ['username'];

if(isset($_SESSION ['adultuser']) || isset($_SESSION ['kidsuser']))

{
  $sqluser ="SELECT * FROM users WHERE username = '$username'";
//   echo '<div class="container pt-5">';
//   echo '<div class="row">';
//   echo ' <div class="col-md-3 how-img">';
//   echo "</div>";
//   echo ' <div class="col-md-6 how-img">';
//   echo "<h2> Welcome " .  $username . "</h2>";
//   echo "<hr>";
//   echo "<br>";
//   echo "<br>";
// echo "</div>";
//   echo ' <div class="col-md-3 how-img">';
//  echo "</div>";
//  echo "</div>";
//  echo "</div>";

   

//Update action sql
if(isset($_POST['update']))
{
                                                                                                                                                                        
  $sql ="UPDATE users SET username = '$_POST[username]' , email = '$_POST[email]',dob = '$_POST[dob]',password = '$_POST[password]' WHERE username = '$username' ";
  mysqli_query ($connection, $sql);
    // echo $sql ;
    echo '<div class="container pt-5">';
    echo '<div class="row">';
    echo ' <div class="col-md-2 how-img">';
    echo "</div>";
    echo ' <div class="col-md-8 how-img">';
    echo "<h3>". $username . " you have successfully updated your account" ."</h3>";
    echo "<br>";
    echo "<br>";
  echo "</div>";
    echo ' <div class="col-md-2 how-img">';
   echo "</div>";
   echo "</div>";
   echo "</div>";

// echo $username;
// echo "$row ['dob'] ";
};


//Delete action sql
if(isset($_POST['delete']))
{
  $sql1 ="DELETE from users WHERE username = '$username' ";
  mysqli_query ($connection, $sql1);
    // echo $sql1 ;
    echo '<div class="container pt-5">';
    echo '<div class="row">';
    echo ' <div class="col-md-2 how-img">';
    echo "</div>";
    echo ' <div class="col-md-8 how-img">';
    echo "<h3>We are sorry to see you go! </h3>";
    echo "<h2>Your account has been DELETED</h2>";
    echo "<br>";
    echo "<br>";
  echo "</div>";
    echo ' <div class="col-md-2 how-img">';
   echo "</div>";
   echo "</div>";
   echo "</div>";
};



//Variable name for the table

    $result = mysqli_query ($connection, "SELECT * FROM users WHERE username = '$username'");
    echo '    <div class="container class="table">  
    <br>
    <br>
    <br>
   <h1> Update You Personal information:</h1>
        <hr>  
   <table class="table table-hover">
   <thead>
    <tr>
    <th>Username</th>
    <th></th>
    <th>Email</th>
    <th>Date of Birth</th>
    <th>Password</th>
    </tr>
    </thead>';

//fetch rows from the database and store them as a associative array
while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC))
{
  //Table
  echo "<form action = 'account.php' method='POST'>";

  echo "<tbody>";
  echo "<tr>";
 
  echo "<td> <input type = 'text' name = 'username' value= '" . $row ['username'] . "' ></td>";
  // echo "<td> <input type = 'hidden' name  = 'hidden' value= '" . $row ['id'] . "'> </td>";
  echo "<td> <input type = 'text' name   = 'email' value= '" . $row ['email'] . "' ></td>";
  echo "<td> <input type = 'date' name  = 'dob' value= '" . $row ['dob'] . "' ></td>";
  echo "<td> <input type = 'password' name  = 'password'  value= '" . $row ['password'] . "' ></td>";
  echo "<td> <input type = 'submit' name  = 'update' value= 'update'> </td>";
  echo "<br>";
  echo "<td> <input type = 'submit' name  = 'delete' value= 'delete your account'> </td>";
//   echo "<td> <input type = 'submit' name= 'add' value= 'Add New Film' ></td>";
  echo "<tr>";
  echo "</tbody>";
  echo "</form>"; 

  echo "</div>"; 

}  echo "</table>"; 
echo "</br>"; 
echo "</br>"; 
echo "</br>"; 
echo "</br>"; 


mysqli_close($connection);

}


        ?> 





<!-- Footer -->
<?php include 'footer.html';?>

    
<!-- script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    </body>
    </html>
    
    