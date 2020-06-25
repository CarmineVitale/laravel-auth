@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Public Posts</h1>
    @foreach ($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <hr>
    @endforeach
    <div class="paginate">
        {{ $posts->links() }}
    </div>
</div>
@endsection