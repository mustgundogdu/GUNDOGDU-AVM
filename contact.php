<?php
session_start();


?>

<html>

<head>
<title>
CONTACT
</title>
<link rel="stylesheet" href="/css/contact.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>
<body>

<form name="c-form" method="post" action="/contact/contact_con.php" >


	<div class="container contact">
	<div class="row">
		
		<div class="col-md-3">
			<div class="contact-info">
			
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Contact Us</h2>
				
			</div>
		</div>
		
				<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">User Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" name="name" id="c_name" >

				  </div>
				</div>
					<div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Surname:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" name="surname" id="c_surname">
				  </div>
				</div>

					<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" name="c_email" id="ic_email">
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Message:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" name="message" id="c_message"></textarea>


				  </div>
				</div>
			<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default" value="Send" >Submit</button>
				  </div>
				</div>
			
			</div>
		</div>
		
	</div>
</div>


</form>




</body>
</html>
