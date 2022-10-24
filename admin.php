<?php
	$connection = mysqli_connect("localhost","HNCWEBMR1","j4H3E40Pb0","HNCWEBMR1")
	or die ("can't connect");
	
			$user = $_POST['username'];
			$pass = $_POST['password'];
			$result = "SELECT * FROM admin WHERE name = '$user' AND pass ='$pass'";
			$sql = mysqli_query ($connection , $result);
            $count = mysqli_num_rows ($sql);





if ($count == 1)
        {
         
            //sart session called user
            session_start();
            $_SESSION ['admin'] ="allowed";
            //header to redirect to the adult user page
            header("Location: adminpage.php");


        }
  
else {
    echo '<div class="container pt-5">';
    echo '<div class="row">';
    echo ' <div class="col-md-3 how-img">';
    echo "</div>";
    echo ' <div class="col-md-6 how-img">';
    echo "<h1>Wrong password or username</h1>";
    echo ('<a href="adminlogin.html">');
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