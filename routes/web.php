<?php

Route::get('/welcome', function () {
    return view('welcome');
});
// Giao diện đăng nhập
Route::get('dang-nhap','LoginController@getDangNhap');
Route::post('dang-nhap','LoginController@postDangNhap');
Route::get('logout','LogoutController@getLogout');
//đang nhập bằng google
// Route::get('auth/google', 'googleController@redirectToProvider');
// Route::get('auth/google/callback', 'googleController@handleProviderCallback');


// Giao diện đăng ký
Route::get('dang-ky','PageController@getDangKy');
Route::post('dang-ky','PageController@postDangKy');
// Giao diện chính
Route::get('admin',[
	'as'=>'admin',
	'uses'=>'PageController@getHome'
]);
// Danh sách nhân viên
Route::get('trang-chu-admin','PageController@getDSNV');
Route::get('/NhanVien',[
	
	'uses'=>'PageController@getDSNV'
]);

Route::get('/cap-nhat-thong-tin-nhan-vien',[
	'as'=>'CapNhatTT',
	'uses'=>'PageController@getCapNhatTT'
]);
Route::get('/them-nhan-vien',[
	'as'=>'themNhanVien',
	'uses'=>'PageController@getThemNhanVien'
]);



Route::get('/text',[
	'as'=>'themNhanVien',
	'uses'=>'PageController@index'
]);




Route::post('themNhanVien','PageController@postThem');
Route::get('');



Route::get('model/themVN/save', function()
{
	$themNV = new App\themNV;
	

	$themNV -> HoTen='Nguyễn Thanh Hào';

	$themNV -> gmail ='nthao.18ce@sict.udn.vn';
	$themNV -> SoDienThoai ='0868621096';
	$themNV -> facebook ='Nguyễn Thanh Hào';
	$themNV -> NgaySinh='25-9-2000';
	$themNV -> gioiTinh='Nam';
	$themNV -> SoCMND='221508261';
	$themNV -> diaChi='Phú Yên';
	$themNV -> viTriLam='kids';
	$themNV -> save();






});









Route::get('database', function(){
	Schema::create('nhanvien', function($table){
		$table->increments('id');
		$table->string('HoTen',255)->nullable();
		$table->string('gmail',255) ->nullable();
            $table->string('SoDienThoai',255)->nullable();
            $table->string('facebook',255)->nullable();
            $table->date('ngaySinh',255)->nullable();
            $table->string('gioiTinh',255)->nullable();
            $table->string('SoCMND',255)->nullable();
            $table->string('DiaChi',255)->nullable();
            $table->string('viTriLam',255)->nullable();
            $table->rememberToken();
            $table->timestamps();
	});
	Route::get('text','PageController@index');
	Route::post('text','PageController@doUpload');
});

Auth::routes(['verify' => true]);