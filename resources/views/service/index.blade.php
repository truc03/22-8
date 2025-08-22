@extends('layout.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">DỊCH VỤ CƠ KHÍ CỦA CHÚNG TÔI</h1>

    <div class="row">
        <!-- 1. Gia công cơ khí chính xác -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="https://img.freepik.com/free-photo/closeup-cnc-machine-tool-cutting-metal_181624-21143.jpg" 
                     class="card-img-top" alt="Gia công cơ khí chính xác">
                <div class="card-body">
                    <h5 class="card-title">Gia công cơ khí chính xác</h5>
                    <p class="card-text">
                        Chúng tôi chuyên nhận tiện, phay, cắt CNC chi tiết máy với độ chính xác cao, đáp ứng yêu cầu bản vẽ kỹ thuật.
                        Dịch vụ phù hợp cho sản xuất linh kiện công nghiệp, khuôn mẫu, chi tiết máy nhỏ đến phức tạp.
                        Cam kết dung sai thấp, bề mặt nhẵn bóng, kiểm tra chất lượng nghiêm ngặt trước khi giao hàng.
                    </p>
                </div>
            </div>
        </div>

        <!-- 2. Thiết kế & chế tạo máy móc -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="https://img.freepik.com/free-photo/engineer-maintaining-industrial-machine_181624-19767.jpg" 
                     class="card-img-top" alt="Chế tạo máy móc">
                <div class="card-body">
                    <h5 class="card-title">Thiết kế & chế tạo máy móc</h5>
                    <p class="card-text">
                        Đội ngũ kỹ sư cơ khí giàu kinh nghiệm đảm nhận thiết kế, chế tạo dây chuyền sản xuất, băng tải, máy móc công nghiệp.
                        Giải pháp tối ưu giúp doanh nghiệp nâng cao năng suất, tiết kiệm nhân công.
                        Chúng tôi hỗ trợ từ khâu tư vấn, thiết kế 3D, chế tạo, lắp đặt đến vận hành thử nghiệm.
                    </p>
                </div>
            </div>
        </div>

        <!-- 3. Gia công hàn cơ khí -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="https://img.freepik.com/free-photo/worker-welding-metal-construction_181624-24787.jpg" 
                     class="card-img-top" alt="Hàn cơ khí">
                <div class="card-body">
                    <h5 class="card-title">Gia công hàn cơ khí</h5>
                    <p class="card-text">
                        Cung cấp dịch vụ hàn điện, hàn MIG, TIG cho thép, inox và hợp kim.
                        Nhận gia công kết cấu thép, chế tạo bồn chứa, bệ máy, giàn khung, cầu thang công nghiệp.
                        Đảm bảo mối hàn chắc chắn, thẩm mỹ cao, bền bỉ trong điều kiện khắc nghiệt.
                    </p>
                </div>
            </div>
        </div>

        <!-- 4. Bảo trì & sửa chữa máy công nghiệp -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="https://img.freepik.com/free-photo/mechanic-repairing-industrial-machine_181624-29453.jpg" 
                     class="card-img-top" alt="Bảo trì máy">
                <div class="card-body">
                    <h5 class="card-title">Bảo trì & sửa chữa máy công nghiệp</h5>
                    <p class="card-text">
                        Dịch vụ bảo trì định kỳ, khắc phục sự cố khẩn cấp cho các loại máy móc công nghiệp.
                        Chúng tôi thay thế linh kiện hao mòn, cân chỉnh, vệ sinh và kiểm tra hệ thống điện – cơ.
                        Cam kết rút ngắn thời gian dừng máy, giúp khách hàng duy trì sản xuất ổn định.
                    </p>
                </div>
            </div>
        </div>

        <!-- 5. Gia công & lắp đặt kết cấu thép -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="https://img.freepik.com/free-photo/steel-beam-welding_181624-23298.jpg" 
                     class="card-img-top" alt="Kết cấu thép">
                <div class="card-body">
                    <h5 class="card-title">Gia công & lắp đặt kết cấu thép</h5>
                    <p class="card-text">
                        Nhận gia công, lắp dựng nhà xưởng, giàn mái, cầu trục, bồn bể công nghiệp bằng thép.
                        Sản phẩm có độ bền cao, chịu lực tốt, đạt tiêu chuẩn an toàn.
                        Thi công nhanh chóng, đảm bảo tiến độ công trình và tiết kiệm chi phí cho khách hàng.
                    </p>
                </div>
            </div>
        </div>

        <!-- 6. Cung cấp phụ tùng & vật tư cơ khí -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="https://img.freepik.com/free-photo/various-industrial-metal-parts_181624-21307.jpg" 
                     class="card-img-top" alt="Phụ tùng cơ khí">
                <div class="card-body">
                    <h5 class="card-title">Cung cấp phụ tùng & vật tư cơ khí</h5>
                    <p class="card-text">
                        Cung cấp bạc đạn, bánh răng, dây curoa, bulong, vòng bi, lưỡi cắt và nhiều linh kiện thay thế khác.
                        Đảm bảo sản phẩm chính hãng, đa dạng chủng loại, giá cả cạnh tranh.
                        Hỗ trợ tư vấn chọn phụ tùng phù hợp với nhu cầu và loại máy của khách hàng.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
