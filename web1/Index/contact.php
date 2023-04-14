<?php
@$activate="contact";
@include('header.php')
?>

<!-- Contact -->
<section class="contact py-5">
	<div class="container py-lg-5">
		<h1 class="heading text-capitalize text-center">Contact Us</h1>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="row agile-contact-form">
			<div class="col-md-6 contact-form-left map">
				<div class="w3layouts-contact-form-top">
				<div class="contact-form-top">
					<h3>Locate Us</h3>
				</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3381268.89304075!2d-108.26956901768942!3d34.145820117962906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2sCanada!5e0!3m2!1sen!2sin!4v1524478277945" allowfullscreen></iframe>
				</div>
				
			</div>
			<div class="col-md-6 mt-md-0 mt-4 contact-form-right">
				<div class="contact-form-top">
					<h3>Send us a message</h3>
				</div>
				<div class="agileinfo-contact-form-grid">
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="text" name="Subject" placeholder="Subject" required="">
						<input type="email" name="Email" placeholder="Email" required="">
						<textarea name="Message" placeholder="Message" required=""></textarea>
						<button class="btn1">Submit</button>
					</form>
				</div>
			</div>
		</div>
				<div class="row top mt-5">
					<div class="col-lg-4 mb-lg-0 mb-4 address-grid">
						<div class="row address-info">
							<div class="col-lg-3 col-sm-2 mb-sm-0 mb-3 address-left">
								<i class="fas fa-map-marker-alt"></i>
							</div>
							<div class="col-lg-9 col-sm-10 address-right text-left">
								<h6>Address</h6>
								<p> 3481 Jack Street Beverly Jack Hills<span> 90210 Block, USA </span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mb-lg-0 mb-4 address-grid">
						<div class="row address-info">
							<div class="col-lg-3 col-sm-2 mb-sm-0 mb-3 address-left">
								<i class="fas fa-envelope-open"></i>
							</div>
							<div class="col-lg-9 col-sm-10 address-right text-left">
								<h6>Email</h6>
								<p>Email :
									<a href="mailto:example@email.com"> mail@example.com</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-lg-3 col-sm-2 mb-sm-0 mb-3 address-left">
								<i class="fas fa-phone"></i>
							</div>
							<div class="col-lg-9 col-sm-10 address-right text-left">
								<h6>Phone</h6>
								<p>Phone : 112 367 896 2449</p>
								<p>Fax : 112 367 896 2449</p>
								</p>
							</div>
						</div>
					</div>
				</div>
			
	</div>
</section>
<!-- //Contact -->
	
<?php
@include('footer.php')
?>


			
<!-- login and register modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Sign In to your account</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="#" method="post">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">User Name</label>
						<input type="text" class="form-control" placeholder="User Name" name="Name" id="recipient-name" required="">
					</div>
					<div class="form-group">
						<label for="password" class="col-form-label">Password</label>
						<input type="password" class="form-control" placeholder="Password" name="Password" id="password" required="">
					</div>
					<div class="row sub-w3l my-3">
						<div class="col sub-agile">
							<input type="checkbox" id="brand1" value="">
							<label for="brand1" class="text-white">
								<span></span>Remember me?</label>
						</div>
						<div class="col forgot-w3l text-right">
							<a href="#" class="text-white">Forgot Password?</a>
						</div>
					</div>
					<div class="right-w3l">
						<input type="submit" class="form-control" value="Sign In">
					</div>
					<p class="text-center dont-do text-white mt-3">Don't have an account?
						<a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-white">
							Register Now</a>
					</p>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel1">Register your account</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="#" method="post">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">User Name</label>
						<input type="text" class="form-control" placeholder="User Name" name="Name" id="recipient-rname" required="">
					</div>
					<div class="form-group">
						<label for="recipient-email" class="col-form-label">Email</label>
						<input type="email" class="form-control" placeholder="Email" name="Email" id="recipient-email" required="">
					</div>
					<div class="form-group">
						<label for="password1" class="col-form-label">Password</label>
						<input type="password" class="form-control" placeholder="Password" name="Password" id="password1" required="">
					</div>
					<div class="form-group">
						<label for="password2" class="col-form-label">Confirm Password</label>
						<input type="password" class="form-control" placeholder="Confirm Password" name="Confirm Password" id="password2" required="">
					</div>
					<div class="sub-w3l">
						<div class="sub-agile">
							<input type="checkbox" id="brand2" value="">
							<label for="brand2" class="mb-3">
								<span></span>I Accept to the Terms & Conditions</label>
						</div>
					</div>
					<div class="right-w3l">
						<input type="submit" class="form-control" value="Register">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //login and register modal -->

