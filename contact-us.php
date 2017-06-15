<?php include('head.php'); ?>
<?php
	error_reporting(0);
	if(isset($_POST['submit'])){
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= 'From: '.$_POST['email'].'' . "\r\n";				

		$body .= "<table><tr><td>Name : </td><td>" . $_POST['name'] . "</td></tr>"
					."<tr><td>Email : </td><td>" . $_POST['email'] . "</td></tr>"
					."<tr><td>Contact: </td><td>" . $_POST['phone'] . "</td></tr>"
					."<tr><td>Service: </td><td>" . $_POST['service'] . "</td></tr>"
					."<tr><td>Location: </td><td>" . $_POST['location'] . "</td></tr>"
					."<tr><td>Message : </td><td>" . $_POST['message'] . "</td></tr></table>";
		$emails = 'info@excellinkfin.com, gaurav@webdakaar.com';
		if (mail($emails,'Message from Excellink',$body,$headers)) { /* $to_mail place ur email id*/
			echo("<script>alert('Thank You');</script>");
		}else {
			echo("<script>alert('Something Went Wrong');</script>");
		}
	}
?>
<!-- Add header Code Here -->
</head>
<body>
	<!-- HEADER -->
	<?php include('header.php'); ?>
	<!-- MAIN CONTENT START HERE -->
	<section class="body-content">

		<!-- ABOUT SECTION -->
		<div id="about" class="about" style="background-image:url('img/contact-us-background.jpg'); background-size:cover;padding:60px 0 60px;">
			<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="section-heading" style="margin-bottom:12px;">
							<div class="title">
								<h2 class="color-white">CONTACT INFO</h2>
							</div>
						</div>
						<div class="footer-widget color-white">
							<!--<h3 class="text-uppercase mrg-bottom-40 res-center">CONTACT</h3>-->
							<ul>
								<li style="margin-bottom:10px;">
									<i class="fa fa-map-marker" aria-hidden="true" style="font-size:25px;"></i>
									<span>
										Excellink Finservices Pvt. Ltd. 502, Tulsee Chambers, <br/>LBS Road, Near Teen Petrol Pump, Thane - West, 400 602.
									</span>
								</li>
								<li style="margin-bottom:10px;">
									<i class="fa fa-envelope" aria-hidden="true" style="font-size:20px;"></i>
									<div class="padd-l-20">
										info@excellinkfin.com 
									</div>
								</li>
								<li style="margin-bottom:30px;">
									<i class="fa fa-phone" aria-hidden="true" style="font-size:25px;"></i>
									<div class="padd-l-20">022-2540 3232 / 9292
									</div>
								</li>
							</ul>
						</div>
						<div class="section-heading" style="margin-bottom:12px;">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.045901874337!2d72.9677928143507!3d19.19319738702087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b9220a545909%3A0x8f42ec64d58105dd!2sExcellink+Finservices+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1496743565060" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-sm-6 col-sm-offset-1">
						<div class="section-heading" style="margin-bottom:12px;">
							<div class="title">
								<h2 class="color-white" style="margin-bottom:20px;">CONTACT FORM</h2>
								<form action="contact-us.php" method="post" name="myform">
									<input type="text"  name="name" class="form-control myInputClass" placeholder="Name:" required="true">
									<input type="email" name="email" class="form-control myInputClass" placeholder="Email:">
									<input type="phn" pattern="[0-9]{10}" name="phone" class="form-control myInputClass" placeholder="Phone Number:" required="true">
									<select name="service" class="form-control myInputClass">
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
									<!--<input type="text" name="location" class="form-control myInputClass" placeholder="Location:">-->
									<select name="location" class="form-control myInputClass" style="color: #9a9797;">
									<option selected="selected" value="">Location:</option>
								      <option value="Mumbai">Mumbai</option>
								      <option value="Navi Mumbai">Navi Mumbai</option>
								      <option value="Thane">Thane</option>
									  </select>
									
									<textarea name="message" class="form-control myInputClass" placeholder="Message:" rows="5"></textarea>
									
									<input type="submit" name="submit" value="SUBMIT" class="btn btn-primary myButton">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.END ABOUT SECTION -->
       
		<!-- FOOTER SECTION -->
		<?php include('footer.php'); ?>
		<!-- /.FOOTER SECTION -->
	</section>
	<!-- /.END MAIN CONTENT -->

	<!-- *** END *** -->
	<?php include('footerjs.php'); ?>
	
</body>
</html>