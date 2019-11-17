@extends('admin/home')
@section('header')



@stop
@section('content')

    
  
	<div class="them">
		<div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-12 pb-5">
                <form action="themNhanVien" method="post">

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="card border-primary rounded-0">
                        <div class="card-header p-0">
                            <div class="bg-info text-white text-center py-2">
                                <h3>THÊM NHÂN VIÊN</h3>

                            </div>
                        </div>
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
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col">
                                    <div class="text-center ">
                                        <h4>Thông tin nhân viên</h4>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-user text-info"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" id="nombre" name="tenNV" placeholder="Họ và tên nhân viên">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-envelope text-info"></i>
                                                </div>
                                            </div>
                                            <input type="email" class="form-control" id="nombre" name="gmail" placeholder="Gmail nhân viên">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-phone text-info"></i>
                                                </div>
                                            </div>
                                            <input type="number" class="form-control" id="nombre" name="sdt" placeholder="Số điện thoại">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-facebook text-info"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" id="nombre" name="facebook" placeholder="Facebook">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-calendar text-info"></i>
                                                </div>
                                            </div>
                                            <input type="date" class="form-control" id="nombre" name="ngaySinh" placeholder="ngaySinh">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-universal-access text-info"></i>
                                                </div>
                                            </div>
                                            <select class="form-control" name="gioiTinh">
                                                <option>----Giới tính----</option>
                                                <option>Nam</option>
                                                <option>Nữ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-address-card text-info"></i>
                                                </div>
                                            </div>
                                            <input type="number" class="form-control" id="nombre" name="cmnd" placeholder="Số CMND">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-map-marker text-info"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" id="nombre" name="diaChi" placeholder="Địa chỉ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-upload text-info"></i>
                                                </div>
                                            </div>
                                            <form action="{{ url('file') }}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <input type="file" name="filesTest" required="true">
        <br/>
    </form>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div style="color: #CF5CE6" class="col">
                                    <div class="text-center ">
                                        <h4>Thông tin ứng tuyển</h4>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-envelope text-info"></i>
                                                </div>
                                            </div>
                                            <select class="form-control">
                                                <option>Nơi làm việc</option>
                                                <option>Helio Center-Đà Nẵng</option>
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-envelope text-info"></i>
                                                </div>
                                            </div>
                                            <select class="form-control" name="viTriLam">
                                                <option>----Chọn----</option>
                                                <option>Helio play</option>
                                                <option>Helio Kids</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                           



                            <div class="text-center">
                                <input type="submit" value="Thêm " class="btn btn-info btn-block rounded-0 py-2">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>


	</div>
    
 <!--    <script type="text/javascript">
        
           $(".upld-file").change(function (event) {
                var ev = event.target;
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    reader.onload = imageIsLoaded;
                    reader.readAsDataURL(this.files[0]);
                }
                function imageIsLoaded(e) {
            $(ev).parent().siblings('.fea-img').attr("src", e.target.result);
                          
                        };
                    });


    </script> -->
    @stop

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>