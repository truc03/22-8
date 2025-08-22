@extends('layout.app')
@section('title','Trang chủ')

@section('content')
<div class="text-center mb-5">
    <h1 class="fw-bold">Chào mừng đến với Công ty Cơ khí</h1>
    <p class="text-muted">Chuyên gia công, chế tạo bồn bể, kết cấu thép, hệ thống đường ống...</p>
</div>

<div id="carouselExample" class="carousel slide mb-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/slide1.jpg" class="d-block w-100 rounded" alt="Máy móc 1">
    </div>
    <div class="carousel-item">
      <img src="/images/slide2.jpg" class="d-block w-100 rounded" alt="Máy móc 2">
    </div>
    <div class="carousel-item">
      <img src="/images/slide3.jpg" class="d-block w-100 rounded" alt="Dự án cơ khí">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title">Dịch vụ</h5>
                <p class="card-text">Xem các dịch vụ cơ khí chuyên nghiệp của chúng tôi</p>
                <a href="{{ route('service.index') }}" class="btn btn-primary">Xem thêm</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title">Dự án</h5>
                <p class="card-text">Các dự án tiêu biểu đã thực hiện</p>
                <a href="{{ route('project.index') }}" class="btn btn-primary">Xem thêm</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title">Liên hệ</h5>
                <p class="card-text">Liên hệ để nhận báo giá và tư vấn</p>
                <a href="{{ route('contact') }}" class="btn btn-primary">Liên hệ ngay</a>
            </div>
        </div>
    </div>
</div>
@endsection
