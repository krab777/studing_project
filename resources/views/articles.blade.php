<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Articles</title>
	<style>
		.article {
			border: solid 3px;
			border-radius: 4px;
			width: 400px;
			line-height: 30px;
			font-size: 25px;
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
	<h1>Articles:</h1>

	<div class="article">
		@foreach ($articles as $article)
			<p>Title:<b> {{$article->name}}</b></p>
			<div>{{$article->content}}</div>
		@endforeach
	</div>
	<div class="links">
		<a href="{{ url('/users') }}">Users</a>
	</div>
	
</body>
</html>

