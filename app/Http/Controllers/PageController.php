<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\themNV;
use App\DSNV;
use App\dangNhap;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function getHome()
    {
    	return view('admin/home');
    }
    
     
    // Giao diện đăng ký 
    public function getDangKy()
    {
        return view('/sigin');
    }
    public function postDangKy( Request $request)
    {
        $this -> validate($request,
            [ 
                'gmail'=>'required',
                'hoten'=>'required',
                'matkhau'=>'required|min:8',
                'matkhau2'=>'required'

            ],[
                'gmail.required'=>'Vui lòng nhập gmail',
                'hoten.required'=>'Vui lòng nhập họ tên',
                'matkhau.required'=>'Vui lòng nhập mật khẩu',
                'matkhau.min'=>'Mật khẩu phải có ít nhất 8 ký tự',
                'matkhau2.required'=>'Vui lòng nhập lại mật khẩu'
            ]);
            $dangky = new dangNhap;
             $dangky -> name = $request->hoten; 
             $dangky -> email = $request->gmail; 
             $dangky -> password = $request->matkhau;  
             $dangky->save();
             return redirect('dang-ky') -> with('thongbao','Đăng ký thành công');


        
    }
    


   
   
    public function getDSNhanVien()
    {
    	return view('admin/DSNhanVien');
    }
    public function getCapNhatTT()
    {
        return view('admin/CapNhatTT');
    }
    public function getThemNhanVien()
    {
        return view('admin/themNhanVien');

    }
    // Thêm nhân viên
    public function postThem(Request $request)
    {
        $this->validate($request, 
        [

        ],
        [
            'tenNV.required'=>'Vui lòng nhập tên nhân viên.',
            'gmail.required'=>'Vui lòng nhập tên nhân viên.',
            'sdt.required'=>'Vui lòng nhập tên nhân viên.',
            'facebook.required'=>'Vui lòng nhập tên nhân viên.',
            'ngaySinh.required'=>'Vui lòng nhập tên nhân viên.',
            'gioiTinh.required'=>'Vui lòng nhập tên nhân viên.',
            'cmnd.required'=>'Vui lòng nhập tên nhân viên.',
            'diaChi.required'=>'Vui lòng nhập tên nhân viên.',
            'hinh.required'=>'Vui lòng nhập tên nhân viên.',
            'viTriLam.required'=>'Vui lòng nhập tên nhân viên.',

        ]);
        $nhanvien = new themNV;
        $nhanvien -> HoTen = $request->tenNV;
        $nhanvien -> gmail = $request->gmail;
        $nhanvien -> SoDienThoai = $request->sdt;
        $nhanvien -> facebook = $request->facebook;
        $nhanvien -> ngaySinh = $request->ngaySinh;
        $nhanvien -> gioiTinh = $request->gioiTinh;
        $nhanvien -> SoCMND = $request->cmnd;
        $nhanvien -> diaChi = $request->diaChi;
        
        $nhanvien -> viTriLam = $request->viTriLam;
        
        
        // return redirect('themNhanVien') -> with('thongbao','Thêm thành công');
       
    }
    // Hiển thị danh sách nhân viên
    public function getDSNV()
    {
        $nhanvien = DSNV::orderBy('MaNV','asc')->get();
        return view('admin/DSNhanVien',['nhanvien'=>$nhanvien]);

    }
}
