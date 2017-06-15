<?php include('head.php'); ?><?php include('header.php'); ?> 
<?php
	error_reporting(0);
	if(isset($_POST['submit'])){
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= 'From: '.$_POST['email'].'' . "\r\n";				

		$body .= "<table><tr><td>Name : </td><td>" . $_POST['name'] . "</td></tr>"
					."<tr><td>Email : </td><td>" . $_POST['email'] . "</td></tr>"
					."<tr><td>Contact: </td><td>" . $_POST['phone'] . "</td></tr>"
					."<tr><td>Services : </td><td>" . $_POST['service'] . "</td></tr></table>";					

		$emails = 'info@excellinkfin.com, gaurav@webdakaar.com';
		if (mail($emails,'Message from Excellink',$body,$headers)) { /* $to_mail place ur email id*/
			echo("<script>alert('Thank You');</script>");
		}else {
			echo("<script>alert('Something Went Wrong');</script>");
		}
	}
?>
<!-- Add header Code Here -->
<style>
        /* code for animated blinking cursor */
        .typed-cursor{
            opacity: 1;
            font-weight: 100;
            -webkit-animation: blink 0.7s infinite;
            -moz-animation: blink 0.7s infinite;
            -ms-animation: blink 0.7s infinite;
            -o-animation: blink 0.7s infinite;
            animation: blink 0.7s infinite;
        }
        @-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-webkit-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-moz-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-ms-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-o-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
    </style>
</head>
<body>
	<!-- HEADER -->
	
	<!-- MAIN SLIDER -->
	<div class="rev_slider_wrapper n-margin-40">			
		<!-- START REVOLUTION SLIDER 5.0 auto mode -->
		<div id="rev_slider_1" class="rev_slider rev_slider_1"  data-version="5.0">
			<ul>	
				<!-- SLIDE 1  -->
				<li data-transition="fade">
					<!-- MAIN IMAGE -->
					<img src="banner/banner1.jpg" >
					<div class="tp-caption tp-resizeme slider-title"
						id="slide-1-layer-1" 
						data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
						data-y="center" data-voffset="['-110','-110','-100','-80']"
						data-width="['auto','auto','auto','300']"
						data-height="['auto','auto','auto','auto']"
						data-fontsize="['50','50','40','30']"
						data-lineheight="['60','60','40','30']"
						data-whitespace="['nowrap','nowrap','nowrap','normal']"
						data-transform_idle="o:1;"
			 
						data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-start="800" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 50; white-space: nowrap; font-weight: 700; color: rgb(228, 168, 30); font-family: 'Montserrat', sans-serif; text-align: right;">FINANCIAL EXPERTS
					</div>
					
					<div class="tp-caption tp-resizeme hidden-xs"
						id="slide-1-layer-2" 
						data-x="center" data-hoffset="-150" 
						data-y="center" data-voffset="-60"
						data-width="auto"
						data-height="auto"
						data-fontsize="25"
						data-lineheight="30"
						data-whitespace="nowrap"
						data-transform_idle="o:1;"
			 
						data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-start="900" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 25; white-space: nowrap; font-weight: 400; color: rgb(228, 168, 30); text-align: center;">
						<div id="typed-strings" style="width:100%;float:left;">
							<p style="text-align:right;">Financial Planning | Simplified</p>
							<p style="text-align:right;">Corporate Loans | Simplified</p>
							<p style="text-align:right;">Retail Loans | Simplified</p>
						</div>
						
						<span id="typed" style="white-space:pre;"></span>
					</div>
					<!--<div class="tp-caption tp-resizeme hidden-xs"
						id="slide-1-layer-2" 
						data-x="center" data-hoffset="['275','0','0','0']" 
						data-y="center" data-voffset="['-60','10','0','0']" 
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-fontsize="['25','25','25','14']"
						data-lineheight="['30','30','30','28']"
						data-whitespace="['nowrap','nowrap','nowrap','normal']"
						data-transform_idle="o:1;"
			 
						data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-start="900" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 25; white-space: nowrap; font-weight: 400; color: rgb(228, 168, 30); text-align: center;">
						<span>&nbsp;&nbsp;&nbsp;Simplified</span>
					</div>-->
				</li>
				
			</ul>				
		</div><!-- END REVOLUTION SLIDER -->
	</div><!-- END REVOLUTION SLIDER WRAPPER -->

	
	<!-- MAIN CONTENT START HERE -->
	<section class="body-content">

		<!-- ABOUT SECTION -->
		<div id="about" class="about padd-100x30">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-sm-12 res-center res-mrg-50">
						<!-- SECTION HEADING -->
						<div class="section-heading">
							<div class="title">
								<h2 class="color-black">ABOUT EXCELLINK</h2>
							</div>
						</div>
						<p class="mrg-bottom-40" style="text-align:justify;">
							Excellink Finservices Pvt. Ltd. was incorporated on September 9, 2011.  The prime focus of the company is to cater financial solutions and advisory to corporates and businesses. As a forward integration to the business profile, the company has recently opened its doors to real estate advisory for retail customers.  Now the company provides one stop shop to prospective home buyers as they can shortlist their dream homes and arrange home finance from various financial institutions and banks.
						</p>
						<!--<button class="btn btn-default">OUR SERVICE</button>-->
					</div>
					<div class="col-md-5 col-sm-12">
						<div class="fun-box">
							<div class="row">
								<div class="col-md-12">
									<div class="fun-factor" style="position:relative;">
										<h2 class="color-blue counter">50</h2>
										
													<span style="position: absolute;
														top: 4px;
														left: 38px;
														font-size: 40px;
														color: #aa176b;">+</span>
													
																							
										<span>LOANS SANCTIONED</span>
									</div>
									<div class="fun-factor pull-right" style="position:relative;">
										<h2 class="color-blue counter">50</h2>
										<span style="position: absolute;
														top: 4px;
														left: 106px;
														font-size: 40px;
														color: #aa176b;">+</span>
										
										<span>SATISFIED CLIENTS</span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="fun-factor fun-factor-center">
										<div class="display-inline bg-blue">
											<span class="color-white">FROM</span>
											<h2 class="color-drak-orange" style="color:#fff;">5</h2>
											<span class="letter-specing-2 color-white">YEARS</span>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="fun-factor pull-left" style="position:relative;">
										<h2 class="color-blue counter">90</h2>
										<span style="position: absolute;
														top: 4px;
														left: 38px;
														font-size: 40px; 
														color: #aa176b;">+</span>
										<span>RETAILS PRODUCTS</span>
									</div>
									<div class="fun-factor pull-right" style="position:relative;">
										<h2 class="color-blue counter">15</h2>
										<span style="position: absolute;
														top: 4px;
														left: 71px;
														font-size: 40px;
														color: #aa176b;">+</span>

										<span>AFFILIATIONS</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- /.END ABOUT SECTION -->



		<!-- SERVICE SECTION -->
		<div id="service" class="padd-30x20 bg-gray-light">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- SECTION HEADING -->
						<div class="section-heading">
							<div class="title">
								<h2 class="color-black">WHAT DO WE DO AT EXCELLINK</h2>
							</div>
						</div>
					</div>
					<!-- SINGLE ITEM -->
					<div class="col-md-3 col-sm-12">
						<div class="service-item">
							<div class="title">
								<div class="font-icon">
									<img alt="" src="services/Financial-Modelling-Analysis.png" class="img-responsive">
								</div>
								<h5 class="inline"><a href="financial-modelling-analysis.php">Financial Analysis</a></h5>
							</div>
							<p>
								We design detailed company/asset/portfolio specific models using your historical financial performance and futuristic requirements. <a href="financial-modelling-analysis.php">Learn More</a>
							</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="service-item">
							<div class="title">
								<div class="font-icon">
									<img alt="" src="services/Debt-Syndication.png" class="img-responsive">
								</div>
								<h5 class="inline"><a href="debt-syndication.php">Debt<br/>Syndication</a></h5>
							</div>
							<p>
								We leverage debt as an instrument to raise funds through various lending institutions for Businesses and Corporates. <a href="debt-syndication.php">Learn More</a>
							</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="service-item">
							<div class="title">
								<div class="font-icon">
									<img alt="" src="services/Real-Estate-Advisory.png" class="img-responsive">
								</div>
								<h5 class="inline"><a href="real-estate-advisory.php">Real Estate<br/>Advisory</a></h5>
							</div>
							<p>
								We utilize our regional market expertise, to provide our clients with a full spectrum of real estate consulting services. <a href="real-estate-advisory.php">Learn More</a>
							</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="service-item">
							<div class="title">
								<div class="font-icon">
									<img alt="" src="services/Financial-Risk.png" class="img-responsive">
								</div>
								<h5 class="inline"><a href="financial-risk-management.php">Financial Risk<br/>Management</a></h5>
							</div>
							<p>
								We offer a spectrum of cost-effective and consistent financial risk management services which help corporate clients identify, assess, manage, report and limit the risks. <a href="financial-risk-management.php">Learn More</a>
							</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="service-item">
							<div class="title">
								<div class="font-icon">
									<img alt="" src="services/Working-Capital.png" class="img-responsive">
								</div>
								<h5 class="inline"><a href="working-capital-management.php">Working Capital<br/>Management</a></h5>
							</div>
							<p>
								We create a strategy to ensure that you have sufficient cash flow to continue your daily operations and that yet have sufficient funds to satisfy both short-term debt obligations and operating costs. <a href="working-capital-management.php">Learn More</a>
							</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="service-item">
							<div class="title">
								<div class="font-icon">
									<img alt="" src="services/Home-Loan-Provisioning.png" class="img-responsive">
								</div>
								<h5 class="inline"><a href="home-loan-provisioning.php">Home Loan<br/>Provisioning</a></h5>
							</div>
							<p>
								Looking for your dream home? Seen an attractive piece of land but cannot afford to buy it? Already have a land and want to build your dream home? Want to renovate your existing home? Looking at expanding your current home? Have budget issues? High interest rate? Want to save Tax? <a href="home-loan-provisioning.php">Find Out How</a>

							</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="service-item">
							<div class="title">
								<div class="font-icon">
									<img alt="" src="services/Loan-against-property.png" class="img-responsive">
								</div>
								<h5 class="inline"><a href="loan-against-properties.php">Loan against<br/>Property</a></h5>
							</div>
							<p>
								Did you know that your property holds the key to make your dreams come true? Be it residential, or commercial, your property can help you consolidate your debts and fund your dreams. <a href="loan-against-properties.php">Find Out How</a>

							</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="service-item">
							<div class="title">
								<div class="font-icon">
									<img alt="" src="services/Discounting-receivable.png" class="img-responsive">
								</div>
								<h5 class="inline"><a href="discount-receivables.php">Discounting<br/>Receivables</a></h5>
							</div>
							<p>
								Looking for interim funding instead of fixed income? Discount Receivables facility offered by various financial institutions is the solution. <a href="discount-receivables.php">Find Out How</a>

							</p>
						</div>
					</div>
					<!-- /.END SINGLE ITEM -->
				</div>
			</div>
		</div>
		<!-- /.END SERVICE SECTION -->

		<section class="about padd-30x20">
			<div class="container">
				<div class="row">
				
					<div class="col-md-12">
						<!-- SECTION HEADING -->
						<div class="section-heading">
							<div class="title">
								<h2 class="color-black">WHY YOU SHOULD CHOOSE EXCELLINK</h2>
							</div>
						</div>
					</div>
				<div class="about-catagories" style="margin-top: 70px;">
					<div class="row">
						<div class="col-md-3">
							<div class="about-single hover-img">
								<img src="why/Deep-Sector-Knowledge.jpg" alt="about" class="img-responsive">
								<div class="caption">
									<h4 style="text-transform:uppercase;">Deep Sector Knowledge</h4>
								</div>
								<div class="hover-content">
									<h4 style="line-height:21px;margin-top:33px;"><a href="#">Deep Sector Knowledge</a></h4>
									<i class="fa fa-circle" aria-hidden="true"></i>
									<i class="fa fa-circle" aria-hidden="true"></i>
									<i class="fa fa-circle" aria-hidden="true"></i>
									<p>
										Thorough knowledge of global economy and financial markets.
									</p>
								</div>
							</div>	<!-- /.END ABOUT SINGLE -->
						</div>
						<div class="col-md-3">
							<div class="about-single hover-img">
								<img src="why/Customized-Solutions.jpg" alt="about" class="img-responsive">
								<div class="caption">
									<h4 style="text-transform:uppercase;">Customized Solutions</h4>
								</div>
								<div class="hover-content">
									<h4 style="margin-top:38px;line-height:normal;"><a href="#">Customized Solutions</a></h4>
									<i class="fa fa-circle" aria-hidden="true"></i>
									<i class="fa fa-circle" aria-hidden="true"></i>
									<i class="fa fa-circle" aria-hidden="true"></i>
									<p>We customize solutions as per your needs
									</p>
								</div>
							</div>	<!-- /.END ABOUT SINGLE -->
						</div>
						<div class="col-md-3">
							<div class="about-single hover-img">
								<img src="why/Negotiation-expertise.jpg" alt="about" class="img-responsive">
								<div class="caption">
									<h4 style="text-transform:uppercase;">Negotiation Expertise </h4>
								</div>
								<div class="hover-content">
									<h4 style="margin-top:35px;line-height:normal;"><a href="#">Negotiation Expertise </a></h4>
									<i class="fa fa-circle" aria-hidden="true"></i>
									<i class="fa fa-circle" aria-hidden="true"></i>
									<i class="fa fa-circle" aria-hidden="true"></i>
									<p>We negotiate with various stakeholders to get you the best possible deal. 
									</p>
								</div>
							</div>	<!-- /.END ABOUT SINGLE -->
						</div>
						<div class="col-md-3">
							<div class="about-single hover-img">
								<img src="why/Extensive-Network.jpg" alt="about" class="img-responsive">
								<div class="caption">
									<h4 style="text-transform:uppercase;">Extensive Network</h4>
								</div>
								<div class="hover-content">
									<h4 style="margin-top:33px;"><a href="#">Extensive Network</a></h4>
									<i class="fa fa-circle" aria-hidden="true"></i>
									<i class="fa fa-circle" aria-hidden="true"></i>
									<i class="fa fa-circle" aria-hidden="true"></i>
									<p>We leverage our vast network of financial institutions to provide you with a competitive advantage over others. 
									</p>
								</div>
							</div>	<!-- /.END ABOUT SINGLE -->
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>

		<!-- CLIENT SECTION -->
		<div id="client" class="color-white-down" style="padding:0;">
			<div class="container-fluid">
				<div class="row" style="margin:0;">
					<div class="col-sm-4 col-sm-offset-1" style="padding:30px 0">
                      <div class="section-heading">
                      <div class="title">
						<h3 class="heading mrg-bottom-15 res-center">REQUEST A CALL BACK</h3>
                        </div></div>
                        
						<div class="contact-us res-mrg-50 res-center">
							<form action="index.php" method="POST">
								<input type="text" name="name" class="form-control" placeholder="Name:" style="color:#000;">
								<input type="email" name="email" class="form-control" placeholder="Email:" style="color:#000;">
								<input type="tel" name="phone" class="form-control" placeholder="Phone:" style="color:#000;">
								<select name="service" class="form-control">
								      <option selected="selected" value="">Select Service:</option>
								      <option value="Financial Modelling/ Analysis">Financial Analysis</option>
								      <option value="Debt Syndication">Debt Syndication</option>
								      <option value="Real Estate Advisory">Real Estate Advisory</option>
								      <option value="Financial Risk management">Financial Risk management</option>
								      <option value="Working Capital Management">Working Capital Management</option>
								      <option value="Home loans provisioning">Home loans provisioning</option>
								      <option value="Loan against Properties">Loan against Properties</option>
								      <option value="Discount Receivables">Discount Receivables</option>
								    </select>
                                    <select name="location" class="form-control myInputClass" style="color: #9a9797;">
									<option selected="selected" value="">Location:</option>
								      <option value="Mumbai">Mumbai</option>
								      <option value="Navi Mumbai">Navi Mumbai</option>
								      <option value="Thane">Thane</option>
									  </select>
								<input type="submit" class="btn btn-default" value="SUBMIT" name="submit" style="border-bottom: 2px solid #fcc319;">
							</form>
						</div>
					</div>
					<div class="col-sm-6 col-sm-offset-1" style="background-image:url('images/testimonials.jpg'); background-size:cover;background-position:center right;background-repeat:no-repeat;padding: 30px 0 66px 0;">
                    <div class="section-heading">
                      <div class="title">
						<h3 class="heading mrg-bottom-15 res-center" style="margin-left:20px;">TESTIMONIALS</h3>
                        </div></div>
						<!-- TESTIMONIAL CAROUSEL -->
						<div class="row">
							<div class="col-sm-11 col-sm-push-1">
								<div id="testimonial_carousel" class="testimonial-carousel owl-carousel owl-theme">
									<div class="item" style="width: 90%">
										<div class="title-img">
											<!--<img src="images/review/01.jpg" class="img-circle" alt="client">-->
											<div class="testimonial-meta">
												<h6>- Vihang Vasudev Tole</h6>
												
											</div>
										</div>
                                        <p class="comment color-white-down">Atul, Swapnil, Susmit & the team</p>
										<p class="comment color-white-down">
											Thank you for helping us find our dream house with real estate prices skyrocketing, it would have been very difficult for us to buy our dream house without proper financial planning & guidance. Atul, Swapnil, Susmit managed everything perfectly well. Be it arranging housing loan with the bank or following up seller/builder on pending work in the flat. They did it with passion and commitment.
										</p>
                                        <p class="comment color-white-down">Thank you once again for your help</p>
									</div>  <!-- /.END ITEM -->
									
									
								</div>
							</div>
							<div class="col-sm-1 col-sm-pull-11" style="display:none;">
								<div class="testimonial_navigation">
									<i class="fa fa-quote-right" aria-hidden="true"></i>
								</div>
							</div>

						</div>
						<!-- /. END TESTIMONIAL CAROUSEL -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.END CLIENT SECTION -->
<style>
.item 
{
padding:0px!important;	
}

</style>
		
		<!-- PARTNER START -->
		<div id="partner" class="mrg-bottom-30" style="    margin-top: 30px;">
			<div class="container">
				<div class="row">
					<div class="col-md-12"> 
						<!-- PARTNER CAROUSEL -->
						<div class="section-heading">
                      <div class="title"><h3>OUR AFFILIATES</h3></div></div>
						
						<div id="partner-carousel" class="partner-carousel owl-carousel owl-theme">
							<div class="item">
								<a href="#"><img src="images/partner/2000px-Axis_Bank_logo.png" alt="partner"></a>
							</div>	<!-- /.END ITEM -->
							<div class="item">
								<a href="#"><img src="images/partner/adityabirla.png" alt="partner"></a>
							</div>	<!-- /.END ITEM -->
							<div class="item">
								<a href="#"><img src="images/partner/bank-of-india.png" alt="partner"></a>
							</div>	<!-- /.END ITEM -->
							<div class="item">
								<a href="#"><img src="images/partner/dhfl.png" alt="partner"></a>
							</div>	<!-- /.END ITEM -->
							<div class="item">
								<a href="#"><img src="images/partner/federal.png" alt="partner"></a>
							</div>	<!-- /.END ITEM -->
							<div class="item">
								<a href="#"><img src="images/partner/hdfc.png" alt="partner"></a>
							</div>	<!-- /.END ITEM -->
							<div class="item">
								<a href="#"><img src="images/partner/idbi.png" alt="partner"></a>
							</div>	<!-- /.END ITEM -->
							<div class="item">
								<a href="#"><img src="images/partner/Indiabulls-Housing-Finance-Ltd..png" alt="partner"></a>
							</div>	<!-- /.END ITEM -->
							<div class="item">
								<a href="#"><img src="images/partner/kotak.png" alt="partner"></a>
							</div>	<!-- /.END ITEM -->
							<div class="item">
								<a href="#"><img src="images/partner/lic.png" alt="partner"></a>
							</div>	<!-- /.END ITEM -->
							<div class="item">
								<a href="#"><img src="images/partner/lt-financial-services1.png" alt="partner"></a>
							</div>	<!-- /.END ITEM -->
							<div class="item">
								<a href="#"><img src="images/partner/pnb-housing.png" alt="partner"></a>
							</div>	<!-- /.END ITEM -->
							<div class="item">
								<a href="#"><img src="images/partner/ratnakar.png" alt="partner"></a>
							</div>	<!-- /.END ITEM -->
							<div class="item">
								<a href="#"><img src="images/partner/standard-charted.png" alt="partner"></a>
							</div>	<!-- /.END ITEM -->
							<div class="item">
								<a href="#"><img src="images/partner/state-bank.png" alt="partner"></a>
							</div>	<!-- /.END ITEM -->
							<div class="item">
								<a href="#"><img src="images/partner/sundaram.png" alt="partner"></a>
							</div>	<!-- /.END ITEM -->
							<div class="item">
								<a href="#"><img src="images/partner/tata-capital.png" alt="partner"></a>
							</div>	<!-- /.END ITEM -->
							<div class="item">
								<a href="#"><img src="images/partner/Yes_Bank_SVG_Logo.svg.png" alt="partner"></a>
							</div>	<!-- /.END ITEM -->
						</div>
						<!-- /.END CAROUSEL -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.END PARTNER -->

		<!-- FOOTER SECTION -->
		<?php include('footer.php'); ?>
		<!-- /.FOOTER SECTION -->
	</section>
	<!-- /.END MAIN CONTENT -->

	<!-- *** END *** -->
	<?php include('footerjs.php'); ?>
	<script>
    $(function(){

        $("#typed").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings'),
            typeSpeed: 70,
            backDelay: 500,
            loop: true,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $("#typed").typed('reset');
        });
		
        $("#typed1").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings1'),
            typeSpeed: 70,
            backDelay: 500,
            loop: true,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset1").click(function(){
            $("#typed1").typed('reset');
        });
    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

    </script>
</body>
</html>