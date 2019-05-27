<div class="nav--top">
	<a class="nav--top__link" href="#top"><i class="fas fa-chevron-up fa-2x"></i></a>
</div>
<footer>
	<p class="footer__copyright">Copyright <i class="far fa-copyright"></i> 2019 Five Star Bathroom.</p>
  <p class="footer__copyright">Designed by <a href="http://zbframe.com" target="_blank">ZBframe</a>.</p>
</footer>





<!-- Modal Backend -->
<div class="modal fade gallery__modal" id="gallery" tabindex="-1" role="dialog" aria-labelledby="gallery" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header gallery__modal__head">
        <h5 class="modal-title gallery__modal__title" id="gallery_title">Beautiful Bathroom on Riseholme road</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body gallery__modal_content">
        

        <div id="album01" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="../img/galleries/album01/photo1.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="../img/galleries/album01/photo1.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="../img/galleries/album01/photo1.jpg" alt="Third slide">
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

<!-- banner uploader -->
<script>
   function bannerFile(){
       var preview = document.querySelector('#banner__example'); //selects the query named img
       var file    = document.querySelector('#banner_upload').files[0]; //sames as here
       var reader  = new FileReader();

       reader.onloadend = function (e) {
           $('#banner__example').css('background', 'transparent url('+e.target.result +') bottom center no-repeat');
       }

       if (file) {
           reader.readAsDataURL(file); //reads the data as a URL
       } else {
           $('#banner__example').css('background', 'transparent url("../img/banner.jpg") bottom center no-repeat');
       }
  }

  // previewFile(); 
</script>

<!-- service uploader -->
<script>
	$(document).ready(function(){
		// Highlight service
		var preview = document.querySelector('#service__example');
		var upload = document.querySelector('#service__upload');
		$('#service__upload').on('change', function(){
			serviceFile(preview, upload);
		});


		var preview1 = document.querySelector('#service__example1');
		var upload1 = document.querySelector('#service__upload1');
		$('#service__upload1').on('change', function(){
			serviceFile(preview1, upload1);
		});

		

	});
   function serviceFile(preview, upload){
       //var preview = preview('#service__example'); //selects the query named img
       var file    = upload.files[0]; //sames as here
       var reader  = new FileReader();

       reader.onloadend = function (e) {
          preview.src = reader.result;
       }

       if (file) {
           reader.readAsDataURL(file); //reads the data as a URL
       } else {
           preview.src = "";
       }
  }

  // previewFile(); 
</script>


<!-- Album uploader -->
<!-- http://jsfiddle.net/2xES5/28/ -->
<script type="text/javascript">
	window.onload = function(){   
    //Check File API support
    if(window.File && window.FileList && window.FileReader)
    {
        $('#album_upload').on("change", function(event) {
            var files = event.target.files; //FileList object
            var output = document.getElementById("result");
            for(var i = 0; i< files.length; i++)
            {
                var file = files[i];
                //Only pics
                // if(!file.type.match('image'))
                if(file.type.match('image.*')){
                    // if(this.files[0].size < 2097152){    
                    if(this.files[0]){
                  // continue;
                    var picReader = new FileReader();
                    picReader.addEventListener("load",function(event){
                        var picFile = event.target;
                        var div = document.createElement("div");
                        div.setAttribute('class', 'col-md-3 col-lg-3 album__image');
                        // div.innerHTML = "<img class='img-fluid thumbnail' src='" + picFile.result + "'" +
                        //         "title='preview image'/>";
                        div.innerHTML = "<img class='img-fluid thumbnail' src='" + picFile.result + "'" +
                                "title='preview image'/>"+
                                "<div class='btn btn--close remove'>X</div>";
                        output.insertBefore(div,null);            
                    });
                    //Read the image
                    $('#clear, #result').show();
                    picReader.readAsDataURL(file);
                    }else{
                        // alert("Image Size is too big. Minimum size is 2MB.");
                        $(this).val("");
                    }
                }else{
                alert("You can only upload image file.");
                $(this).val("");
            }
            }                               
           
        });
    }
    else
    {
        console.log("Your browser does not support File API");
    }
}

   /*$('#album_upload').on("click", function() {
        $('.thumbnail').parent().remove();
        $('#result').hide();
        $(this).val("");
    });*/

    /*$('.btn--close').on("click", function() {
        $('.thumbnail').parent().remove();
        $('#result').hide();
        $('#album_upload').val("");
        $(this).hide();
    });*/

    $(document).on("click", ".remove", function() {
        $(this).parent().remove();
    });

    

</script>

<!-- datatable -->
<script type="text/javascript">
	$(document).ready( function () {
	    $('#testimonial_table').DataTable({
	    	paging: false,
	    	info: false,
	    	// lengthMenu: [1,2],
	    });


	    $('#album_table').DataTable({
	    	paging: true,
	    	info: true,
	    	lengthMenu: [5,10],
	    });
	} );
</script>



  </body>
</html>