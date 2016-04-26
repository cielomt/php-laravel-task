<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Laravel Task</title>
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">SIMPLE CONTACTS</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="{{ url('/') }}">Home</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				@if (Auth::guest())
					<li><a href="{{ url('/auth/login') }}">Login</a></li>
					<li><a href="{{ url('/auth/register') }}">Register</a></li>
				@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							{{ ucfirst(Auth::user()->username) }} <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{ url('/contacts') }}">
									<span class="glyphicon glyphicon-cog"></span>&nbsp; Manage Contacts
								</a>
							</li>
							<li>
								<a href="/account/{{Auth::user()->id}}/edit">
									<span class="glyphicon glyphicon-wrench"></span>&nbsp; Account Settings
								</a>
							</li>
							<li>
								<a href="{{ url('/auth/logout') }}">
									<span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout
								</a>
							</li>
						</ul>
					</li>
				@endif
			</ul>
		</div>
	</div>
</nav>
<div class = "col-md-8 col-md-offset-2">
	@include('partials.flash')
	@yield('content')
</div>
<script>
	$('div.alert').not('.alert-important').delay(2000).slideUp(200);
</script>
</body>
</html>
