<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tasks</title>
</head>
<body>
	<ul>
		@foreach ($tasks as $task)
			<li>{{ $task->body }}</li>
		@endforeach
	</ul>	
</body>
</html>