<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">

	<title>Login</title>
</head>
<body>
	<div class="container">
		<form action="/login" method="POST" class="login-email">
      @csrf
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
       {{-- Alert --}}
       @if(session()->has('success'))
       <div class="alert alert-success alert-dismissible fade show" role="alert">
       {{ session('success') }}
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
       @endif
       {{-- End Alert --}}

       {{-- Alert --}}
       @if(session()->has('loginError'))
       <div class="alert alert-danger alert-dismissible fade show" role="alert">
       {{ session('loginError') }}
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
       @endif
       {{-- End Alert --}}

			<div class="input-group">
				<input type="email" placeholder="Email" name="email" autocomplete="off">
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" autocomplete="off">
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
		</form>
    <p class="login-register-text">Don't have an account? <a href="/register">Register Here</a>.</p>
	</div>
</body>
</html>