<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ url('/') }}">CƠ KHÍ VIỆT NAM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
  <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Trang chủ</a></li>
  <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Giới thiệu</a></li>
  <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">Sản phẩm</a></li>
  <li class="nav-item"><a class="nav-link" href="{{ route('services.index') }}">Dịch vụ</a></li>
  <li class="nav-item"><a class="nav-link" href="{{ route('projects.index') }}">Dự án</a></li>
  <li class="nav-item"><a class="nav-link" href="{{ route('news.index') }}">Tin tức</a></li>
  <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Liên hệ</a></li>
</ul>


    </div>
  </div>
</nav>
