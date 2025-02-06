<html>

<head>
	<title>Main Login Page</title>
</head>

<body>
	<?php
	require 'config.php';
	require 'database.php';
	$g_title = BLOG_NAME . ' - Index';
	$g_page = 'privacy';
	require 'header.php';
	require 'menu.php';

	$posts = find_all_blogs(BLOG_INDEX_NUM_POSTS);
	?>
	<div id="all_blogs">
		<!-- Privacy Policy Content -->
		<div style="width: 80%; margin: 20px auto; line-height: 1.6;">
			<h2><strong>Privacy Policy</strong></h2>

			<p>We are committed to protecting your financial privacy. During the application process, we collect non-public personal information about your income, assets, and credit history from you and other sources to facilitate credit decisions. Access to this information is limited to employees who need it to provide services, and we implement strict security measures to safeguard your data in compliance with federal regulations.</p>

			<h3><strong>Information We Collect:</strong></h3>
			<ul>
				<li>Details provided by you, such as name, address, Social Security number, assets, and income.</li>
				<li>Transaction history with us, our affiliates, or third parties.</li>
				<li>Credit reports and financial data from consumer reporting agencies.</li>
			</ul>

			<h3><strong>Information Sharing:</strong></h3>
			<p>We may share your information with:</p>
			<ul>
				<li>Non-financial service providers, including title and escrow companies, appraisers, and other entities essential to your transaction.</li>
			</ul>

			<p>We do not sell or disclose your personal information for unauthorized purposes and ensure all shared data is used strictly for business needs in accordance with applicable laws.</p>
		</div>
		
		<?php
		require 'footer.php';
		?>

</body>

</html>