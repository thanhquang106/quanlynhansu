

<html>
  <head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="{{Asset('css/sigin.css')}}">
  </head>

<body id="LoginForm">
	<br><br>
<div class="container">
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Đăng ký tài khoản</h2>
   <br>
   </div>

    <form action="dang-ky" id="Login">
    	@if(count($errors) > 0 )
                            <div class="alert alert-danger">
                                @foreach($errors -> all() as $err)
                                {{$err}} <br>
            
                                @endforeach
                            </div>

                        @endif

                       @if(session('thongbao'))
                       <div class="alert alert-success">
                           {{session('thongbao')}}
                       </div>
                       @endif

        <div class="form-group">


            <input type="email" class="form-control" id="inputEmail" placeholder="Gmail" name="gmail">

        </div>
        <div class="form-group">


            <input type="text" class="form-control" id="inputEmail" placeholder="Họ tên" name="hoten">

        </div>


        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" placeholder="Mật khẩu" name="matKhau">

        </div>
        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" placeholder=" Nhắc lại mật khẩu" name="matkhau2">

        </div>
        <div class="forgot">
</div>
        <button type="submit" class="btn btn-primary">Đăng ký</button>

    </form>
    </div>
</div></div></div>


</body>
</html>
