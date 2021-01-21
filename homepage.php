<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP experimentation</title>
</head>
<body>
	<?php
			define("GREETING", "Hi");
			echo GREETING." John!";
			define("GREETING", "Hello");
			echo GREETING." John!";
	?>
</body>
</html>