 <!-- Stylesheets -->

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="newslider/owl.theme.default.min.css">
    
    <script src="newslider/owl.carousel.js"></script>
 <?php include('head.php'); ?> <?php include('header.php'); ?> <div class="page-title" > <div class="overlay padd-tb-130" style="background:url('top-banner/about-us-top-banner.jpg'); background-size:cover;"> <div class="container"> 				<div class="row">					<div class="col-md-12">                    	<div>							<div class="title">                            <h2>TESTIMONIAL</h2>                            </div>                        </div>					</div>				</div>			</div>		</div>		</div><br><br>	<style>		.carousel-inner .active.left { left: -33%; }.carousel-inner .next        { left:  33%!important; }.carousel-inner .prev        { left: -33%; }.carousel-control.left,.carousel-control.right {background-image:none;}	.carousel-control .glyphicon-chevron-left, .carousel-control .icon-prev {    left: -50%!important;color:#313030}	  .carousel-control .glyphicon-chevron-right, .carousel-control .icon-next {   left: 131%;color:#313030}	</style> <section id="demos">
      <div class="container" style="margin-top: 20px;">
      <div class="row">
          <div class="col-md-12">                    <div class="col-md-12">							<div class="title">						<h2 class="color-black" style="font-size:26px;">WHAT OUR AFFILIATES SAY</h2>                        </div></div>					</div> <br/><br/>
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme">
            <div class="item col-sm-12">
              <a href="images/testi/t1.jpg" data-lightbox="roadtrip"><img src="images/testi/t1.jpg" data-lightbox="roadtrip"class=" thumbnail img-responsive"style="border: 16px solid #f1f1f1;"></a>
            <div class="content"  style="padding: 20px; border: 2px solid #f1f1f1;text-align:justify;line-height:normal;margin-left:2%;"><!--<a href="#">--><br><br>Atul, Swapnil, Susmit & the team <br><br>Thank you for helping us find our dream housewith real estate prices skyrocketing, it would have been very difficult for us to buy our dream house without proper financial planning & guidance.<br><br>Atul, Swapnil, Susmit managed everything perfectly well. Be it arranging housing loan with the bank or following up seller/builder on pending work in the flat. They did it with passion and commitment.<br><br>Thank you once again for your help<br><br><font style="text-align:right;display:block;color:black;"><b>Vihang Vasudev Tole</b></font><br><br></div>
            </div>
            
            <div class="item col-sm-12">
              <a href="images/testi/t4.jpg" data-lightbox="roadtrip"><img src="images/testi/t4.jpg" data-lightbox="roadtrip"class=" thumbnail img-responsive"style="border: 16px solid #f1f1f1;"></a>
            
            <div class="content"  style="display: none;padding: 20px; border: 2px solid #f1f1f1;text-align:justify;line-height:normal;margin-left:2%;"><!--<a href="#">--><br><br>Atul, Swapnil, Susmit & the team <br><br>Thank you for helping us find our dream housewith real estate prices skyrocketing, it would have been very difficult for us to buy our dream house without proper financial planning & guidance.<br><br>Atul, Swapnil, Susmit managed everything perfectly well. Be it arranging housing loan with the bank or following up seller/builder on pending work in the flat. They did it with passion and commitment.<br><br>Thank you once again for your help<br><br><font style="text-align:right;display:block;color:black;"><b>Vihang Vasudev Tole</b></font><br><br></div>
            </div>
            <div class="item col-sm-12">
              <a href="images/testi/t3.jpg" data-lightbox="roadtrip"><img src="images/testi/t3.jpg" data-lightbox="roadtrip"class=" thumbnail img-responsive"style="border: 16px solid #f1f1f1;margin-bottom:62.7%;"></a>
            
            <div class="content"  style="display: none;padding: 20px; border: 2px solid #f1f1f1;text-align:justify;line-height:normal;margin-left:2%;"><!--<a href="#">--><br><br>Atul, Swapnil, Susmit & the team <br><br>Thank you for helping us find our dream housewith real estate prices skyrocketing, it would have been very difficult for us to buy our dream house without proper financial planning & guidance.<br><br>Atul, Swapnil, Susmit managed everything perfectly well. Be it arranging housing loan with the bank or following up seller/builder on pending work in the flat. They did it with passion and commitment.<br><br>Thank you once again for your help<br><br><font style="text-align:right;display:block;color:black;"><b>Vihang Vasudev Tole</b></font><br><br></div>
            </div>
          </div>
          
          </div>
          <section style="position:relative;">
              <img src="images/testi.png" class="img-responsive" style="position:absolute;right:0;bottom:0;">			
          </section>
          <script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  900: {
                    items: 3,
                    nav: false
                  },
                  2000: {
                    items: 3,
                    nav: true,
                    loop: false,
                    margin: 20
                  }
                }
              })
            })
          </script>
        </div>
      </div>
    </section>	</div>	
    <br>		
    <style>		.carousel-indicators li {				    
    border: 1px solid #772626;			
    width: 11px;    height: 11px;    
    }
    .carousel-indicators{	
    bottom: -65px;		
    }	
    .carousel-indicators .active {	    
    background-color: #a01a67;	
    }		
    </style>	
   	<br><br><br>	<?php include('footerjs.php'); ?><?php include('footer.php');?><script>    lightbox.option({      'resizeDuration': 200,      'wrapAround': false    })</script><script>jQuery('#myCarousel1').carousel({  interval: 10000})jQuery('.carousel .item').each(function(){  var next = $(this).next();  if (!next.length) {    next = $(this).siblings(':first');  }  next.children(':first-child').clone().appendTo($(this));    if (next.next().length>0) {    next.next().children(':first-child').clone().appendTo($(this));  }  else {  	jQuery(this).siblings(':first').children(':first-child').clone().appendTo($(this));  }});</script>