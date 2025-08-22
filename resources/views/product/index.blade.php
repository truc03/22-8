@extends('layout.app')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Sản phẩm cơ khí</h2>

    {{-- Bộ lọc danh mục --}}
    <div class="mb-4 text-center">
        <button class="btn btn-outline-primary m-1" onclick="filterCategory('all')">Tất cả</button>
        <button class="btn btn-outline-primary m-1" onclick="filterCategory('máy móc')">Máy móc</button>
        <button class="btn btn-outline-primary m-1" onclick="filterCategory('thiết bị')">Thiết bị</button>
        <button class="btn btn-outline-primary m-1" onclick="filterCategory('khuôn mẫu')">Khuôn mẫu</button>
        <button class="btn btn-outline-primary m-1" onclick="filterCategory('linh kiện')">Linh kiện</button>
    </div>

    {{-- Danh sách sản phẩm --}}
    <div class="row" id="product-list">
        @php
            $products = [
                ['name' => 'Máy tiện CNC', 'category' => 'máy móc', 'desc' => 'Máy tiện CNC hiện đại, độ chính xác cao.', 'img' => 'https://images.unsplash.com/photo-1581090700227-4c4d2f3f6a91'],
                ['name' => 'Máy phay CNC', 'category' => 'máy móc', 'desc' => 'Gia công kim loại tốc độ cao.', 'img' => 'https://images.unsplash.com/photo-1603921326210-6edd2d60ca68'],
                ['name' => 'Robot hàn tự động', 'category' => 'thiết bị', 'desc' => 'Hệ thống robot hàn MIG/TIG.', 'img' => 'https://images.unsplash.com/photo-1603398938378-e54c6c1a56a1'],
                ['name' => 'Băng tải công nghiệp', 'category' => 'thiết bị', 'desc' => 'Dây chuyền băng tải cho nhà máy.', 'img' => 'https://images.unsplash.com/photo-1581092334655-0b6aafbd7d2d'],
                ['name' => 'Khuôn ép nhựa', 'category' => 'khuôn mẫu', 'desc' => 'Khuôn mẫu nhựa chính xác cao.', 'img' => 'https://images.unsplash.com/photo-1520607162513-77705c0f0d4a'],
                ['name' => 'Khuôn dập kim loại', 'category' => 'khuôn mẫu', 'desc' => 'Khuôn dập kim loại phục vụ sản xuất.', 'img' => 'https://images.unsplash.com/photo-1594381898411-84676fca4a11'],
                ['name' => 'Trục vít me', 'category' => 'linh kiện', 'desc' => 'Trục vít me bi chất lượng cao.', 'img' => 'https://images.unsplash.com/photo-1629810033915-91c6cf5d6a48'],
                ['name' => 'Bạc đạn công nghiệp', 'category' => 'linh kiện', 'desc' => 'Bạc đạn chịu tải trọng lớn.', 'img' => 'https://images.unsplash.com/photo-1581090700227-4c4d2f3f6a91'],
                ['name' => 'Máy cắt laser CNC', 'category' => 'máy móc', 'desc' => 'Máy cắt laser công suất cao.', 'img' => 'https://images.unsplash.com/photo-1629810033915-91c6cf5d6a48'],
                ['name' => 'Máy chấn tôn CNC', 'category' => 'máy móc', 'desc' => 'Gia công uốn/chấn tôn chính xác.', 'img' => 'https://images.unsplash.com/photo-1603921326210-6edd2d60ca68'],
                ['name' => 'Hệ thống thủy lực', 'category' => 'thiết bị', 'desc' => 'Thiết bị thủy lực cho sản xuất.', 'img' => 'https://images.unsplash.com/photo-1603398938378-e54c6c1a56a1'],
                ['name' => 'Bánh răng công nghiệp', 'category' => 'linh kiện', 'desc' => 'Bánh răng thép cứng, độ bền cao.', 'img' => 'https://images.unsplash.com/photo-1581092334655-0b6aafbd7d2d'],
            ];
        @endphp

        @foreach ($products as $product)
            <div class="col-md-3 mb-4 product-item" data-category="{{ $product['category'] }}">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $product['img'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">{{ $product['desc'] }}</p>
                        <span class="badge bg-secondary">{{ ucfirst($product['category']) }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>
    function filterCategory(category) {
        let items = document.querySelectorAll('.product-item');
        items.forEach(item => {
            if (category === 'all' || item.dataset.category === category) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }
</script>
@endsection
