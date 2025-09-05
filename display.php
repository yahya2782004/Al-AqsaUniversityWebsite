<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alaqsa University</title>
	<meta name="keywords" content="alaqsa university, undergraduate, postgraduate, registration">
	<meta name="description" content="Alaqsa University web site">
	<link rel="stylesheet" href="css/stylesheet.css" title="default">
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>
	<?php include('application/appHeader.php'); ?>

		<div style= "margin-bottom: 5em;" class="appContainerDiv">
			<div class="appNavDiv">
				<nav role="navigation" aria-label="Primary">
					<ul>
						<li>1. Personal Details</li>
						<li>2. Contact Details</li>
						<li>3. Course Choice</li>
						<li>4. Education</li>
						<li>5. Application Review</li>
					</ul>
				</nav>
			</div>

			<div class="appBodyDiv">
				</br>
				<h1 style="margin-left:1.5em; color:red;"><b>Thank you. </br> Your application has been submitted !</b></h1>
				<br />
				<?php
				echo ("<h1 style=\"margin-left:1.5em\">". "Your University Number is: "  . $_SESSION['id']. "</h1>");
				?>
				<br />
			</div>

		</div>


	<?php include __DIR__ . '/partials/footer.php'; ?>

</body>

</html>