<?php
	// Echo "Active" Class
	function echoActiveClassIfRequestMatches($requestUri)
	{
		$current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
		if ($current_file_name == $requestUri){
			echo 'current';
		}
		if($requestUri == '/'){
			echo "current";
		}
	}
?>
<style>
		@media (max-width: 994px) { 
			.navbar-brand {
				padding: 0;        
			}

			.navbar-brand img {
				margin-top: 5px;
				margin-left: 5px;
			}
		}
		@media (max-width: 400px) { 
			.navbar-brand {
				padding: 0;        
			}

			.navbar-brand img {
				margin-top: 14px;
				margin-left: 5px;
			}
			.neww {
				margin-left: 40px;        
			}
		}
    </style>
	<header id="header" class="header">
		<!-- NAVIGATION -->
		<nav class="navbar navbar-1"> 
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#my-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- TEMPLATE LOGO -->
					<a class="navbar-brand" href="/"><img alt="" src="img/excellink-logo.png" class="hidden-xs" style="width:255px;margin-top:-2px;"><img alt="" src="img/excellink-logo.png" class="visible-xs" style="width:255px;margin-top:-2px;"></a>
				</div>

				<div class="collapse navbar-collapse" id="my-navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="<?php echo ($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == "index.php" ? "current" : "");?>"><a href="/">HOME</a></li>
						<li class="<?=echoActiveClassIfRequestMatches("about-s")?><?=echoActiveClassIfRequestMatches("management-team")?> <?=echoActiveClassIfRequestMatches("about-us")?> dropdown" role="presentation"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT US</a>
							<ul class="dropdown-menu">
								<li><a href="about-us.php">Company Overview</a></li>
								<li><a href="management-team.php">Management Team</a></li>
							</ul>
						</li>
						<li class="<?=echoActiveClassIfRequestMatches("financial-modelling-analysis")?> <?=echoActiveClassIfRequestMatches("debt-syndication")?> <?=echoActiveClassIfRequestMatches("real-estate-advisory")?> <?=echoActiveClassIfRequestMatches("financial-risk-management")?> <?=echoActiveClassIfRequestMatches("working-capital-management")?> <?=echoActiveClassIfRequestMatches("home-loan-provisioning")?> <?=echoActiveClassIfRequestMatches("loan-against-properties")?> <?=echoActiveClassIfRequestMatches("discount-receivables")?> dropdown">
                        
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICES</a>
							<ul class="dropdown-menu">
								<li><a href="financial-modelling-analysis.php">Corporate</a>
									<ul>
										<li><a href="financial-modelling-analysis.php">Financial Analysis</a></li>
										<li><a href="debt-syndication.php">Debt Syndication</a></li>
										<li><a href="real-estate-advisory.php">Real Estate Advisory</a></li>
										<li><a href="financial-risk-management.php">Financial Risk management</a></li>
										<li><a href="working-capital-management.php">Working Capital Management</a></li>
									</ul>
								</li>
								<li><a href="home-loan-provisioning.php">Retail</a>
									<ul>
										<li><a href="home-loan-provisioning.php">HOME LOANS PROVISIONING</a></li>
										<li><a href="loan-against-properties.php">LOAN AGAINST PROPERTIES</a></li>
										<li><a href="discount-receivables.php">DISCOUNT RECEIVABLES</a></li>
									</ul>
								</li>
							</ul>
						</li>
												
					
					<li class="<?=echoActiveClassIfRequestMatches("testimonials")?>" ><a href="testimonials.php">TESTIMONIAL</a></li>

					<li class="<?=echoActiveClassIfRequestMatches("contact-us")?>"><a href="contact-us.php">CONTACT US</a></li>
						<!--<li><a href="#">SERVICES</a>
							<ul>
								<li><a href="service-1.html">SERVICE 1</a></li>
								<li><a href="service-2.html">SERVICE 2</a></li>
								<li><a href="service-3.html">SERVICE 3</a></li>
								<li><a href="service-single.html">SERVICE SINGLE</a></li>
								<li><a href="service-single-2.html">SERVICE SINGLE 2</a></li>
							</ul>
						</li>-->
					</ul>
				</div>
			</div>
		</nav>
	</header>	<!-- /.END HEADER -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
	$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>