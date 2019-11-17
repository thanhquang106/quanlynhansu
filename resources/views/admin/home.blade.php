@yield('header')
<!DOCTYPE html>
<html>
<head>
<title></title>
	<link rel="stylesheet" href="{{Asset('css/home_admin.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- link icon -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://www.w3schools.com/js/myScript1.js"></script>
	<title></title>
	<link rel="stylesheet" href="{{Asset('css/home.css')}}">
</head>
<body>

<!------ Include the above in your HEAD tag ---------->


 <nav class="main-navigation">
        <div class="navbar-header animated fadeInUp">
            <a class="navbar-brand" href="#">Logo Area</a>
        </div>
        <ul class="nav-list">
            <li class="nav-list-item">
                <a href="trang-chu-admin" class="nav-link"><i class="fa fa-address-card" aria-hidden="true"></i>&ensp;

Danh sách nhân viên</a>
            </li>
            <li class="nav-list-item">
                <a href="them-nhan-vien" class="nav-link"><i  class="fa fa-plus" aria-hidden="true"></i>&ensp;
Thêm</a>
            </li>
            <li class="nav-list-item">
                <a href="#" class="nav-link"><i  class="fas fa-edit" aria-hidden="true"></i>
Cập nhật</a>
            </li>
            <li class="nav-list-item">
                <a href="#" class="nav-link"> <i style="color: #FF0000;" class="fa fa-trash" aria-hidden="true"></i>&ensp;
Xóa</a>
            </li>
            <li class="nav-list-item">
                <a href="#" class="nav-link"><i class="fa fa-user" aria-hidden="true" ></i>&ensp;{{ Auth::user()->name }}
			</a>
            </li>
        </ul>

    </nav>
    
    <hr>

  	<div class="row">
    	<div style="background:#363636" class="col-3 colorDM">
      		<ul class="nav flex-column" >
  				<li class="nav-item">
    				<a class="nav-link text-light active" href="#" data-toggle="collapse" data-target="#collapsibleNavbarNV"><i class="fas fa-users">&ensp;</i>Nhân viên&ensp;<i style="float: right;" class="far fa-arrow-alt-circle-down"></i></a>
				    <div class="collapse" id="collapsibleNavbarNV">
					    <ul class="navbar-nav " style="margin-left: 50px;">
					      	<li class="nav-item">
					        	<a class="nav-link text-light " href="#">Thông tin nhân viên</a>
					        </li>
					        <div class="dropdown-divider"></div>
					        <li>
					        	<a class="nav-link  text-light " href="trang-chu-admin">Danh sách nhân viên</a>
					      	</li>
					
					     
					        <div class="dropdown-divider"></div>
					      	<li class="nav-item">
					        	<a class="nav-link text-light" href="them-nhan-vien">Thêm mới nhân viên</a>
					      	</li>
					        <div class="dropdown-divider"></div>
					      	<li class="nav-item">
					        	<a class="nav-link text-light" href="#">Cập nhật thông tin nhân viên</a>
					      	</li>
					        <div class="dropdown-divider"></div>
					      	<li class="nav-item" text-white>
					       		<a class="nav-link text-light" href="#">Xóa nhân viên</a>
					      	</li> 
					          
					    </ul>
				  	</div>
  				</li>
  				<li class="nav-item">
    				<a class="nav-link text-white active" href="#" data-toggle="collapse" data-target="#collapsibleNavbarHĐ"><i class="far fa-address-card">&ensp;</i>Hợp đồng&ensp;<i style="float: right;" class="far fa-arrow-alt-circle-down"></i></a>
				    <div class="collapse" id="collapsibleNavbarHĐ">
					    <ul class="navbar-nav " style="margin-left: 50px;">
					      	<li class="nav-item">
					        	<a class="nav-link text-white" href="#">Hợp đồng</a>
					      	</li>
					        <div class="dropdown-divider"></div>
					      	<li class="nav-item">
					        	<a class="nav-link text-white" href="#">Cập nhật hợp đồng</a>
					      	</li>     
					    </ul>
				  	</div>
  				</li>
  				<li class="nav-item">
    				<a class="nav-link text-white active" href="#" ><i class="far fa-calendar-alt"></i>&ensp; Lịch làm</a>
  				</li>
  				<li class="nav-item">
    				<a class="nav-link text-white active" href="#" ><i class="far fa-credit-card"></i>&ensp;Thanh toán</a>
  				</li>
  				<li class="nav-item">
    				<a class="nav-link text-white active" href="#" ><i class="fas fa-id-card-alt"></i>&ensp;Khen thưởng</a>
  				</li>
  				<li class="nav-item">
    				<a class="nav-link text-white active" href="#" data-toggle="collapse" data-target="#collapsibleNavbarTK"><i class="far fa-user"></i>&ensp;Tài khoản&ensp;<i style="float: right;" class="far fa-arrow-alt-circle-down"></i></a>
				    <div class="collapse" id="collapsibleNavbarTK">
					    <ul class="navbar-nav " style="margin-left: 50px;">
					      	<li class="nav-item">
					        	<a class="nav-link text-white" href="#">Thông tin tài khoản</a>
					      	</li>
					        <div class="dropdown-divider"></div>
					      	<li class="nav-item">
					        	<a class="nav-link text-white" href="#">Cập nhật cập nhật thông tin </a>
					      	</li>
					        <div class="dropdown-divider"></div>
					      	<li class="nav-item">
					        	<a class="nav-link text-white" href="{{ asset('logout') }}">Đăng xuất&ensp;<i class="fas fa-sign-out-alt"></i></a>
					      	</li>     
					    </ul>
				  	</div>
  				</li>

			</ul>
    	</div>

    	<div class="col-9 	">
      		@yield('content')
    	</div>
  	</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
