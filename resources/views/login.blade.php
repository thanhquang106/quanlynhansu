<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<title></title>
	<link rel="stylesheet" href="{{Asset('css/stely.css')}}"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
<form action="dang-nhap" method="post">
<div class="login-wrap">
	<div class="login-html">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Đăng nhập</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Quên mật khẩu</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div>
				@include('errors.node')
				</div>
				<div class="group">
					<label for="user" class="label">Đăng nhập gmail</label>
					<input id="user" type="email" class="input" name="email" value="{{ old('email') }}" >
				</div>
				<div class="group">
					<label for="pass" class="label">Mật khẩu</label>
					<input id="pass" type="password" class="input" data-type="password" name="password">
				</div>
				<div>
				<input type="radio" name="remember" value="Remember Me" >Remember my account <br><br>
				</div>
				{{--  <a href="{{ ('auth/google')  }}" class="btn btn-primary">google</a>  --}}
				<div class="group">
						
				
					<input type="submit" class="button" value="Đăng nhập">
				</div>
				<div class="hr"></div>
			</div>
			<div class="for-pwd-htm">
				<div class="group">
					<label for="user" class="label">Username or Email</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Reset Password">
				</div>
			</div>
		</div>
	</div>
</div>


</form>

</body>
</html>