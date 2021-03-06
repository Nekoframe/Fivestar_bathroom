<?php 
  $page = 'home';
  $title = 'Five Star Bathroom';
  include 'meta.php';
  include 'header.php';
?>

<body>
 

<main>
	<div class="main--bubble">
		<div class="bubble x1"></div>
	    <div class="bubble x2"></div>
	    <div class="bubble x3"></div>
	    <div class="bubble x4"></div>
	    <div class="bubble x5"></div>
	    <div class="bubble x6"></div>
	    <div class="bubble x7"></div>
	    <div class="bubble x8"></div>
	    <div class="bubble x9"></div>
	    <div class="bubble x10"></div>
	</div>

	<!-- banner -->
	<section class="banner">
		<div class="banner--overlay"></div>

		<div class="banner__text">
			<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
			<h1>LOREMIPSUM</h1>
		</div>
	</section>
	<!-- end banner -->

	<!-- services -->
	<section class="services">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<h3 class="services__header">Services</h3>
					<h1 class="services__title">Professional Bathroom Designer</h1>
					<p class="services__description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta 
sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, 
qui dolorem ipsum quia dolor sit amet, consectetu</p>

					<div class="services__button">
						<button class="btn btn--fixed-size btn--dark-transparent">Read More</button>
					</div>
				</div>
				<div class="offset-lg-2 col-lg-3">
					<figure><img src="img/services.jpg" alt="services" class="img-fluid services__image"></figure>
				</div>
			</div>
		</div>
	</section>
	<!-- end services -->

	<!-- galleries -->
	<section class="galleries">
		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-md-6 col-lg-4">
					<a href="#!" class="gallery__image" data-toggle="modal" data-target="#gallery">
						<div class="gallery__caption">
							<h3>Minimal Design</h3>
						</div>
						<div class="gallery--image-into-bg" style="background-image: url(img/galleries/category1.jpg);"></div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4">
					<a href="#!" class="gallery__image" data-toggle="modal" data-target="#gallery">
						<div class="gallery__caption">
							<h3>Cozy Bathrooms</h3>
						</div>
						<div class="gallery--image-into-bg" style="background-image: url(img/galleries/category2.jpg);"></div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4">
					<a href="#!" class="gallery__image" data-toggle="modal" data-target="#gallery">
						<div class="gallery__caption">
							<h3>Luxury</h3>
						</div>
						<div class="gallery--image-into-bg" style="background-image: url(img/galleries/category3.jpg);"></div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4">
					<a href="#!" class="gallery__image" data-toggle="modal" data-target="#gallery">
						<div class="gallery__caption">
							<h3>Wooden Style</h3>
						</div>
						<div class="gallery--image-into-bg" style="background-image: url(img/galleries/category4.jpg);"></div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4">
					<a href="#!" class="gallery__image" data-toggle="modal" data-target="#gallery">
						<div class="gallery__caption">
							<h3>Small Bathrooms</h3>
						</div>
						<div class="gallery--image-into-bg" style="background-image: url(img/galleries/category5.jpg);"></div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="gallery--see-more-box">
						<div class="gallery__button">
							<button class="btn btn--fixed-size btn--light-transparent">See more</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end galleries -->


	<!-- testimonial -->
	<section class="testimonial">
		<h2 class="testimonial__title">Ratings and Reviews</h2>
		<div class="container">
			<div class="row no-gutters owl-carousel owl-theme" id="testimonial__carousel">

				<div class="testimonial__card">
					<div class="testimonial__inner">
						<div class="testimonial__thumb-box">
							<figure class="textimonial__thum">
								<img src="img/reviews/review2.jpg" class="img-fluid" alt="Thanawan Pinlaem">
							</figure>
						</div>
						<div class="testimonial__content-box">
							<h4>Thanawan P.</h4>
							<strong>Lincoln</strong>
							<div class="testimonial__rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt"></i>
							</div>
						</div>
					</div>
					<div class="testimonial__review-box">
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
					</div>
				</div>

				<div class="testimonial__card">
					<div class="testimonial__inner">
						<div class="testimonial__thumb-box">
							<figure class="textimonial__thum">
								<img src="img/reviews/review1.jpg" class="img-fluid" alt="Thanawan Pinlaem">
							</figure>
						</div>
						<div class="testimonial__content-box">
							<h4>Sebastian G.</h4>
							<strong>London</strong>
							<div class="testimonial__rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
							</div>
						</div>
					</div>
					<div class="testimonial__review-box">
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
					</div>
				</div>


				<div class="testimonial__card">
					<div class="testimonial__inner">
						<div class="testimonial__thumb-box">
							<figure class="textimonial__thum">
								<img src="img/reviews/review1.jpg" class="img-fluid" alt="Thanawan Pinlaem">
							</figure>
						</div>
						<div class="testimonial__content-box">
							<h4>Maggie P.</h4>
							<strong>London</strong>
							<div class="testimonial__rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
						</div>
					</div>
					<div class="testimonial__review-box">
						Sed ut perspiciatis unde omnis iste natus 
error sit voluptatem accusantium 
doloremque laudantium, totam rem aperiam,
eaque ipsa quae ab illo inventore veritatis et
quasi architecto beatae vitae dicta sunt
explicabo. Nemo enim ipsam voluptatem.
					</div>
				</div>


				<div class="testimonial__card">
					<div class="testimonial__inner">
						<div class="testimonial__thumb-box">
							<figure class="textimonial__thum">
								<img src="img/reviews/review1.jpg" class="img-fluid" alt="Thanawan Pinlaem">
							</figure>
						</div>
						<div class="testimonial__content-box">
							<h4>Rebecca L.</h4>
							<strong>Nottingham</strong>
							<div class="testimonial__rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
						</div>
					</div>
					<div class="testimonial__review-box">
						Nemo enim ipsam voluptatem
quia voluptas sit aspernatur aut odit aut
fugit, sed quia consequuntur magni
dolores eos qui ratione voluptatem
sequi nesciunt. Neque porro quisquam
est, qui dolorem ipsum quia dolor sit
amet,
					</div>
				</div>

				<div class="testimonial__card">
					<div class="testimonial__inner">
						<div class="testimonial__thumb-box">
							<figure class="textimonial__thum">
								<img src="img/reviews/review1.jpg" class="img-fluid" alt="Thanawan Pinlaem">
							</figure>
						</div>
						<div class="testimonial__content-box">
							<h4>Alan W.</h4>
							<strong>Grantham</strong>
							<div class="testimonial__rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
							</div>
						</div>
					</div>
					<div class="testimonial__review-box">
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
					</div>
				</div>


				<div class="testimonial__card">
					<div class="testimonial__inner">
						<div class="testimonial__thumb-box">
							<figure class="textimonial__thum">
								<img src="img/reviews/review1.jpg" class="img-fluid" alt="Thanawan Pinlaem">
							</figure>
						</div>
						<div class="testimonial__content-box">
							<h4>Harry P.</h4>
							<strong>London</strong>
							<div class="testimonial__rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
						</div>
					</div>
					<div class="testimonial__review-box">
						Sed ut perspiciatis unde omnis iste natus 
error sit voluptatem accusantium 
doloremque laudantium, totam rem aperiam,
eaque ipsa quae ab illo inventore veritatis et
quasi architecto beatae vitae dicta sunt
explicabo. Nemo enim ipsam voluptatem.
					</div>
				</div>


				<div class="testimonial__card">
					<div class="testimonial__inner">
						<div class="testimonial__thumb-box">
							<figure class="textimonial__thum">
								<img src="img/reviews/review1.jpg" class="img-fluid" alt="Thanawan Pinlaem">
							</figure>
						</div>
						<div class="testimonial__content-box">
							<h4>Rebecca L.</h4>
							<strong>Nottingham</strong>
							<div class="testimonial__rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
						</div>
					</div>
					<div class="testimonial__review-box">
						Nemo enim ipsam voluptatem
quia voluptas sit aspernatur aut odit aut
fugit, sed quia consequuntur magni
dolores eos qui ratione voluptatem
sequi nesciunt. Neque porro quisquam
est, qui dolorem ipsum quia dolor sit
amet,
					</div>
				</div>

				<div class="testimonial__card">
					<div class="testimonial__inner">
						<div class="testimonial__thumb-box">
							<figure class="textimonial__thum">
								<img src="img/reviews/review1.jpg" class="img-fluid" alt="Thanawan Pinlaem">
							</figure>
						</div>
						<div class="testimonial__content-box">
							<h4>Alan W.</h4>
							<strong>Grantham</strong>
							<div class="testimonial__rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
							</div>
						</div>
					</div>
					<div class="testimonial__review-box">
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
					</div>
				</div>


				<div class="testimonial__card">
					<div class="testimonial__inner">
						<div class="testimonial__thumb-box">
							<figure class="textimonial__thum">
								<img src="img/reviews/review1.jpg" class="img-fluid" alt="Thanawan Pinlaem">
							</figure>
						</div>
						<div class="testimonial__content-box">
							<h4>Harry P.</h4>
							<strong>London</strong>
							<div class="testimonial__rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
						</div>
					</div>
					<div class="testimonial__review-box">
						Sed ut perspiciatis unde omnis iste natus 
error sit voluptatem accusantium 
doloremque laudantium, totam rem aperiam,
eaque ipsa quae ab illo inventore veritatis et
quasi architecto beatae vitae dicta sunt
explicabo. Nemo enim ipsam voluptatem.
					</div>
				</div>


				
			</div>
		</div>
	</section>
	<!-- end testimonial -->


</main>
 

  

    

<?php 
  include 'footer.php';
?>