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
									<a class="<?=echoActiveClassIfRequestMatches1("financial-modelling-analysis")?>" href="financial-modelling-analysis.php">Financial Analysis </a>
									<a class="<?=echoActiveClassIfRequestMatches1("debt-syndication")?>" href="debt-syndication.php">Debt Syndication</a>
									<a class="<?=echoActiveClassIfRequestMatches1("real-estate-advisory")?>" href="real-estate-advisory.php">Real Estate Advisory</a>
									<a class="<?=echoActiveClassIfRequestMatches1("financial-risk-management")?>" href="financial-risk-management.php">Financial Risk management</a>
									<a class="<?=echoActiveClassIfRequestMatches1("working-capital-management")?>" href="working-capital-management.php">Working Capital Management</a>
								</div>