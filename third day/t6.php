<?php 
echo (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Page Requested Time</title>
</head>
<body>
	<h1>Page Requested Time</h1>
	<p>Page requested at: <?php echo date('Y-m-d H:i:s', time()); ?></p>
</body>
</html>