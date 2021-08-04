@extends ('layouts.main-layout')

@section ('content')
<form action="{{ route('update'), $match -> id }}" method="post">

    @csrf
    @method('POST')

<input type="text" class="myForm" name="team1" value={{ $match -> team1 }} placeholder="team1">

<input type="text" class="myForm" name="team2" value={{ $match -> team2 }} placeholder="team2">

<input type="text" class="myForm" name="point1" value={{ $match -> point1 }} placeholder="point1">

<input type="text" class="myForm" name="point2" value={{ $match -> point1 }} placeholder="point2">

<select name="result" id="mySelect">
<option value="0" 
    @if ($match -> result == 0)
        selected
    @endif
>Team1</option>
<option value="1"
@if ($match -> result == 1)
        selected
    @endif
>Team2</option>
</select>

<button type="UPDATE">CREATE</button>

</form>
@endsection