<?php $message = $_GET['val'] ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Document</title>
		<link rel="stylesheet" href="./src/main.css" />
	</head>
	<body>
		<input id="msg" type="text" hidden value="<?php echo $message ?>"/>
		<div class="container">
			<div onclick="next()" class="text">Gira tu pantalla y Click Me!!!</div>
		</div>
	</body>
	<script src="./src/index.js"></script>
</html>
