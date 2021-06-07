<?php session_start()?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		//détruit la session
		session_destroy();
		header('location: index.php');

	?>

</body>
</html>