<!-- Limelight Cinema 2021-2022
Violeta Lazarova - ec1929702
This is Navbar code to show kids, adult,s and non-member different views -->

<?php 
            session_start();
            $username = $_SESSION ['username'];
            if(isset($_SESSION ['kidsuser']))
{
    echo '<header class="section-header">
        <section class="header-main ">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-sm-4 col-md-4 col-5"> <a href="kids.php" class="brand-wrap" data-abc="true">
                    <img class="logo" src="logo.gif" width="260" height="55" alt="Tito Sport">
                        <span class="logo"></span> </a> </div>
                    <div class="col-lg-4 col-xl-5 col-sm-8 col-md-4 d-none d-md-block">
    <div class="container h-100">
     <div class="d-flex justify-content-center h-100">
         <div class="search"> 
         <form action="search.php" method="post">
    <input type="text" name="search_term" placeholder="search for movies" />
    <button type="submit" name="go">search</button>
    </form>  
         </div>
     </div>
    </div>
                    </div>
                    <div class="col-lg-5 col-xl-4 col-sm-8 col-md-4 col-7">

                    <span class="vl"></span> <a  href="logout.php"  data-target="#login-modal" data-abc="true">
                    <span class="login"><b>Hi ' . $username . '</b></span></a>

                        </div>
                    </div>
                </div>
         
            
        </section>
        
        <nav class="navbar navbar-expand-md navbar-main">
            <div class="container-fluid">
                <form class="d-md-none my-2 sticky-top">
                    <div class="input-group"> <input type="search" name="search" class="form-control" placeholder="Search" required="">
                        <div class="input-group-append"> <button type="submit" class="btn btn-secondary"> <i class="fa fa-search"></i> </button> </div>
                    </div>
                </form> <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#dropdown6" aria-expanded="false"> <span class="navbar-toggler-icon"></span> </button>
                
                <div class="navbar-collapse collapse" id="dropdown6" >
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item"> <a class="nav-link" href="account.php" data-abc="true"><b>My Account</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>

                    <li  class="nav-item"> <a class="nav-link" href="kids.php#first" data-abc="true"><b>Films</b>&nbsp;&nbsp;</a> </li>
                        <li  class="nav-item"> <a class="nav-link" href="https://cdn.htmlgames.com/SnowBalls/" data-abc="true"><b>Game</b>&nbsp;&nbsp;</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="kids.php" data-abc="true"><b>Kids Films</b>&nbsp;&nbsp;</a> </li>
                        <li class="nav-item "> <a class="nav-link" href="contact1.php" data-abc="true"><b>Contact us</b>&nbsp;&nbsp;</a> </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>';
    }
                

    elseif(isset($_SESSION ['adultuser'])){
        echo '<header class="section-header">
        <section class="header-main ">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-sm-4 col-md-4 col-5"> <a href="usersession.php" class="brand-wrap" data-abc="true">
                    <img class="logo" src="logo.gif" width="260" height="55" alt="Tito Sport">
                        <span class="logo"></span> </a> </div>
                    <div class="col-lg-4 col-xl-5 col-sm-8 col-md-4 d-none d-md-block">
    <div class="container h-100">
     <div class="d-flex justify-content-center h-100">
         <div class="search"> 
         <form action="search.php" method="post">
    <input type="text" name="search_term" placeholder="search for movies" />
    <button type="submit" name="go">search</button>
    </form>  
         </div>
     </div>
    </div>
                    </div>
                    <div class="col-lg-5 col-xl-4 col-sm-8 col-md-4 col-7">
                    
                    <span class="login"><b>Hi ' . $username . '</b></span>
                    <span class="vl"></span> <a  href="logout.php"  data-target="#login-modal" data-abc="true">
                    <span class="vl"></span> <a  href="logout.php"  data-target="#login-modal" data-abc="true"><span class="login"><b>Logout</b></span></a>
                        </div>
                    </div>
                </div>
         
            
        </section>
        
        <nav class="navbar navbar-expand-md navbar-main">
            <div class="container-fluid">
                <form class="d-md-none my-2 sticky-top">
                    <div class="input-group"> <input type="search" name="search" class="form-control" placeholder="Search" required="">
                        <div class="input-group-append"> <button type="submit" class="btn btn-secondary"> <i class="fa fa-search"></i> </button> </div>
                    </div>
                </form> <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#dropdown6" aria-expanded="false"> <span class="navbar-toggler-icon"></span> </button>
                
                <div class="navbar-collapse collapse" id="dropdown6" >
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item"> <a class="nav-link" href="account.php" data-abc="true"><b>My Account</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>

                    <li class="nav-item"> <a class="nav-link" href="usersession.php#first" data-abc="true"><b>Films</b>&nbsp;&nbsp;</a> </li>
                        <li  class="nav-item"> <a class="nav-link" href="usersession.php#first" data-abc="true"><b>Book</b>&nbsp;&nbsp;</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="kids.php" data-abc="true"><b>Kids Films</b>&nbsp;&nbsp;</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="contact1.php" data-abc="true"><b>Contact us</b>&nbsp;&nbsp;</a> </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>';

    }
else{


echo '<header class="section-header">
    <section class="header-main ">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-4 col-md-4 col-5"> <a href="index.php" class="brand-wrap" data-abc="true">
                <img class="logo" src="logo.gif" width="260" height="55" alt="Tito Sport">
                    <span class="logo"></span> </a> </div>
                <div class="col-lg-4 col-xl-5 col-sm-8 col-md-4 d-none d-md-block">
<div class="container h-100">
 <div class="d-flex justify-content-center h-100">
     <div class="search"> 
     <form action="search.php" method="post">
<input type="text" name="search_term" placeholder="search for movies" />
<button type="submit" name="go">search</button>
</form>  
     </div>
 </div>
</div>
                </div>
                <div class="col-lg-5 col-xl-4 col-sm-8 col-md-4 col-7">

                        <span class="vl"></span> <a  href="login1.php"  data-target="#login-modal" data-abc="true"><span class="login">Login/Register</span></a>
                    </div>
                </div>
            </div>
     
        
    </section>
    
    <nav class="navbar navbar-expand-md navbar-main">
        <div class="container-fluid">
            <form class="d-md-none my-2 sticky-top">
                <div class="input-group"> <input type="search" name="search" class="form-control" placeholder="Search" required="">
                    <div class="input-group-append"> <button type="submit" class="btn btn-secondary"> <i class="fa fa-search"></i> </button> </div>
                </div>
            </form> <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#dropdown6" aria-expanded="false"> <span class="navbar-toggler-icon"></span> </button>
            
            <div class="navbar-collapse collapse" id="dropdown6" >
                <ul class="navbar-nav mr-auto">
                    <li  class="nav-item"> <a class="nav-link" href="index.php#films" data-abc="true"><b>Films</b>&nbsp;&nbsp;</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="index.php#kids" data-abc="true"><b>Kids Films</b>&nbsp;&nbsp;</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="kids.php" data-abc="true"><b>Game</b>&nbsp;&nbsp;</a> </li>
                    <li class="nav-item "> <a class="nav-link" href="contact1.php" data-abc="true"><b>Contact us</b>&nbsp;&nbsp;</a> </li>
                </ul>
            </div>
        </div>
    </nav>
</header>';
}
?>