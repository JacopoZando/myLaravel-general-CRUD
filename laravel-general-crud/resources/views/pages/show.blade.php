@extends ('layouts.main-layout')

@section('content')

<h1>{{$match -> team1}} - {{$match -> team2}}</h1>
<h1>{{$match -> point1}} - {{$match -> point2}}</h1>
<h4>Result = {{$match -> result}}</h4>
@endsection