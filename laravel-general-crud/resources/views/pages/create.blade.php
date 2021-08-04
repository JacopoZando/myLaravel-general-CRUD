@extends ('layouts.main-layout')

@section ('content')
<form action="{{ route('store') }}" method="post">

    @csrf
    @method('POST')

<input type="text" class="myForm" name="team1" placeholder="team1">

<input type="text" class="myForm" name="team2" placeholder="team2">

<input type="text" class="myForm" name="point1" placeholder="point1">

<input type="text" class="myForm" name="point2" placeholder="point2">

<select name="result" id="mySelect">
<option value="0">Team1</option>
<option value="1">Team2</option>
</select>

<button type="submit">CREATE</button>

</form>
@endsection