<?php 
  $page = 'galleries';
  $title = 'Five Star Bathroom';
  include 'meta.php';
  include 'header.php';
?>

<body>
 

<main class="main--space-top">

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="landing__header">
					<h1 class="landing__title">Galleries</h1>
					<hr>
				</div>
			</div>

			<div class="col-lg-12">
				<div class="isotope button-group filters-button-group d-none d-lg-flex">
					<button class="btn btn--auto-size btn--dark-transparent active" data-filter="*">All Bathrooms</button>
					<button class="btn btn--auto-size btn--dark-transparent" data-filter=".minimal">Minimal Design</button>
					<button class="btn btn--auto-size btn--dark-transparent" data-filter=".cozy">Cozy Bathrooms</button>
					<button class="btn btn--auto-size btn--dark-transparent" data-filter=".luxury">Luxury</button>
					<button class="btn btn--auto-size btn--dark-transparent" data-filter=".wooden">Wooden Style</button>
					<button class="btn btn--auto-size btn--dark-transparent" data-filter=".small">Small Bathrooms</button>
				</div>

				<div class="isotope--mobile d-block d-lg-none">
					<select class="filters-select">
						<option value="*" selected>All Bathrooms</option>
						<option value=".minimal">Minimal Design</option>
						<option value=".cozy">Cozy Bathrooms</option>
						<option value=".luxury">Luxury</option>
						<option value=".wooden">Wooden Style</option>
						<option value=".small">Small Bathrooms</option>
					</select>
				</div>
			</div>
		</div>
	</div>

	<!-- galleries -->
	<section class="galleries">
		<div class="container-fluid px-0">
			<div class="row no-gutters grid">

				<div class="col-md-6 col-lg-4 gallery-item minimal">
					<a href="#!" class="gallery__image" data-toggle="modal" data-target="#gallery">
						<div class="gallery__caption">
							<h3>Minimal Design</h3>
						</div>
						<div class="gallery--image-into-bg" style="background-image: url(img/galleries/category1.jpg);"></div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 gallery-item cozy">
					<a href="#!" class="gallery__image" data-toggle="modal" data-target="#gallery">
						<div class="gallery__caption">
							<h3>Cozy Bathrooms</h3>
						</div>
						<div class="gallery--image-into-bg" style="background-image: url(img/galleries/category2.jpg);"></div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 gallery-item luxury">
					<a href="#!" class="gallery__image" data-toggle="modal" data-target="#gallery">
						<div class="gallery__caption">
							<h3>Luxury</h3>
						</div>
						<div class="gallery--image-into-bg" style="background-image: url(img/galleries/category3.jpg);"></div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 gallery-item wooden">
					<a href="#!" class="gallery__image" data-toggle="modal" data-target="#gallery">
						<div class="gallery__caption">
							<h3>Wooden Style</h3>
						</div>
						<div class="gallery--image-into-bg" style="background-image: url(img/galleries/category4.jpg);"></div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 gallery-item small">
					<a href="#!" class="gallery__image" data-toggle="modal" data-target="#gallery">
						<div class="gallery__caption">
							<h3>Small Bathrooms</h3>
						</div>
						<div class="gallery--image-into-bg" style="background-image: url(img/galleries/category5.jpg);"></div>
					</a>
				</div>

				<div class="col-md-6 col-lg-4 gallery-item minimal">
					<a href="#!" class="gallery__image" data-toggle="modal" data-target="#gallery">
						<div class="gallery__caption">
							<h3>Minimal Design</h3>
						</div>
						<div class="gallery--image-into-bg" style="background-image: url(img/galleries/category1.jpg);"></div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 gallery-item cozy">
					<a href="#!" class="gallery__image" data-toggle="modal" data-target="#gallery">
						<div class="gallery__caption">
							<h3>Cozy Bathrooms</h3>
						</div>
						<div class="gallery--image-into-bg" style="background-image: url(img/galleries/category2.jpg);"></div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 gallery-item luxury">
					<a href="#!" class="gallery__image" data-toggle="modal" data-target="#gallery">
						<div class="gallery__caption">
							<h3>Luxury</h3>
						</div>
						<div class="gallery--image-into-bg" style="background-image: url(img/galleries/category3.jpg);"></div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 gallery-item wooden">
					<a href="#!" class="gallery__image" data-toggle="modal" data-target="#gallery">
						<div class="gallery__caption">
							<h3>Wooden Style</h3>
						</div>
						<div class="gallery--image-into-bg" style="background-image: url(img/galleries/category4.jpg);"></div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4 gallery-item small">
					<a href="#!" class="gallery__image" data-toggle="modal" data-target="#gallery">
						<div class="gallery__caption">
							<h3>Small Bathrooms</h3>
						</div>
						<div class="gallery--image-into-bg" style="background-image: url(img/galleries/category5.jpg);"></div>
					</a>
				</div>
				

			</div>
		</div>
	</section>
	<!-- end galleries -->


</main>
 

  

    

<?php 
  include 'footer.php';
?>