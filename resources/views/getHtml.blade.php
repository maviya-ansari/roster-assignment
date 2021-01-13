<!DOCTYPE html>
<html>
<head>
	<title>Get HTML</title>

</head>
<body>
	<form method="post" action="{{route('parse')}}">
		@csrf
		<textarea rows="30" cols="100" name="html" placeholder="paste your HTML code here"></textarea>
		<button type="submit">Submit</button>
	</form>
</body>
</html>