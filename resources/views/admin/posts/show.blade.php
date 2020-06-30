@extends('layouts.admin')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Descrizione</th>
                <th>Creato</th>
                <th>Modificato</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>
            
               
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->created_at->format('d/m/y G:i') }}</td>
                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                    
                    <td>
                        <a class="btn btn-success" href="{{ route('admin.posts.edit', $post->id) }}">Modifica</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Cancella">
                        </form>
                    </td>
                </tr>
                
           
        </tbody>
    </table>
    
    @if(!empty($post->img))
        <h3>Immagine post:</h3>
        <img src="{{ asset('storage/' . $post->img) }}" alt="{{ $post->title }}">
    @endif
</div>
@endsection
