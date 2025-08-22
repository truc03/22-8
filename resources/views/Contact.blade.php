@extends('layout.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Liên hệ với chúng tôi</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        <!-- Form liên hệ -->
        <div class="col-md-6">
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Họ và tên</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Số điện thoại</label>
                    <input type="text" name="phone" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Nội dung</label>
                    <textarea name="message" class="form-control" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Gửi liên hệ</button>
            </form>
        </div>

        <!-- Thông tin công ty + Google Maps -->
        <div class="col-md-6">
            <h4>Thông tin công ty</h4>
            <p><strong>Công ty Cơ khí H-MECH</strong></p>
            <p>Địa chỉ: 123 Đường Công Nghiệp, TP.HCM</p>
            <p>Email: contact@hmech.vn</p>
            <p>Hotline: 0901 842 617</p>

            <h5 class="mt-4">Bản đồ</h5>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.469534986823!2d106.66433607428738!3d10.776530989370336"
                width="100%" height="250" style="border:0;" allowfullscreen loading="lazy">
            </iframe>
        </div>
    </div>
</div>
@endsection
