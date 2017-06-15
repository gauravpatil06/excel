<?php
	// Echo "Active" Class
	function echoActiveClassIfRequestMatches1($requestUri)
	{
		$current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
		if ($current_file_name == $requestUri)
			echo 'active';
	}
?>
<div class="page-link mrg-bottom-60 res-mrg-top-50">
									<a class="<?=echoActiveClassIfRequestMatches1("home-loan-provisioning")?>" href="home-loan-provisioning.php">Home loans provisioning</a>
									<a class="<?=echoActiveClassIfRequestMatches1("loan-against-properties")?>" href="loan-against-properties.php">Loan against Properties</a>
									<a class="<?=echoActiveClassIfRequestMatches1("discount-receivables")?>" href="discount-receivables.php">Discount Receivables</a>
								</div>