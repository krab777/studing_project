<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User list</title>
	<style>
		.user {
			border: solid 3px;
			border-radius: 4px;
			width: 400px;
			text-align: center;
			line-height: 30px;
			font-size: 18px;
			margin-bottom: 20px;
		}

		.links > a {
                color: black;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
	</style>
</head>
<body>
	<h1>Users:</h1>
	<div class="user">
		@foreach ($users as $user)
			<p>Name: {{$user->name}};
			<br/>
			E-mail: {{$user->email}};
			<br/>
			<a href="{{route('user_delete',$user->id)}}">Delete</a></p>
		@endforeach
	</div>

	<div class="links">
		<a href="{{ url('/articles') }}">Articles</a>
	</div>
	
	
</body>
</html>
