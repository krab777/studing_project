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
	    @foreach ($subj_list as $subj)
	    <p>{{$subj->title}} — {{$subj->descripiton}}</p>
	    @endforeach
	</div>
	@endsection

</body>
</html>