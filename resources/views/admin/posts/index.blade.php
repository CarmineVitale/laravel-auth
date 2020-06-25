@extends('layouts.admin')

@section('content')
<div class="container">
    @if(session('deleted')) 
    <div class="alert alert-danger">
        <p>Post cancellato con successo.</p>
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Creato</th>
                <th>Modificato</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>
            
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at->format('d/m/y G:i') }}</td>
                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('admin.posts.show', $post->id) }}">Dettagli</a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{ route('admin.posts.edit', $post->id) }}">Modifica</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger"  type="submit" value="Cancella">
                        </form>
                    </td>
                </tr>
                @endforeach
           
        </tbody>
    </table>
</div>
@endsection

