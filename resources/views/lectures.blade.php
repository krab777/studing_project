

	@extends('app')
	@section('content')
	<div class="container">
	    @foreach ($lect_list as $lect)
	    <p>{{$lect->fulname}}</p>
	    @endforeach
	</div>
	@endsection
	
