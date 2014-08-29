<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Configuration Editor</title>
		@section('head')
		<link href="../assets/css/bootstrap.css" rel="stylesheet">
		<style>
			body {
				padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
			}
		</style>
		<link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
		@show
		{{ HTML::style('css/bootstrap.min.css'); }}
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="#">Digiflare/BM Configuration Editor</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class="active"><a href="#">Editor</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		@yield('body')
	</body>
</html>
