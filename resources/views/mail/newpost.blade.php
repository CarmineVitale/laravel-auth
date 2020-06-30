{{-- <h1>Un nuovo post è stato creato</h1>
<h2>{{ $title }}</h2>
<p> {{ $body }}</p>
<img src="{{ asset('storage/' . $img) }}" alt=" {{ $title }}"> --}}
@component('mail::message')
# Un nuovo post è stato creato

<h2>{{ $title }}</h2> 
<p> {{ $body }}</p>

@component('mail::button', ['url' => config('app.url') . '/posts' ])
Vai al blog
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent