<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<title>Upload</title>
</head>
<body>
	<h1>File upload</h1>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<label for="file">Vælg en fil:</label>
		<input type="file" id="file" name="file" required>
		<button type="submit">Upload</button>
	</form>
</body>
</html>