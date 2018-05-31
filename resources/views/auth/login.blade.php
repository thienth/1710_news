<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		@csrf
		<div>
			<label>Email</label>
			<input type="text" name="email" placeholder="Enter email">
		</div>

		<div>
			<label>Password</label>
			<input type="password" name="password" placeholder="Enter Password">
		</div>
		<div>
			
			<input id="rem" type="checkbox" name="remember" value="1"> <label for="rem">Remember me</label>
		</div>

		<div>
			<button type="submit">Login</button>
		</div>
	</form>
</body>
</html>