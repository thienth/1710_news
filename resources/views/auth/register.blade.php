<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		@csrf
		<div>
			<label>Name</label>
			<input type="text" name="name" placeholder="Enter name">
			@if ($errors)
				<br>
				<label style="color: red">{{$errors->first('name')}}</label>
			@endif
		</div>
		<div>
			<label>Email</label>
			<input type="text" name="email" placeholder="Enter email">
			@if ($errors)
				<br>
				<label style="color: red">{{$errors->first('email')}}</label>
			@endif
		</div>
		<div>
			<label>Password</label>
			<input type="password" name="password" placeholder="Enter password">
			@if ($errors)
				<br>
				<label style="color: red">{{$errors->first('password')}}</label>
			@endif
		</div>
		<div>
			<label>Confirm Password</label>
			<input type="password" name="cfpassword" placeholder="Enter confirm password">
			@if ($errors)
				<br>
				<label style="color: red">{{$errors->first('cfpassword')}}</label>
			@endif
		</div>
		<div>
			<button type="submit">Register</button>
		</div>
	</form>
</body>
</html>