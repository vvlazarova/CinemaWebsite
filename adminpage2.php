
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


//Update action sql
if(isset($_POST['update']))
{
                                                                                                                                                                        
    $sql ="UPDATE cinema SET name = '$_POST[name]',info ='$_POST[info]',genre ='$_POST[genre]',director ='$_POST[director]',cast ='$_POST[cast]',date ='$_POST[date]',tickets ='$_POST[tickets]',time ='$_POST[time]',category2 ='$_POST[category2]',category ='$_POST[category]', video ='$_POST[video]',img ='$_POST[img]' WHERE id = '$_POST[hidden]' ";
    mysqli_query ($connection, $sql);
    // echo $sql ;
    $film= $_POST['name'];
    echo '<<br>' ;
    echo '<br>' ;

    echo '<div class= "container">  <h2><i>You have Updated Film with Film Name </i><b>' . $film .'</b></h2> </div> <br>';
};

//Delete action sql
if(isset($_POST['delete']))
{
    $sql1 ="DELETE from cinema WHERE id = '$_POST[hidden]' ";
    mysqli_query ($connection, $sql1);
    // echo $sql1 ;
    $film= $_POST['name'];
    echo '<<br>' ;
    echo '<br>' ;

    echo '<div class= "container">  <h2><i>You have Deleted Film with Film Name </i><b>' . $film .'</b></h2> </div> <br>';
};



//Variable name for the table

    $result = mysqli_query ($connection, "Select * FROM cinema");
    echo '     <div class="container-fluid pt-3">
    <div class="row">
    <div class="col-12">
    <br>
    <br>
    <br>
   <h1> Update the Film information:</h1>
        <hr>  
   <table class="table table-hover">
   <thead>
    <tr>
    <th>Name</th>
    <th></th>
    <th>Information</th>
    <th>Genre</th>
    <th>Director</th>
    <th>Cast</th>
    <th>Date</th>
    <th>Tickets available</th>
    <th>Time</th>
    <th>Adult or Child</th>
    <th>Category</th>
    <th>Link to video</th>
    <th>Image</th>
    </tr>
    </thead>';

//fetch rows from the database and store them as a associative array
while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC))
{
  //Table
  echo "<form action = 'adminpage2.php' method='POST' enctype='multipart/form-data'>";

  echo "<tbody>";
  echo "<tr>";
 
  echo "<td> <input type = 'text' name  = 'name' value= '" . $row ['name'] . "' ></td>";
  echo "<td> <input type = 'hidden' name  = 'hidden' value= '" . $row ['id'] . "'> </td>";
  echo "<td> <input type = 'text' name  = 'info' value= '" . $row ['info'] . "' ></td>";
  echo "<td> <input type = 'text' name  = 'genre' value= '" . $row ['genre'] . "' ></td>";
  echo "<td> <input type = 'text' name  = 'director' value= '" . $row ['director'] . "' ></td>";
  echo "<td> <input type = 'text' name  = 'cast' value= '" . $row ['cast'] . "' ></td>";
  echo "<td> <input type = 'date' name  = 'date' value= '" . $row ['date'] . "' ></td>";
  echo "<td> <input type = 'text' name  = 'tickets' value= '" . $row ['tickets'] . "' ></td>";
  echo "<td> <input type = 'time' name  = 'time' value= '" . $row ['time'] . "' ></td>";
  echo "<td> <input type = 'text' name  = 'category' value= '" . $row ['category'] . "' ></td>";
  echo "<td> <input type = 'text' name  = 'category2' value= '" . $row ['category2'] . "' ></td>";
  echo "<td> <input type = 'link' name  = 'video' value= '" . $row ['video'] . "' ></td>";
  echo "<td> <input type = 'text' name  = 'img' value= '" . $row ['img'] . "' ></td>";
  echo "<td> <input type = 'submit' name  = 'update'  value= 'update'> </td>";
  echo "<td> <input type = 'submit' name  = 'delete' value= 'delete'> </td>";
//   echo "<td> <input type = 'submit' name= 'add' value= 'Add New Film' ></td>";
  echo "<tr>";
  echo "</tbody>";
  echo "</form>";  


}
echo "</table>";
echo "</div>"; 
echo "</div>"; 
echo "</div>"; 
echo "</br>"; 
echo "</br>"; 
echo "</br>"; 
echo "</br>"; 
// echo "<form action = 'adminpage2.php' method='POST'>";
// // echo "<label>Add new Film:</label><br>";
// echo "<input type = 'text' name= 'name' id= 'name' />";
// echo "<input type = 'text' name= 'info' id= 'info' />";
// echo "<input type = 'submit' name= 'add' value= 'Add New Film' >";
// echo "</form>";  


mysqli_close($connection);

}
        ?> 

<!-- <footer class="sticky-footer" class="flex-shrink-0 py-4 bg-white text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Your Website</small>
    </div>
  </footer> -->



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