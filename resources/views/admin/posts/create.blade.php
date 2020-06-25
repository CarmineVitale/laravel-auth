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
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input class="form-control" type="text" id="title" name="title" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label for="body">Corpo</label>
            <textarea class="form-control" name="body" id="body">{{old('body')}}</textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="Crea">
    </form>
</div>
@endsection