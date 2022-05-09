<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $title }}</title>
<link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
</head>
<body>
	<div class="main">
		<h1>Asean Entrepreneurship</h1>
        <h1>Profiling</h1>
		<div class="container wrapper">
            <div class="profile">
                <h2>Register</h2>
				<form action="/register" method="post">
					@csrf
					<input type="text" name="username" class="form-control" id="username" 
					placeholder="Username (min.5)" required="">
					<input type="email" name="email" class="form-control email" id="email" 
					placeholder="Email" required="">
					<input type="password" name="password" class="form-control text" id="password" 
					placeholder="Password (min.8)" required="">
					<input type="submit" value="REGISTER">
				</form>
				<p>Already have an Account? <a href="/login"> Login Now!</a></p>
                <div class="home_button">
                    <p><a href="/">Home</a></p>
                </div>
			</div>
		</div>
	</div>
</body>
</html>