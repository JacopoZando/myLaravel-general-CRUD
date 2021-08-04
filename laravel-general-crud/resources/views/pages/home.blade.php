@extends ('layouts.main-layout')

@section('content')
<a id="creation" href="{{ route('create') }} ">CREATE NEW RESULT</a>
<ul>
@foreach ($matches as $match)

<li>
    <a href="{{ route('show', $match -> id) }}">
    {{ $match -> team1 }} - {{ $match -> team2 }} 
    </a>
    <a href="{{ route('edit', $match -> id) }}">&#9998;</a>
    <a href="{{ route('delete', $match -> id) }}">&#x2612;</a>
</li>

@endforeach
</ul>
<a id="creation" href="{{ route('create') }} ">CREATE NEW RESULT</a>
@endsection