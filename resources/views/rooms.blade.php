<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	@extends('app')
	@section('content')
	<div class="container">
	    @foreach ($room_list as $room)
	    <p>{{$room->number}} — {{$room->roominess}}</p>
	    @endforeach
	</div>
	@endsection

</body>
</html>