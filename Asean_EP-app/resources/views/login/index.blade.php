<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $title }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
</head>
<body>
	<div class="main">
		<h1>Asean Entrepreneurship</h1>
        <h1>Profiling</h1>
		<div class="container">
			<div class="profile">
      	<h2>Login</h2>
				<form action="/login" method="post">
					@csrf
					<input class="form-control text" type="text" name="username" 
					placeholder="Username" autofocus required="">
					<input class="form-control password" type="password" name="password" 
					placeholder="Password" required="">
					<input type="submit" value="LOGIN">
				</form>
				<p>Don't have an Account? <a href="/register"> Sign Up!</a></p>
				<div class="home_button">
                    <p><a href="/">Home</a></p>
                </div>
			</div>
		</div>
	</div>
</body>
</html>