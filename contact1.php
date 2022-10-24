<!-- Limelight Cinema 2021-2022
Violeta Lazarova - ec1929702
This is the main contact form -->

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

<!--Navbar -->
<?php include 'navbar.php';?>


<div class="container">


	<div class="wrapper">
  
		<!-- COMPANY INFORMATION -->
		<div class="company-info">
			<h1>Venues</h1>

			<ul>
				<li><a href="https://www.google.com/maps/place/Danderhall,+Dalkeith/@55.9113228,-3.1130827,15z/data=!3m1!4b1!4m5!3m4!1s0x4887b8df46ee3db9:0x5045900fd5f069f6!8m2!3d55.914032!4d-3.114851"style="font-size:32px;color:#4A235A"; > <i class="fa fa-map-marker"></i></a>
					&nbsp;&nbsp;Penicuik</li>
					<li><a href="https://www.google.com/maps/place/Danderhall,+Dalkeith/@55.9113228,-3.1130827,15z/data=!3m1!4b1!4m5!3m4!1s0x4887b8df46ee3db9:0x5045900fd5f069f6!8m2!3d55.914032!4d-3.114851"style="font-size:32px;color:#4A235A"; > <i class="fa fa-map-marker"></i></a>
						&nbsp;&nbsp;Dalkeith</li>
						<li><a href="https://www.google.com/maps/place/Danderhall,+Dalkeith/@55.9113228,-3.1130827,15z/data=!3m1!4b1!4m5!3m4!1s0x4887b8df46ee3db9:0x5045900fd5f069f6!8m2!3d55.914032!4d-3.114851"style="font-size:32px;color:#4A235A"; > <i class="fa fa-map-marker"></i></a>
							&nbsp;&nbsp;Danderhall</li>
							<li><a href="https://www.google.com/maps/place/Danderhall,+Dalkeith/@55.9113228,-3.1130827,15z/data=!3m1!4b1!4m5!3m4!1s0x4887b8df46ee3db9:0x5045900fd5f069f6!8m2!3d55.914032!4d-3.114851"style="font-size:32px;color:#4A235A"; > <i class="fa fa-map-marker"></i></a>
								&nbsp;&nbsp;Loanhead</li>
								<li><a href="https://www.google.com/maps/place/Danderhall,+Dalkeith/@55.9113228,-3.1130827,15z/data=!3m1!4b1!4m5!3m4!1s0x4887b8df46ee3db9:0x5045900fd5f069f6!8m2!3d55.914032!4d-3.114851"style="font-size:32px;color:#4A235A"; > <i class="fa fa-map-marker"></i></a>
									&nbsp;&nbsp;Gorebridge</li>
			</ul>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d143449.26613027495!2d-3.2477208446177896!3d55.82110671433124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488794d54deeb667%3A0xb631fd243f1e1e31!2sMidlothian!5e0!3m2!1sen!2suk!4v1638371003337!5m2!1sen!2suk" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		<!-- End .company-info -->

		<!-- CONTACT FORM -->
		<div class="contact">
			<h3>E-mail Us</h3>

			<form id="contact-form" action="contact.php" name="contact" method="POST">

				<p>
					<label>Name</label>
					<input type="text" name="name" id="name" required>
				</p>

				<p>
                    <label for="venue">Choose a Venue:</label>
                    <select id="venue" name="venue">
                      <option value="pe">Penicuik</option>
                      <option value="da">Dalkeith</option>
                      <option value="dan">Danderhall</option>
                      <option value="loa">Loanhead</option>
                      <option value="gor">Gorebridg</option>
                    </select>
					<!-- <label>Venue</label>
					<input type="text" name="venue" id="venue"required> -->
				</p>

				<p>
					<label>E-mail Address</label>
					<input type="email" name="email" id="email" required>
				</p>

				<p>
					<label>Phone Number</label>
					<input type="text" name="phone" id="phone">
				</p>

				<p class="full">
					<label>Message</label>
					<textarea name="message" rows="5" id="message"></textarea>
				</p>
                   
                <input type="checkbox" id="checkbox" name="checkbox" value="checkbox" required>
                <label for="checkbox"> I agree to the terms & conditions</label>
                       

				<p class="full">
					<button type="submit">Send</button>
				</p>

			</form>
			<!-- End #contact-form -->
		</div>
		<!-- End .contact -->

	</div>
	<!-- End .wrapper -->
</div>
<!-- End .container -->

<br>
<br>
<br>


<!-- Footer -->
<?php include 'footer.html';?>
      
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
  
      </body>
      </html>
      
      