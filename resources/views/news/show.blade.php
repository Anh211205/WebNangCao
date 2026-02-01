@extends('layouts.myapp')

@section('content')
<div class="container">
    <h1>{{ $news->title }}</h1>

    <p>{!! nl2br(e($news->content)) !!}</p>

    {{-- Flash message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Comment form --}}
    <div class="card mb-4">
        <div class="card-body">
            @auth
                @include('comments._form', ['news' => $news])
            @else
                <p>Vui lòng <a href="{{ route('login') }}">đăng nhập</a> để gửi bình luận.</p>
            @endauth
        </div>
    </div>

    {{-- Comments list --}}
    @include('comments._list', ['comments' => $comments])

    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-3">
        {{ $comments->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
