@extends('layouts.admin')

@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input class="form-control" type="text" id="title" name="title" value="{{old('title', $post->title)}}">
        </div>
        <div class="form-group">
            <label for="body">Corpo</label>
            <textarea class="form-control" name="body" id="body">{{old('body', $post->body)}}</textarea>
        </div>
        <div class="form-group">
            <label class="d-block" for="img">Immagine</label>
           @if(!empty($post->img))
                <img class="mb-5" width="200" src="{{ asset('storage/' . $post->img) }}" alt=" {{ $post->title}}">
           @endif 
            <input class="form-control" type="file" id="img" name="img" accept="image/*">
        </div>
        <input class="btn btn-success" type="submit" value="Aggiorna">
    </form>
</div>
@endsection