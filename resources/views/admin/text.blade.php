
@extends('admin/home')
@section('header')

@stop
@section('content')

    <div class="container">

    
            <h2 class="text-center">DANH SÁCH NHÂN VIÊN</h2>
            <br>
<input  type="search" id="myInput" type="text" placeholder="Tìm kiếm nhân viên">
<br>
<br><br>

<table>
  <thead>
    <tr>
      <th>MãNV</th>
      <th>Họ tên </th>
      <th>Giới tính</th>
      <th>Vị trí</th>
      <th>Khu vực làm</th>
    </tr>
    <tbody id="bangNhanVien">
      @foreach($nhanvien as $nv)
    <tr >
      <td >{{$nv -> MaNV}}</td>
      <td>{{$nv -> HoTen}}</td>
      <td>{{$nv -> gioiTinh}}</td>
      <td>{{$nv -> viTriLam}}</td>
      <td>{{$nv -> MaNV}} </td>
    </tr>
    @endforeach
</tbody>
  </thead>
</table>
<br><br><br>
  <div style="background: #A9F5A9;">
    <h2 class="text-center">Thông tin nhân viên </h2>
    <div class="row">
      <div class="col-1"></div>
    <div class="col-2">
      @foreach($nhanvien as $nv)
      <img width="300px" src="hinh/{{$nv -> hinh}}">
      @endforeach
    </div>
    <div class="col-6">
        
    </div>

  </div>
  </div>
 
    
    </div>
    

<script type="text/javascript">
    $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#bangNhanVien tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@stop