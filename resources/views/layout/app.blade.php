<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Website Cơ khí')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header / Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">⚙️ CƠ KHÍ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Trang chủ</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">Giới thiệu</a></li>
                    <li class="nav-item"><a href="{{ route('service.index') }}" class="nav-link">Dịch vụ</a></li>
                    <li class="nav-item"><a href="{{ route('product.index') }}" class="nav-link">Sản phẩm</a></li>
                    <li class="nav-item"><a href="{{ route('project.index') }}" class="nav-link">Dự án</a></li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Nội dung -->
    <main class="container py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">© {{ date('Y') }} Công ty Cơ khí. thiết kế bởi Nguyễn Chính TRỰC.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
