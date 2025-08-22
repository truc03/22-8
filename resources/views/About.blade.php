@extends('layout.app')

@section('title', 'Thông tin công ty')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4 fw-bold">THÔNG TIN CÔNG TY</h2>
    
    <div class="row">
        <div class="col-md-7">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th class="w-25">Tên công ty</th>
                        <td>CÔNG TY TNHH CƠ KHÍ ABC</td>
                    </tr>
                    <tr>
                        <th>Ngày thành lập</th>
                        <td>20/08/2010</td>
                    </tr>
                    <tr>
                        <th>Địa chỉ trụ sở</th>
                        <td>123 Đường Công Nghiệp, Quận 9, TP. Hồ Chí Minh, Việt Nam</td>
                    </tr>
                    <tr>
                        <th>Nhà máy</th>
                        <td>Khu công nghiệp Sóng Thần, Dĩ An, Bình Dương</td>
                    </tr>
                    <tr>
                        <th>Vốn điều lệ</th>
                        <td>10,000,000,000 VNĐ</td>
                    </tr>
                    <tr>
                        <th>Người đại diện</th>
                        <td>Nguyễn Văn A – Giám đốc</td>
                    </tr>
                    <tr>
                        <th>Lĩnh vực hoạt động</th>
                        <td>
                            <ul class="mb-0">
                                <li>Gia công cơ khí chính xác</li>
                                <li>Thiết kế & chế tạo máy công nghiệp</li>
                                <li>Sản xuất kết cấu thép</li>
                                <li>Dịch vụ bảo trì & sửa chữa máy móc</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>Khách hàng tiêu biểu</th>
                        <td>Công ty ô tô XYZ, Tập đoàn thép ABC, Nhà máy điện DEF</td>
                    </tr>
                    <tr>
                        <th>Số lượng nhân viên</th>
                        <td>150+</td>
                    </tr>
                    <tr>
                        <th>Điện thoại</th>
                        <td>(028) 1234 5678</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>info@cokhiabc.com</td>
                    </tr>
                    <tr>
                        <th>Website</th>
                        <td><a href="http://www.cokhiabc.com" target="_blank">www.cokhiabc.com</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="col-md-5 d-flex align-items-center justify-content-center">
     <img src="{{ asset('img/abc.jpg') }}" alt="Công ty Cơ khí ABC" class="img-fluid rounded shadow">

    </div>

    <div class="mt-5">
        <h4 class="fw-bold">Sứ mệnh</h4>
        <p>Chúng tôi cam kết mang đến các giải pháp cơ khí chính xác, chất lượng cao, góp phần vào sự phát triển của ngành công nghiệp Việt Nam.</p>

        <h4 class="fw-bold">Tầm nhìn</h4>
        <p>Trở thành công ty cơ khí hàng đầu khu vực Đông Nam Á trong lĩnh vực chế tạo máy và kết cấu thép.</p>

        <h4 class="fw-bold">Giá trị cốt lõi</h4>
        <ul>
            <li>Chất lượng – An toàn – Bền vững</li>
            <li>Khách hàng là trung tâm</li>
            <li>Đổi mới sáng tạo</li>
            <li>Phát triển con người</li>
        </ul>
    </div>
</div>
@endsection
