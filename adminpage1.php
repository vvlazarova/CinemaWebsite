
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
<body>


  <!--Navbar -->
      
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="adminpage.php">
      <img class="logo horizontal-logo" src="logo.gif" width="260" height="55" alt="forecastr logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto gap-2">
        <li class="nav-item rounded">
          <a class="nav-link" href="https://outlook.office365.com/mail/"><i class="bi bi-chat-text me-2"></i>Mail</a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link" href="index.php"><i class="bi bi-chat-text me-2"></i>Cinema</a>
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
        <li class="nav-item rounded">
        <a class="nav-link" href="logoutadmin.php"><i class="bi bi-chat-text me-2"></i><b>Logout</b></a>
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
$page_link = 'adminpage.php';

    $sql2 ="INSERT INTO cinema(name,info,img,genre,director,cast,date,rating,tickets,time,category,category2,video) VALUES ('$_POST[name]','$_POST[info]','$pic','$_POST[genre]','$_POST[director]','$_POST[cast]','$_POST[date]','$_POST[raiting]','$_POST[tickets]','$_POST[time]','$_POST[category]','$_POST[category2]','$_POST[video]')";
    mysqli_query ($connection, $sql2);
    //echo $sql2 ;
    // echo "The File is:". $pic;
    // print_r ($_FILES);
    // Save the image into a folder
    echo '<<br>' ;
    echo '<br>' ;

    echo '<div class= "container">  <h2>You have added a new Film with Film Name </i>' . $film . 'Successfully</h2> </div> <br>';

if (move_uploaded_file ($_FILES ['img'] ['tmp_name'],"photo/" . $_FILES ['img'] ['name']))

{
    echo ' <div class= "container"> <br><br><br> <h2 style="color:#050505; text-align: center; ">The File Was Uploaded </h2> </br> <br>';
    echo "<div style=' text-align: center; font-size: 1.5rem;'> <a href='$page_link'>&larr;<b>More Options<b></a> </div>";
    echo "</div>";
echo "</div>";
  }
 else {
    echo '<div class= "container">  <h2>File was not uploaded</h2> </div> <br>';
 }

};

//Variable name for the table

    $result = mysqli_query ($connection, "Select * FROM cinema");




//Table2
echo '     <div class="container-fluid pt-3">
<div class="row">
<div class="col-12">
<br>
<br>
<br>
<h1> Add new Film:</h1>
    <hr>  
<table class="table table-hover">
<thead>
 <tr>
 <th>Name</th>
 <th>Information</th>
 <th>Image</th>
 <th>Genre</th>
 <th>Director</th>
 <th>Cast</th>
 <th>Date</th>
 <th>Tickets available</th>
 <th>Time</th>
 <th>Adult or Kids</th>
 <th>Category</th>
 <th>Link to video</th>
 </tr>
 </thead>';


 echo "<form action = 'adminpage1.php' method='POST' enctype='multipart/form-data'>";

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
echo "<td> <input type = 'text' name  = 'video' id= 'video' /></td>";
echo "<td> <input type = 'submit' name= 'add' id= 'add' value= 'Add New Film' /></td>";
echo "<tr>";
echo "</tbody>";
echo "</form>"; 
echo "</table>"; 
echo "</div>"; 
echo "</div>"; 
echo "</div>"; 
echo "</br>"; 
echo "</br>"; 
echo "</br>"; 
echo "</br>"; 
mysqli_close($connection);

}
        ?> 

<footer class="sticky-footer" class="flex-shrink-0 py-4 bg-white text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Your Website</small>
    </div>
  </footer>



<script>
  const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});
</script>


<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js'></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    </body>
    </html>