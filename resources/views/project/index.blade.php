@extends('layout.app')

@section('title', 'Danh sách Dự án Cơ khí')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">Danh sách Dự án Cơ khí</h2>

    @php
        $projects = [
            [
                'title' => 'Dự án chế tạo máy CNC',
                'description' => 'Thiết kế và chế tạo hệ thống máy CNC phục vụ gia công chính xác.',
                'image' => 'https://picsum.photos/seed/cnc/400/250'
            ],
            [
                'title' => 'Dự án kết cấu thép nhà xưởng',
                'description' => 'Thi công kết cấu thép cho nhà xưởng sản xuất công nghiệp nặng.',
                'image' => 'https://picsum.photos/seed/steel/400/250'
            ],
            [
                'title' => 'Dự án gia công cơ khí chính xác',
                'description' => 'Gia công chi tiết máy chính xác cho ngành công nghiệp ô tô.',
                'image' => 'https://picsum.photos/seed/precision/400/250'
            ],
            [
                'title' => 'Dự án băng tải tự động',
                'description' => 'Chế tạo hệ thống băng tải tự động cho dây chuyền sản xuất.',
                'image' => 'https://picsum.photos/seed/conveyor/400/250'
            ],
            [
                'title' => 'Dự án robot hàn công nghiệp',
                'description' => 'Triển khai robot hàn tự động trong sản xuất cơ khí nặng.',
                'image' => 'https://picsum.photos/seed/robot/400/250'
            ],
            [
                'title' => 'Dự án thiết bị nâng hạ',
                'description' => 'Chế tạo cầu trục và thiết bị nâng hạ cho công nghiệp xây dựng.',
                'image' => 'https://picsum.photos/seed/lift/400/250'
            ],
            // 👉 thêm 14 dự án nữa (demo 20 cái)
        ];

        // tạo 20 dự án giả lập (nếu ít hơn 20 thì clone lại cho đủ)
        for ($i = count($projects); $i < 20; $i++) {
            $projects[] = [
                'title' => "Dự án cơ khí #".($i+1),
                'description' => 'Mô tả ngắn gọn về dự án cơ khí số '.($i+1).'.',
                'image' => "https://picsum.photos/seed/project{$i}/400/250"
            ];
        }

        // phân trang thủ công: mỗi trang 6 dự án
        $perPage = 6;
        $page = request()->get('page', 1);
        $pagedData = array_slice($projects, ($page-1)*$perPage, $perPage);
        $totalPages = ceil(count($projects) / $perPage);
    @endphp

    <div class="row">
        @foreach($pagedData as $project)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $project['image'] }}" class="card-img-top" alt="{{ $project['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project['title'] }}</h5>
                        <p class="card-text">{{ $project['description'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Phân trang thủ công -->
    <nav>
        <ul class="pagination justify-content-center mt-4">
            @for($i = 1; $i <= $totalPages; $i++)
                <li class="page-item {{ $i == $page ? 'active' : '' }}">
                    <a class="page-link" href="?page={{ $i }}">{{ $i }}</a>
                </li>
            @endfor
        </ul>
    </nav>
</div>
@endsection
