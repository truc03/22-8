@extends('layout.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Tin Tức Mới Nhất</h2>

    <div class="row">
        @forelse ($news as $item)
            <div class="col-md-6 mb-3">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $item->image ?? 'https://via.placeholder.com/600x300' }}" 
                         class="card-img-top" alt="{{ $item->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ Str::limit($item->content, 150) }}</p>
                        <small class="text-muted">Ngày đăng: {{ $item->created_at->format('d/m/Y') }}</small>
                    </div>
                </div>
            </div>
        @empty
            <p>Chưa có tin tức nào.</p>
        @endforelse
    </div>
</div>
@endsection
