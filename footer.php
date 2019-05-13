<div class="nav--top">
	<a class="nav--top__link" href="#top"><i class="fas fa-chevron-up fa-2x"></i></a>
</div>
<footer>
	<p class="footer__copyright">Copyright <i class="far fa-copyright"></i> 2019 Five Star Bathroom.</p>
</footer>





<!-- Modal -->
<div class="modal fade gallery__modal" id="gallery" tabindex="-1" role="dialog" aria-labelledby="gallery" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header gallery__modal__head">
        <h5 class="modal-title gallery__modal__title" id="gallery_title">Album 01 - Luxury Bathroom</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body gallery__modal_content">
        

        <div id="album01" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="img/galleries/album01/photo1.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/galleries/album01/photo1.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/galleries/album01/photo1.jpg" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#album01" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#album01" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>


      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  	$('.nav__list .nav__list__link').on("mouseover", function(){
  		$('.nav__list .nav__list__link').addClass('not--hover');
  		$(this).removeClass('not--hover');
  		$(this).addClass('hover');
  	});

  	$('.nav__list .nav__list__link').on("mouseleave", function(){
  		$('.nav__list .nav__list__link').removeClass('hover');
  		$('.nav__list .nav__list__link').removeClass('not--hover');
  	});
</script>

<!-- Owl Carousel -->
<script src="owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	  $("#testimonial__carousel").owlCarousel({
	  	autoPlay: 3000,
	  	loop: true,
	    margin: 30,
	    item: 3,
	    // responsiveClass: true,
	    responsive:{
	        0:{
	            items: 1,
	            dots: true
	        },
	        768:{
	            items: 2,
	            dots: true
	        },
	        1000:{
	            items: 3,
	            dots: true
	        }
	    }
	  });
	});
</script>

<!-- Smooth Scrolling -->
<script type="text/javascript">
	// Select all links with hashes
	$('a[href*="#"]')
	  // Remove links that don't actually link to anything
	  .not('[href="#"]')
	  .not('[href="#0"]')
	  .not('[href="#album01"]')
	  .click(function(event) {
	    // On-page links
	    if (
	      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	      && 
	      location.hostname == this.hostname
	    ) {
	      // Figure out element to scroll to
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      // Does a scroll target exist?
	      if (target.length) {
	        // Only prevent default if animation is actually gonna happen
	        event.preventDefault();
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000, function() {
	          // Callback after animation
	          // Must change focus!
	          var $target = $(target);
	          $target.focus();
	          if ($target.is(":focus")) { // Checking if the target was focused
	            return false;
	          } else {
	            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	            $target.focus(); // Set focus again
	          };
	        });
	      }
	    }
	  });
</script>

<!-- Show/Hide nav top button -->
<script type="text/javascript">
	$(window).scroll(function (event) {
	    var scroll = $(window).scrollTop();
	    if (scroll > 200) {
	    	$('.nav--top').addClass('active');
	    }
	    else{
	    	$('.nav--top').removeClass('active');
	    }
	});
</script>

<!-- Isotope Gallery -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script type="text/javascript">
	// init Isotope
	var $grid = $('.grid').isotope({
	  itemSelector: '.gallery-item',
	  layoutMode: 'fitRows'
	});

	// filter functions
	var filterFns = {
	  // show if number is greater than 50
	  numberGreaterThan50: function() {
	    var number = $(this).find('.number').text();
	    return parseInt( number, 10 ) > 50;
	  },
	};


	// bind filter button click
	$('.filters-button-group').on( 'click', 'button', function() {
	  var filterValue = $( this ).attr('data-filter');
	  // use filterFn if matches value
	  filterValue = filterFns[ filterValue ] || filterValue;
	  $grid.isotope({ filter: filterValue });
	});


	// change active class on buttons
	$('.button-group').each( function( i, buttonGroup ) {
	  var $buttonGroup = $( buttonGroup );
	  $buttonGroup.on( 'click', 'button', function() {
	    $buttonGroup.find('.active').removeClass('active');
	    $( this ).addClass('active');
	  });
	});


	// bind filter on select change
	$('.filters-select').on( 'change', function() {
	  // get filter value from option value
	  var filterValue = this.value;
	  // use filterFn if matches value
	  filterValue = filterFns[ filterValue ] || filterValue;
	  $grid.isotope({ filter: filterValue });
	});
</script>

<!-- Google reCaptcha -->
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
</script>

  </body>
</html>