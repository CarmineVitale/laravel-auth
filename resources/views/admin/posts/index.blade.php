@extends('layouts.admin')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> --}}
    
<div class="container">
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
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary" href="">Dettagli</a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="">Modifica</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="">CAncella</a>
                    </td>
                </tr>
                @endforeach
           
        </tbody>
    </table>
</div>
@endsection

