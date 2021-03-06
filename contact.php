<?php 
  $page = 'contact';
  $title = 'Five Star Bathroom';
  include 'meta.php';
  include 'header.php';
?>

<body>
 

<main>

	<!-- landing__contact -->
	<div class="landing__contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h1 class="contact__headline">
						Get<br>in touch<br>with us
					</h1>
					<strong>Five Star Bathroom</strong>
					<address>84 Riseholme road, Lincoln LN1 3SP</address>
					<p>Tel: <a href="tel:07xxxxxxxxx">07xxx xxxxxx</a></p>
					<p>Email: <a href="mailto:abc@fivestarbathroom.com">abc@fivestarbathroom.com</a></p>
				</div>
				<div class="col-lg-6">
					<form class="contact__form" action=" ">
						<div class="form-row">
							<div class="form-group col-md-6">
							    <label for="name">Name</label>
							    <input type="text" class="form-control" id="name" placeholder="Name">
						    </div>
						    <div class="form-group col-md-6">
							    <label for="last_name">Last name</label>
							    <input type="text" class="form-control" id="last_name" placeholder="Last name">
						    </div>
					    </div>

					    <div class="form-row">
							<div class="form-group col-md-6">
							    <label for="email">Email</label>
							    <input type="email" class="form-control" id="email" placeholder="example@email.co.uk">
						    </div>
						    <div class="form-group col-md-6">
							    <label for="phone">Phone</label>
							    <input type="number" class="form-control" id="phone" placeholder="0xxxxxxxxxx">
						    </div>
					    </div>

						<div class="form-row">
							<div class="form-group col-md-12">
							    <label for="topic">Topic</label>
							    <input type="text" class="form-control" id="topic">
						    </div>
						</div>

					    <div class="form-row">
							<div class="form-group col-md-12">
							    <label for="message">Message</label>
							    <textarea class="form-control" id="message" rows="3"></textarea>
							</div>
					    </div>

					    <div class="contact__captcha">
					    	<div class="captcha" id="captcha"></div>
					    </div>

					    <hr>

					    <div class="contact__button">
					    	<button class="btn btn--fixed-size btn--light-transparent">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end landing__contact -->
	

	


</main>
 

  

    

<?php 
  include 'footer.php';
?>