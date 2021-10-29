<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>New Post</title>
</head>
<body>
	<form action="/submit/post" method="POST">
		@csrf
		Title:<input type="text" name="title"><br>
		Contents:<textarea name="content">
			
		</textarea><br>
		Tags:<input type="text" name="tags">
		<input type="submit" name="submit">
		
	</form>

</body>
</html>