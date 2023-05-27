<!DOCTYPE html>
<html>
<head>
	<title>Website Counter</title>
</head>
<body>
	<h1>Website Counter</h1>
	<p>Page views: <?php echo getCounter(); ?></p>
</body>
</html>

<?php
function getCounter() {
	$counter_file = 'counter.txt';

	// Read current count from file
	$current_count = 0;
	if (file_exists($counter_file)) {
		$current_count = intval(file_get_contents($counter_file));
	}

	// Increment count and save to file
	$new_count = $current_count + 1;
	file_put_contents($counter_file, $new_count);

	return $new_count;
}
?>