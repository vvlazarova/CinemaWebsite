<!-- Limelight Cinema 2021-2022
Violeta Lazarova - ec1929702
This is page contains the login and registration   -->

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
    <link rel="stylesheet" type="text/css" href="css/login2.css" />

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

    
         <!-- Form -->

    <div class="page-content" class="form-v8">
		<div class="form-v8-content">
			<!-- <div class="form-left">
				<img src="photo/poster smile.jpg" alt="form">
			</div> -->
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Sign In</button>
					</div>
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-in')">Register</button>
					</div>
				</div>
				<form  class="form-detail" action="login.php" method="POST">
					<div class="tabcontent" id="sign-up">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="uname" id="uname" class="input-text" required>
								<span class="label">Username</span>
		  						<span class="border"></span>
							</label>
						</div>

						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text"  required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row-last">
							<input type="submit" name="submit" class="register" value="Sign In">

						</div>
					</div>
				</form>
				<form id ="reg" class="form-detail" action="register.php" method="POST">
					<div class="tabcontent" id="sign-in">
        
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="signupusername" id="signupusername" class="input-text"  required>
								<span class="label">Username</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
                            <label class="form-row-inner">
								<input type="email" name="signupemail" id="signupemail" class="input-text" required>
								<span class="label">E-Mail</span>
		  						<span class="border"></span>
							</label>
						</div>

                        <div class="form-row">
							<label class="form-row-inner">
                                <label class="form-row-inner">Date Of Birth</label>
								<input type="date"  name="date" id="date" class="input-text" required>

						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="signuppassword" id="signuppassword" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="signupcpassword" id="signupcpassword" class="input-text" required>
								<span class="label">Comfirm Password</span>
								<span class="border"></span>
							</label>
						</div>
                        <h5 >
                            By creating an account, you agree with our <a href="/legal">Terms of Service</a>.
                        </h5>
                        
						<div class="form-row-last">
							<input type="submit" name="register" class="register" value="Sign In">
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function openCity(evt, cityName) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>

<!-- Footer -->
<?php include 'footer.html';?>
      
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
  
      </body>
      </html>
      
      