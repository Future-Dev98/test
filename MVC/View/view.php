<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MVC BASIC</title>
	<link rel="stylesheet" type="text/css" href="web/css/style.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
	<div class="container">
		
		<?php require "layout/header.php";?>

		<main>
			<?php require view($controller, $action); ?>
		</main>
		
	</div>
	<script src="web/js/js.js"></script>
</body>
</html>