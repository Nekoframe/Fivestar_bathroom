<?php 
  $page = 'admin';
  $title = 'Admin Panel';
  include 'meta.php';
  include 'header.php';
?>

<body>
 

<main class="main--space-top">

	<!-- admin__wrapper -->
	<div class="admin__wrapper">

		<!-- admin__banner -->
		<div class="admin__banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12" id="banner">
						<div class="admin__strip-title">Banner</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="banner__example" id="banner__example">
							<div class="banner--overlay"></div>
							<div class="banner__text">
								<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
								<h1>LOREMIPSUM</h1>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="banner__upload">
							<input type="file" id="banner_upload" class="btn--file" onchange="bannerFile()">
							<label for="banner_upload">Choose a file</label>
						</div>

						<form name="banner__text__edit" class="banner__text__edit" action="">
							<div class="form-row">
								<div class="form-group col-md-6 col-lg-12">
								    <label for="banner_text_detail">Text first line</label>
								    <input type="text" class="form-control" id="banner_text_detail" placeholder="Short description">
							    </div>
							    <div class="form-group col-md-6 col-lg-12">
								    <label for="banner_text_headline">Text second line</label>
								    <input type="text" class="form-control" id="banner_text_headline" placeholder="Headline">
							    </div>
						    </div>
						    <div class="form-row">
						    	<div class="form-group col-md-12 col-lg-12 button__box">
							    	<button class="btn btn--auto-size btn--dark-transparent btn--admin">Save change</button>
							    </div>
						    </div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end admin__banner -->



		<!-- admin__contact -->
		<div class="admin__contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="admin__strip-title" id="contact">Contact</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<form class="contact__text__edit" action="">
							<div class="form-row">
								<div class="form-group col-md-6 col-lg-6">
								    <label for="business_name">Business name</label>
								    <input type="text" class="form-control" id="business_name" placeholder="eg. Five Star Bathroom">
							    </div>
							    <div class="form-group col-md-6 col-lg-6">
								    <label for="business_address">Address</label>
								    <input type="text" class="form-control" id="business_address" placeholder="">
							    </div>
						    </div>
						    <div class="form-row">
								<div class="form-group col-md-6 col-lg-6">
								    <label for="business_call">Phone number</label>
								    <input type="number" class="form-control" id="business_call" placeholder="eg. 07xxxxxxxxx">
							    </div>
							    <div class="form-group col-md-6 col-lg-6">
								    <label for="business_email">Email</label>
								    <input type="email" class="form-control" id="business_email" placeholder="abc@fivestarbathroom.com">
							    </div>
						    </div>
						    <div class="form-row">
						    	<div class="form-group col-md-12 col-lg-12 button__box">
							    	<button class="btn btn--auto-size btn--dark-transparent btn--admin">Save change</button>
							    </div>
						    </div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end admin__contact -->



		<!-- admin__service -->
		<div class="admin__service">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="admin__strip-title" id="service">Services</div>
					</div>
				</div>

				<div class="row service__box">
					<div class="col-lg-3 offset-lg-1 col-md-6 offset-md-3">
						<div class="service__example">
							<img class="img-fluid" id="service__example" src="../img/services.jpg">
						</div>
					</div>
					<div class="col-lg-6 offset-lg-2">
						<div class="service__upload">
							<input type="file" id="service__upload" class="btn--file">
							<label for="service__upload">Choose a file</label>
						</div>

						<form name="service__text__edit" class="service__text__edit" action="">
							<div class="form-row">
								<div class="form-group col-md-12">
								    <label for="service_text_title">Title</label>
								    <input type="text" class="form-control" id="service_text_title" placeholder="Short description">
							    </div>
							    <div class="form-group col-md-12">
								    <label for="service__desc">Service Description</label>
								    <textarea name="service_desc" id="service__desc" cols="30" rows="5"></textarea>
							    </div>
						    </div>
						</form>
					</div>
				</div>




				<div class="row service__box">
					<div class="col-lg-3 offset-lg-1 col-md-6 offset-md-3">
						<div class="service__example">
							<img class="img-fluid" id="service__example1" src="../img/services/service1.jpg">
						</div>
					</div>
					<div class="col-lg-6 offset-lg-2">
						<div class="service__upload">
							<input type="file" id="service__upload1" class="btn--file">
							<label for="service__upload1">Choose a file</label>
						</div>

						<form name="service__text__edit" class="service__text__edit" action="">
							<div class="form-row">
								<div class="form-group col-md-12">
								    <label for="service_text_title">Title</label>
								    <input type="text" class="form-control" id="service_text_title" placeholder="Short description">
							    </div>
							    <div class="form-group col-md-12">
								    <label for="service__desc">Service Description</label>
								    <textarea name="service_desc" id="service__desc" cols="30" rows="5"></textarea>
							    </div>
						    </div>
						</form>
					</div>
				</div>




				<div class="plus__button__box">
					<button class="btn btn--auto-size btn--dark-transparent btn--admin">Add more</button>
				</div>

				<div class="save__button__box">
					<button class="btn btn--auto-size btn--dark-transparent btn--admin">Save change</button>
				</div>
			</div>
		</div>
		<!-- end admin__service -->


		<!-- admin__testimonial -->
		<div class="admin__testimonial">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="admin__strip-title" id="rating">Ratings and Reviews</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<table class="admin__table" id="testimonial_table">
							<thead>
						        <tr>
						        	<th scope="col">#</th>
						            <th scope="col">Name</th>
						            <th scope="col">Last name</th>
						            <th scope="col">Photo</th>
						            <th scope="col">Location</th>
						            <th scope="col">Stars</th>
						            <th scope="col">Reviews</th>
						            <th scope="col">Edit</th>
						            <th scope="col">Delete</th>
						        </tr>
						    </thead>
						    <tbody>
						        <tr>
						        	<td>1</td>
						            <td>Thanawan</td>
						            <td>Pinlaem</td>
						            <td><img src="../img/reviews/review2.jpg" class="img--fixed" alt="Thanawan Pinlaem"></td>
						            <td>Lincoln</td>
						            <td>4.5</td>
						            <td>
						Sed ut perspiciatis unde omnis iste natus 
error sit voluptatem accusantium 
doloremque laudantium, totam rem aperiam,
eaque ipsa quae ab illo inventore veritatis et
quasi architecto beatae vitae dicta sunt
explicabo. Nemo enim ipsam voluptatem
quia voluptas sit aspernatur aut odit aut
fugit, sed quia consequuntur magni
dolores eos qui ratione voluptatem
sequi nesciunt. Neque porro quisquam
est, qui dolorem ipsum quia dolor sit
amet,
					</td>
									<td>
										<button class="btn btn--auto-size btn--dark-transparent btn--admin">Edit</button>
									</td>
									<td>
										<button class="btn btn--auto-size btn--dark-transparent btn--admin">Delete</button>
									</td>
						        </tr>

						        <tr>
						        	<td>2</td>
						            <td>Sebastian</td>
						            <td>Galoch</td>
						            <td><img src="../img/reviews/review1.jpg" class="img--fixed" alt="Sebastian Galoch"></td>
						            <td>London</td>
						            <td>4</td>
						            <td>
						Sed ut perspiciatis unde omnis iste natus 
error sit voluptatem accusantium 
doloremque laudantium, totam rem aperiam,
eaque ipsa quae ab illo inventore veritatis et
quasi architecto beatae vitae dicta sunt
explicabo. Nemo enim ipsam voluptatem
quia voluptas sit aspernatur aut odit aut
fugit, sed quia consequuntur magni
dolores eos qui ratione voluptatem
sequi nesciunt. Neque porro quisquam
est, qui dolorem ipsum quia dolor sit
amet,
					</td>
									<td>
										<button class="btn btn--auto-size btn--dark-transparent btn--admin">Edit</button>
									</td>
									<td>
										<button class="btn btn--auto-size btn--dark-transparent btn--admin">Delete</button>
									</td>
						        </tr>
						        

						    </tbody>
						</table>
					</div>
				</div>


				<div class="row testimonial__box">
					<div class="col-lg-3 offset-lg-1 col-md-6 offset-md-3">
						<div class="testimonial__example">
							<img class="img-fluid" id="testimonial__example" src="../img/reviews/review1.jpg">
						</div>
					</div>
					<div class="col-lg-6 offset-lg-2">
						<div class="testimonial__upload">
							<input type="file" id="testimonial__upload" class="btn--file">
							<label for="testimonial__upload">Choose a file</label>
						</div>

						<form name="testimonial__text__edit" class="testimonial__text__edit" action="">
							<div class="form-row">
								<div class="form-group col-md-6 col-lg-6">
								    <label for="testimonial_name">Name</label>
								    <input type="text" class="form-control" id="testimonial_name" placeholder="Name">
							    </div>
							    <div class="form-group col-md-6 col-lg-6">
								    <label for="testimonial_last_name">Last name</label>
								    <input type="text" class="form-control" id="testimonial_last_name" placeholder="Last name">
							    </div>
						    </div>
						    <div class="form-row">
								<div class="form-group col-md-6 col-lg-6">
								    <label for="testimonial_location">Location</label>
								    <input type="text" class="form-control" id="testimonial_location" placeholder="eg. Lincoln">
							    </div>
							    <div class="form-group col-md-6 col-lg-6">
								    <label for="testimonial_stars">Star rating</label>
								    <select class="form-control" name="testimonial_stars" id="testimonial_stars">
								    	<option value="5">5</option>
								    	<option value="4.5">4.5</option>
								    	<option value="4">4</option>
								    	<option value="3.5">3.5</option>
								    	<option value="3">3</option>
								    	<option value="2.5">2.5</option>
								    	<option value="2">2</option>
								    	<option value="1.5">1.5</option>
								    	<option value="1">1</option>
								    	<option value="0">0</option>
								    </select>
							    </div>
						    </div>
						    <div class="form-row">
							    <div class="form-group col-md-12">
								    <label for="testimonial_review">Review</label>
								    <textarea name="testimonial_review" id="testimonial_review" cols="30" rows="5"></textarea>
							    </div>
						    </div>
						</form>
					</div>
				</div>


				<div class="form-row">
			    	<div class="form-group col-md-12 col-lg-12 button__box">
				    	<button class="btn btn--auto-size btn--dark-transparent btn--admin">Save change</button>
				    </div>
			    </div>


			</div>
		</div>
		<!-- end admin__testimonial -->


		<!-- admin__gallery -->
		<div class="admin__gallery">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="admin__strip-title" id="gallery">Gallery</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<strong class="sub__title">Upload New Album</strong>
						<form class="album__text__edit" action="">
							<div class="form-row">
								<div class="form-group col-md-6 col-lg-6">
								    <label for="album_name">Album name</label>
								    <input type="text" class="form-control" id="album_name" placeholder="eg. Luxury Bathroom on Riseholme road">
							    </div>
							    <div class="form-group col-md-6 col-lg-6">
								    <label for="album_location">Location</label>
								    <input type="text" class="form-control" id="album_location" placeholder="eg. Lincoln">
							    </div>
						    </div>
						    <div class="form-row">
								<div class="form-group col-md-12 col-lg-12">
								    <label for="album_category">Category</label>
								    <div class="">
								    	<div class="form-check form-check-inline">
										  <input class="form-check-input" type="checkbox" id="category0" value="0">
										  <label class="form-check-label" for="category0">All Bathrooms</label>
										</div>

										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="checkbox" id="category1" value="1">
										  <label class="form-check-label" for="category1">Minimal Design</label>
										</div>

										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="checkbox" id="category2" value="2">
										  <label class="form-check-label" for="category2">Cozy Bathrooms</label>
										</div>

										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="checkbox" id="category3" value="3">
										  <label class="form-check-label" for="category3">Luxury</label>
										</div>

										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="checkbox" id="category4" value="4">
										  <label class="form-check-label" for="category4">Wooden Style</label>
										</div>

										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="checkbox" id="category5" value="5">
										  <label class="form-check-label" for="category5">Small Bathrooms</label>
										</div>
								    </div>
							    </div>
							    
						    </div>

						    <div class="form-row">
						    	<div class="album__upload">
									<input type="file" id="album_upload" class="btn--file" multiple>
									<label for="album_upload">Choose multiple photos</label>
								</div>
						    </div>

						    <div class="form-row">
						    	<div class="album__result row no-gutters" id="result">
						    		
						    	</div>
						    </div>
						    
						    <div class="form-row">
						    	<div class="form-group col-md-12 col-lg-12 button__box">
							    	<button class="btn btn--auto-size btn--dark-transparent btn--admin">Save change</button>
							    </div>
						    </div>
						</form>
					</div>
				</div>

				<div class="row" style="margin-top: 40px;">
					<div class="col-lg-12">
						<strong class="sub__title">View albums</strong>
					</div>
				</div>


				<div class="row">
					<div class="col-lg-12">
						<table class="admin__table" id="album_table">
							<thead>
						        <tr>
						        	<th scope="col">#</th>
						            <th scope="col">Name</th>
						            <th scope="col">Location</th>
						            <th scope="col">Category</th>
						            <th scope="col">Date created</th>
						            <th scope="col">Edit</th>
						            <th scope="col">Delete</th>
						        </tr>
						    </thead>
						    <tbody>
						        <tr>
						        	<td>1</td>
						            <td><a href="#!" data-toggle="modal" data-target="#gallery">Beautiful Bathroom on Riseholme road</a></td>
						            <td>Lincoln</td>
						            <td><p>Minimal</p> <p>Cozy Bathrooms</p></td>
						            <td>16/05/2019 16:00</td>
									<td>
										<button class="btn btn--auto-size btn--dark-transparent btn--admin">Edit</button>
									</td>
									<td>
										<button class="btn btn--auto-size btn--dark-transparent btn--admin">Delete</button>
									</td>
						        </tr>
						        <tr>
						        	<td>2</td>
						            <td><a href="#!" data-toggle="modal" data-target="#gallery">Beautiful Bathroom on Riseholme road</a></td>
						            <td>Lincoln</td>
						            <td><p>Minimal</p> <p>Cozy Bathrooms</p></td>
						            <td>16/05/2019 16:00</td>
									<td>
										<button class="btn btn--auto-size btn--dark-transparent btn--admin">Edit</button>
									</td>
									<td>
										<button class="btn btn--auto-size btn--dark-transparent btn--admin">Delete</button>
									</td>
						        </tr>
						        <tr>
						        	<td>3</td>
						            <td><a href="#!" data-toggle="modal" data-target="#gallery">Beautiful Bathroom on Riseholme road</a></td>
						            <td>Lincoln</td>
						            <td><p>Minimal</p> <p>Cozy Bathrooms</p></td>
						            <td>16/05/2019 16:00</td>
									<td>
										<button class="btn btn--auto-size btn--dark-transparent btn--admin">Edit</button>
									</td>
									<td>
										<button class="btn btn--auto-size btn--dark-transparent btn--admin">Delete</button>
									</td>
						        </tr>
						        

						    </tbody>
						</table>
					</div>
				</div>





			</div>
		</div>
		<!-- end admin__gallery -->



	</div>
	<!-- end admin__wrapper -->

	

</main>
 

  

    

<?php 
  include 'footer.php';
?>