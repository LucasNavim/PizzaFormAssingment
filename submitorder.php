<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Pizza Order</title>
		<meta name="author" content="The name of the document’s author to go here" />
		<meta name="description" content="A concise and accurate summary of the document content is to appear here">
		<link rel="shortcut icon" href="pizzaicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="styles.css" />
	</head>
	<body>
		<header>
			<h1>Pizza Order</h1>
		</header>
		<main>
			<section>
				<h3>Thank You for your order</h3>
				<?php
					$emailAddress = "";
					$emailAddress = $_GET['emailAddress'];
					echo "<p>Thanks, your pizza order has been added to our list of orders.</p>";
				?>
			</section>
		</main>
		<footer>
			<p><small>2024 Pizza Delivery Service</small></p>
		</footer>
	</body>
</html>
