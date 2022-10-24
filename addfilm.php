
<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Home</title>



        <!-- Bootstrap -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css'>    

       <!-- CSS Link -->
    <link rel="stylesheet" type="text/css" href="css/admin.css" />

    <!-- Icons-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- script-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--Font Awesome 5 Icons -->
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

               <!--Navbar -->
        
<body>
<!-- partial:index.partial.html -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="adminpage.php">
      <img class="logo horizontal-logo" src="logo.gif" width="260" height="55" alt="forecastr logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-md-auto gap-2">
        <li class="nav-item rounded">
          <a class="nav-link" href="https://outlook.office365.com/mail/"><i class="bi bi-chat-text me-2"></i>Mail</a>
        </li>
        <li class="nav-item dropdown rounded">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-people-fill me-2"></i>Users</a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Kids</a></li>
            <li><a class="dropdown-item" href="#">Adults</a></li>
            <li>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown rounded">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-hand-thumbs-up me-2"></i>Social media</a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="https://www.facebook.com">Facebook</a></li>
            <li><a class="dropdown-item" href="https://twitter.com/tweeter?lang=en">Tweeter</a></li>
            <li>
            </li>
            <li><a class="dropdown-item" href="https://www.instagram.com">Instagram</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown rounded">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill me-2"></i>Profile</a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Update</a></li>
            <li><a class="dropdown-item" href="#">Upload</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<?php
    	    $connection = mysqli_connect("localhost","HNCWEBMR1","j4H3E40Pb0","HNCWEBMR1")
          or die ("can't connect");

session_start();
if(isset($_SESSION ['admin']))

{







//Add action sql
if(isset($_POST['add']))
{
   //set variable for the image's name
  $title = $_POST ['file'];
//Array that store information of the uploaded file name
$pic = $_FILES ['img'] ['name'] ;

    $sql2 ="INSERT INTO cinema(name,info,img, genre, director, cast,date,rating,tickets,time,category, category2, video) VALUES ('$_POST[name]','$_POST[info]', '$pic', '$_POST[genre]', '$_POST[director]','$_POST[cast]', '$_POST[date]', '$_POST[raiting]','$_POST[tickets]', '$_POST[time]','$_POST[category]', '$_POST[category2]', '$_POST[video]')";
    mysqli_query ($connection, $sql2);
    //echo $sql2 ;
    // echo "The File is:". $pic;
    // print_r ($_FILES);
    // Save the image into a folder
    echo '<div class= "container">  <h2>You have added a new Film Successfully</h2> </div> <br>';

if (move_uploaded_file ($_FILES ['img'] ['tmp_name'],"photo/" . $_FILES ['img'] ['name']))

{
    echo '    <div class="container">  <h2>Uploaded </h2> </div> <br>';
}
 else {
    echo '<div class= "container">  <h2>File was not uploaded</h2> </div> <br>';
 }

}

//Variable name for the table

    $result = mysqli_query ($connection, "Select * FROM cinema");



 echo "<form action = 'addfilm.php' method='POST' enctype='multipart/form-data'>";

echo "<tbody>";
echo "<tr>";
echo "<td> <input type = 'text' name  = 'name' id= 'name' /></td>";
echo "<td> <input type = 'text' name  = 'info' id= 'info' /></td>";
echo "<td> <input type = 'file' name  = 'img' id= 'img' /></td>";
echo "<td> <input type = 'text' name  = 'genre' id= 'genre' /></td>";
echo "<td> <input type = 'text' name  = 'director' id= 'director' /></td>";
echo "<td> <input type = 'text' name  = 'cast' id= 'cast' /></td>";
echo "<td> <input type = 'date' name  = 'date' id= 'date' /></td>";
echo "<td> <input type = 'text' name  = 'tickets' id= 'tickets' /></td>";
echo "<td> <input type = 'time' name  = 'time' id= 'time' /></td>";
echo "<td> <input type = 'text' name  = 'category' id= 'category' /></td>";
echo "<td> <input type = 'text' name  = 'category2' id= 'category2' /></td>";
echo "<td> <input type = 'text' name  = 'date' id= 'date' /></td>";
echo "<td> <input type = 'submit' name= 'add' id= 'add' value= 'Add New Film' /></td>";
echo "<tr>";
echo "</tbody>";
echo "</table>";
echo "</form>";  
echo "</div>"; 
echo "</div>"; 
echo "</div>"; 

mysqli_close($connection);
}

        ?> 



<!-- <footer class="sticky-footer>

<div class="bg-dark text-white content-center align-items-center">
          <div class="row">
              <div class="col-md-5">
                  <a class="navbar-brand" href="index.html">
                      <img src="LOGO2.gif" width="80" height="55" alt="logo" /><br></a>
</div>
<div class=" col-md-2" class="bg-dark text-white">
  <p ><a href="adminpage.php">Admin Area</a></p>
</div>
        
<div class="col-md-5">
           <small>© Copyright 2021 - Violeta Lazarova All rights reserved.</small>
           </div>
              </div>
              </div>
              </footer>  -->
    
        <footer class="sticky-footer" class="bg-dark text-white content-center align-items-center">
    <div class="container text-center">
      <small>Copyright &copy; Your Website</small>
    </div>
  </footer> 


  
              
  
      <!-- partial -->
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js'></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
  
      </body>
      </html>
      
