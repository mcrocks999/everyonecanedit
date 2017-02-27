<?php
	$url = 'default.php';
	$file = './content.html';
	if (isset($_POST['text']))
	{
	file_put_contents($file, $_POST['text']);
	header(sprintf('Location: %s', $url));
	printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
	exit();
	}
	$text = file_get_contents($file);
?>
<html>
	<head>
		<title>Edit</title>
		<style>
			textarea {
				width: 100%;
				height: 90%;
			}
		</style>
	</head>
	<body>
		<form action="" method="post">
			<textarea name="text" 3><?php echo stripslashes($text)?></textarea>
			<input type="submit" value="Save"/>&nbsp;
			<a href=".">Cancel</a>
		</form>
	</body>
</html>
