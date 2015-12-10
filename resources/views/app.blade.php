<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mines Coding</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <style>
    	body{ background-color: darkgrey}
		#title { text-align: center; }
    </style>
</head>
<body>
	<h1 id="title"><span style="text-shadow: 2px 2px 2px #CCCCCC">Mines Coding</span>
		<span style="float:right; margin:5px">
			<?php
				if (Auth::check()) {
					$url = url('/auth/logout');
					echo "<a href='$url' class='btn btn-primary btn-sm'>Logout</a>";
				}
			?>
		</span>
		<span style="float:right; margin:5px">
			<a href="{{ url('/') }}" class='btn btn-primary btn-sm'>Home</a>
		</span>
		<span style="float:left ; margin:5px">
			<p>
				<?php $route = Route::current()->getUri();
					if ($route == 'admin/generate') {
						$url = url('admin/');
						echo "<a href='$url' class='btn btn-primary btn-sm'>Back To Admin</a>";
					}
				?>
			</p>
		</span>
	</h1>
	<hr>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>